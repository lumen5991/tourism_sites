<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\TouristSite;
use App\Models\Category;
use App\Models\Location;
use App\Models\MediaSite;
use Illuminate\Support\Str; // For generating random strings

class TouristSiteController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        $sites = TouristSite::all();
        return view('sites.sites', compact('categories', 'locations', 'sites'));
    }
    

    public function store(Request $request)
    {
        // Authentication check
        if (!Auth::check()) {
            return redirect()->route('tourist_sites.create')->with('error', 'Veuillez vous connecter ou vous inscrire avant d\'effectuer cette action.');
        }

        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|exists:locations,id',
            'category' => 'required|exists:categories,id',
            'status' => 'boolean',
            'location_latitude' => 'required|numeric',
            'location_longitude' => 'required|numeric',
            'image' => 'required|image|max:2048',
        ]);

        // Create TouristSite
        $touristSite = TouristSite::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'category' => $request->category,
            'location_latitude' => $request->location_latitude,
            'location_longitude' => $request->location_longitude,
            'status' => false// 
        ]);



        // Enregistrer l'image dans la table MediaSites
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tourist_site_images', 'tourist_sites_images');

            $parts = explode('.', $imagePath);
            $extension = end($parts);

            $mediaSite = new MediaSite([
                'path' => $imagePath,
                'tourist_site' => $touristSite->id,
                'tourist_site_id' => $touristSite->id,
                'type' => $extension
            ]);

            $touristSite->mediaSites()->save($mediaSite);
        }



        return redirect()->route('tourist_sites.create')->with('success', 'Site touristique ajouté avec succès!');
    }
}




