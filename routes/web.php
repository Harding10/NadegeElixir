<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//get affiche le formlaire et post gére les requette de la BD

Route::get('/register', [AuthController::class, 'showSignUp'])->name('register');
Route::post('/register', [AuthController::class, 'signUp'])->name('registration');


Route::get('/login', [AuthController::class, 'showFormlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


//route pour deconnexion
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


////////////////// creation de vue dashboard et///////// 
//middleware auth pour dire que les personne nom autoriser ne pouront pas vaoir acces a cette page 
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');



// Routes pour la gestion des produits
Route::middleware('auth')->group(function () {
    Route::get('/produit.dashboard', [\App\Http\Controllers\ArticleController::class, 'index'])->name('produit.dashboard');
    Route::post('/produits', [\App\Http\Controllers\ArticleController::class, 'store'])->name('produit.store');
    Route::put('/produits/{article}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('produit.update');
    Route::delete('/produits/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('produit.destroy');
});

Route::get('/parametres', function(){
    return view('parametres');
})->name('parametres')->middleware('auth');





//////////////////création de vue client /////////////////

Route::get('/client/home', function(){
    return view('client.home');
})->name('client.home')->middleware('auth');


Route::get('/client/boutique', [ShopController::class, 'index'])->name('client.boutique')->middleware('auth');



/*
|--------------------------------------------------------------------------
| Articles
|--------------------------------------------------------------------------
*/

// Création d’article
Route::get('/create', [BlogController::class, 'readCategory'])->name('create')->middleware('auth');                     // Formulaire de création d’article
Route::post('/create', [BlogController::class, 'createArticles'])->name('articles.create')->middleware('auth');         // Traitement de création d’article

// Édition d’article
Route::get('/article/{id}/edit', [BlogController::class, 'dashboardArticlesSingle'])->name('articles.edit')->middleware('auth');            // Formulaire d’édition d’article
Route::put('/article/{id}', [BlogController::class, 'update'])->name('articles.update')->middleware('auth');                                // Traitement d’édition d’article

// Suppression d’article
Route::delete('/article/{id}', [BlogController::class, 'destroy'])->name('articles.destroy')->middleware('auth');                             // Traitement de suppression d’article
