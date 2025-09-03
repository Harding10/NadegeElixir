<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BlogController extends Controller
{
    /**
     * Afficher la liste des articles
     */
    public function index(): View
    {
        $articles = Article::with('category', 'author')->latest()->paginate(10);
        return view('client.boutique', compact('articles'));
    }

    /**
     * Afficher le formulaire de création d’article
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('produit.dashboard', compact('categories'));
    }

    /**
     * Enregistrer un nouvel article
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            // Upload Cloudinary
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $validatedData['image'] = $uploadedFileUrl;
        }

        $validatedData['author_id'] = Auth::id();

        Article::create($validatedData);

        return redirect()->route('dashboard')->with('success', '✅ Article créé avec succès.');
    }

    /**
     * Afficher le formulaire d’édition
     */
    public function edit(Article $article): View
    {
        $categories = Category::all();
        return view('blog.edit', compact('article', 'categories'));
    }

    /**
     * Mettre à jour un article
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image'       => 'nullable|image|mimes:jpg,png,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Upload Cloudinary
            $uploadedFileUrl = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $validatedData['image'] = $uploadedFileUrl;
        } else {
            $validatedData['image'] = $article->image;
        }

        $article->update($validatedData);

        return redirect()->route('dashboard')->with('success', '✅ Article mis à jour avec succès.');
    }

    /**
     * Supprimer un article
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('success', '🗑️ Article supprimé avec succès.');
    }
}
