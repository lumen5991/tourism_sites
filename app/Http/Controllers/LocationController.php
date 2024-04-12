<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Recherche les localisations en fonction de la saisie de l'utilisateur.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $search = $request->input('search');
    
        // Effectuer la recherche dans la base de données
        $locations = Location::where('localisation', 'like', '%' . $search . '%')->get();
    
        // Renvoyer les résultats au format JSON
        return response()->json($locations);
    }
    
}
