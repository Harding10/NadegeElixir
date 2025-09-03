<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Afficher la liste des articles
    public function index()
    {
        $articles = Article::latest()->paginate(12);
        return view('produit.dashboard', compact('articles'));
    }

    // Enregistrer un nouvel article
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

    $validatedData['author_id'] = Auth::id();
    Article::create($validatedData);

        return redirect()->route('produit.dashboard')->with('success', '✅ Article ajouté avec succès.');
    }

    // Mettre à jour un article
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

        $article->update($validatedData);

        return redirect()->route('produit.dashboard')->with('success', '✅ Article mis à jour avec succès.');
    }

    // Supprimer un article
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('produit.dashboard')->with('success', '🗑️ Article supprimé avec succès.');
    }
}
