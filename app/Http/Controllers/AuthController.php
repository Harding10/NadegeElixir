<?php

namespace App\Http\Controllers;

use App\Models\User; // Import du modèle User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Affiche la page d'inscription si l'utilisateur n'est pas connecté.
     */
    public function showSignUp()
    {
        if (Auth::check()) {
            // Si l'utilisateur est déjà connecté, on le redirige vers le dashboard
            return redirect()->route('dashboard');
        }
        // Sinon, on affiche la vue d'inscription
        return view('auth.register');
    }

    /**
     * Affiche la page de connexion si l'utilisateur n'est pas connecté.
     */
    public function showFormlogin()
    {
        if (Auth::check()) {
            // Si connecté, redirection vers le dashboard
            return redirect()->route('dashboard');
        }
        // Sinon, affichage du formulaire de login
        return view('auth.login');
    }

    /**
     * Traite la validation des données et la tentative de connexion (login).
     */
    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string'
        ]);

        // Tentative de connexion avec email et mot de passe
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            } else {
                // Redirige les clients vers une page d'accueil ou une page spécifique client
                return redirect()->route('client.home');
            }
        }

        // Si échec → retour avec message d'erreur
        return back()->withErrors([
            'email' => "L'adresse email ou le mot de passe est incorrect."
        ]);
    }

    /**
     * Traite l'enregistrement d'un nouvel utilisateur (sign up).
     */
    public function signUp(Request $request)
    {
        // Validation des champs
        $request->validate([
            'name'     => 'required|string|max:250',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);

        // Création de l'utilisateur en BDD
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), // Hachage du mot de passe
            'role'     => 'client', // Par défaut client
        ]);

        // Connexion automatique après inscription
        Auth::login($user);

        // Redirection vers dashboard avec message de succès
        return redirect()->route('dashboard')->with('success', 'Bienvenue, votre compte a été créé avec succès !');
    }

    /**
     * Déconnecte l'utilisateur.
     */
    public function logout()
    {
        Auth::logout(); // Déconnexion
        return redirect()->route('login'); // Redirection vers la page de connexion
    }
}
