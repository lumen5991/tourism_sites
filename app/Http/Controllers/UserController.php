<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TourismGuide;
use Laravel\Passport\ClientRepository;
use Illuminate\Support\Facades\Auth;
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
public function login(Request $request)
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
        return redirect()->route('listUser');
    } elseif ($user->hasRole('guide')) {
        return redirect()->route('guide');
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
    dd($users);

    // Renvoyer la vue avec les utilisateurs
    return view('admin.listUser', compact('users'));
}

    
}
