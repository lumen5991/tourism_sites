<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class CategoryController extends Controller
{


    // Afficher la liste des catégories
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }
    

    // Afficher le formulaire de création d'une nouvelle catégorie
    public function create()
    {
        return view('admin.createCategory');
    }

    // Enregistrer une nouvelle catégorie dans la base de données
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'nullable',
        ]);

        // Création d'une nouvelle catégorie
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    // Afficher les détails d'une catégorie spécifique
    public function show(Category $category)
    {
        return view('admin.showCategory', compact('category'));
    }

    // Afficher le formulaire de modification d'une catégorie
    public function edit(Category $category)
    {
        return view('admin.editCategory', compact('category'));
    }

    // Mettre à jour une catégorie dans la base de données
    public function update(Request $request, Category $category)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable',
        ]);

        // Mise à jour de la catégorie
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Supprimer une catégorie de la base de données
    public function destroy(Category $category)
    {
        // Suppression de la catégorie
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
