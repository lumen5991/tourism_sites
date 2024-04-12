<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TourismGuide;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\ClientRepository;
use Spatie\Permission\Traits\HasRoles;


class UserController extends Controller
{
    use HasRoles;

    /**
     * Affiche le formulaire d'inscription.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('users.register');
    }

    /**
     * Enregistre un nouvel utilisateur ou guide touristique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ],
            'picture' => ['image', 'mimes:jpeg,png,jpg'],
            'address' => 'nullable|string',
            'telephone' => ['nullable', 'string', 'regex:/^\d+$/'],
            'description' => 'nullable|required_with:ifu,languages|string',
            'ifu' => 'nullable|required_with:description,languages|string',
            'languages' => 'nullable|required_with:description,ifu|string',
        ]);

        // Traitement de l'image
        $imagePath = null;
        if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('users_pictures', 'public');
        }


        // Créer un nouvel utilisateur ou guide touristique
        if ($request->filled(['description', 'ifu', 'languages'])) {
            // Création de l'utilisateur avec le rôle de guide
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'picture' => $imagePath,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'email_verified_at' => now(),
                'status' => 'pending' // Le compte du guide doit être validé par l'admin
            ]);
            // Création du guide touristique
            $guide = TourismGuide::create([
                'user' => $user->id,
                'description' => $request->description,
                'ifu' => $request->ifu,
                'languages' => $request->languages,
            ]);
            $user->assignRole('guide'); // Assigner le rôle de guide touristique
        } else {
            // Création de l'utilisateur avec le rôle d'utilisateur standard
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'picture' => $imagePath,
                'address' => $request->address,
                'telephone' => $request->telephone,
                'email_verified_at' => now(),
                'status' => 'active' // Les comptes des utilisateurs sont automatiquement actifs
            ]);
            $user->assignRole('user'); // Assigner le rôle d'utilisateur
        }

        // Création du jeton d'accès Passport
        $token = $user->createToken('TourismApp')->accessToken;
        // Redirection vers la page de connexion
        return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Vous pouvez vous connecter');
    }

    /**
     * Affiche le formulaire de connexion.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('users.login');
    }

    /**
     * Connecte un utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
  /*   public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Vérifier les informations d'identification de l'utilisateur
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors([
                'message' => "Les informations d'identification ne sont pas valides.",
            ]);
        }

        // Récupérer l'utilisateur authentifié après la tentative de connexion
        $user = Auth::user();
        // Générer un jeton Passport pour l'utilisateur
        $token = $user->createToken('TourismApp')->accessToken;

        // Vérifier si l'utilisateur actuel est un administrateur
        $user = $request->user();
        if (!$user || !$user->hasRole('admin')) {
            return redirect()->back()->withErrors([
                'message' => "Vous n'avez pas les autorisations nécessaires.",
            ]);
        }

        // Vérifier le statut du compte
        if ($user->status === 'pending') {
            Auth::logout();
            return redirect()->back()->withErrors([
                'message' => "Votre compte est en attente de validation par l'administrateur. Veuillez patienter.",
            ]);
        }



        // Redirection selon le rôle de l'utilisateur
        if ($user->hasRole('admin')) {
            return redirect()->route('getAllUsers');
        } elseif ($user->hasRole('guide')) {
            return redirect()->route('guide');
        } else {
            return redirect()->route('home');
        }
    } */
    public function login(Request $request)
    {
        // Validation des données du formulaire...
        
        // Tentative de connexion
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->withErrors([
                'message' => "Les informations d'identification ne sont pas valides.",
            ]);
        }
    
        $user = $request->user();
    
        // Vérification du statut du compte
        if ($user->status === 'pending') {
            Auth::logout();
            return redirect()->back()->withErrors([
                'message' => "Votre compte est en attente de validation par l'administrateur. Veuillez patienter.",
            ]);
        }
    
        // Création du jeton d'accès Passport
        $token = $user->createToken('TourismApp')->accessToken;
    
        // Redirection selon le rôle de l'utilisateur
        if ($user->hasRole('admin')) {
            return redirect()->route('getAllUsers');
        } elseif ($user->hasRole('guide')) {
            return redirect()->route('sites');
        } else {
            return redirect()->route('home');
        }
    }
    




    public function getAllUsers(Request $request)
    {
        $user = $request->user();

        // Vérifier si l'utilisateur actuel est un administrateur
        if (!$user || !$user->hasRole('admin')) {
            return response()->json([
                'status' => 403,
                'message' => "Vous n'avez pas les autorisations nécessaires.",
            ], 403);
        }

        // Récupérer tous les utilisateurs avec leurs rôles
        $users = User::with('roles')->get();
        /*   $users = User::all(); */



        // Renvoyer la vue avec les utilisateurs
        return view('admin.listUser', compact('users'));

    }


    public function approveGuideAccount(Request $request, $userId)
    {
        // Vérifier si l'utilisateur actuel est un administrateur
        $user = $request->user();
        if (!$user || !$user->hasRole('admin')) {
            return redirect()->back()->withErrors([
                'message' => "Vous n'avez pas les autorisations nécessaires.",
            ]);
        }


        // Assurez-vous que la relation user retourne un objet utilisateur valide
        $guide = TourismGuide::where('user', $userId)->with('user')->first();
        /*   dd($guide); */
        if (!$guide) {
            return redirect()->back()->withErrors([
                'message' => "Le guide touristique demandé n'existe pas.",
            ]);
        }

        $user = User::where('id', $guide->user)->first();

        //dd($user); 

        // Affiche maintenant l'objet User complet avec ses attributs

        // Modifiez le statut de l'utilisateur associé
        $user->status = 'active';
        $user->save();

        return redirect()->back()->with('success', "Le compte du guide a été approuvé avec succès.");

    }


    public function logout(Request $request)
    {
        // Vérifier si l'utilisateur est actuellement authentifié
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('login')->with('success', 'Vous avez été déconnecté avec succès.');
        }

        // Si l'utilisateur n'est pas authentifié, rediriger vers la page de connexion
        return redirect()->route('login');
    }



}
