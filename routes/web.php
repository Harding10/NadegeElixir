<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


//get affiche le formlaire et post gére les requette de la BD

Route::get('/register', [AuthController::class, 'showSignUp'])->name('register');
Route::post('/register', [AuthController::class, 'signUp'])->name('registration');


Route::get('/login', [AuthController::class, 'showFormlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// creation de vue dashboard et 
//middleware auth pour dire que les personne nom autoriser ne pouront pas vaoir acces a cette page 
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/produit.dashboard', function(){
    return view('produit.dashboard');
})->name('produit.dashboard');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
