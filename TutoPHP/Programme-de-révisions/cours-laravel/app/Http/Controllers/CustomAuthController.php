<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class CustomAuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function index()
    {
        return view('auth.login');
    }

    // Traitement de la connexion
    public function customLogin(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Vérification des identifiants
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->withSuccess('Connexion réussie.');
        }

        // Redirection avec erreur si échec authentification
        return redirect()->route('login')->withError('Adresse e-mail ou mot de passe incorrect.');
    }

    // Afficher le formulaire d'inscription
    public function registration()
    {
        return view('auth.registration');
    }

    // Traiter l'inscription (création utilisateur)
    public function customRegistration(Request $request)
    {
        // Validation des champs + confirmation mot de passe
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed', // Vérifie password_confirmation
        ]);

        // Création utilisateur (appel méthode privée "create")
        $this->create($request->all());

        // Redirection vers le tableau de bord après inscription réussie
        return redirect()->route('dashboard')->withSuccess('Vous vous êtes inscrit avec succès.');
    }

    // Créer un nouvel utilisateur
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Tableau de bord (protection supplémentaire via Auth::check())
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect()->route('login')->withError("Vous n'êtes pas autorisé(e) à accéder à cette page.");
    }

    // Déconnexion (vider session et déconnecter utilisateur)
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->withSuccess('Vous avez été déconnecté avec succès.');
    }
}
