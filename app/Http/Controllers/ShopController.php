<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(12);
        return view('client.boutique', compact('articles'));
    }
}
