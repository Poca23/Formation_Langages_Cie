<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Chapter; // Importation correcte du modèle Chapter

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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Tenter de se connecter
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->withSuccess('Connexion réussie.');
        }

        return redirect()->route('login')->withErrors(['email' => 'Adresse e-mail ou mot de passe incorrect.']);
    }

    // Afficher le formulaire d'inscription
    public function registration()
    {
        return view('auth.registration');
    }

    // Traiter l'inscription (création utilisateur)
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $this->create($request->all());

        return redirect()->route('dashboard')->withSuccess('Vous vous êtes inscrit avec succès.');
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Tableau de bord
    public function dashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Calcul de la progression globale
            $totalChapters = Chapter::count();
            $completedChapters = $user->completedChapters()->wherePivot('completed', true)->count();
            $progress = $totalChapters > 0 ? ($completedChapters / $totalChapters) * 100 : 0;

            // Récupérer les chapitres avec progression
            $chapters = $user->Chapter()
                ->get()
                ->map(function ($chapter) {
                    $chapter->progress = $chapter->pivot->completed ? 100 : 0;
                    return $chapter;
                });

            // Variables fictives pour quiz et réussites
            $quizResults = [];
            $achievements = [];

            return view('dashboard', compact('progress', 'chapters', 'quizResults', 'achievements'));
        }

        return redirect()->route('login')->withError("Vous n'êtes pas autorisé(e) à accéder à cette page.");
    }

    // Déconnexion
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->withSuccess('Vous avez été déconnecté avec succès.');
    }
}
