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


//route pour deconnexion
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


////////////////// creation de vue dashboard et///////// 
//middleware auth pour dire que les personne nom autoriser ne pouront pas vaoir acces a cette page 
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');



Route::get('/produit/dashboard', function () {
    return view('produit.dashboard');
})->name('produit.dashboard')->middleware('auth');

Route::get('/parametres', function(){
    return view('parametres');
})->name('parametres')->middleware('auth');





//////////////////création de vue client /////////////////

Route::get('/client/home', function(){
    return view('client.home');
})->name('client.home')->middleware('auth');
