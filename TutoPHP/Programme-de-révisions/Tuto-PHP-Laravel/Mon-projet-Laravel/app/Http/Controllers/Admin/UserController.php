<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest; // Utilisé pour la mise à jour d'un utilisateur
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    // Affiche les informations de l'utilisateur connecté
    public function index()
    {
        $user = Auth::user(); // Récupérer l'utilisateur authentifié
        return view('admin.users.index', compact('user')); // Afficher les informations de l'utilisateur
    }

    // Affiche le formulaire d'édition de l'utilisateur
    public function edit()
    {
        $user = Auth::user(); // Récupérer l'utilisateur authentifié
        return view('admin.users.edit', compact('user')); // Affichez le formulaire d'édition
    }

    // Met à jour les informations de l'utilisateur
    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user(); // Récupérer l'utilisateur authentifié

        if ($user) { // Vérifiez si l'utilisateur est authentifié
            $user->update($request->validated()); // Mettre à jour l'utilisateur
            return redirect()->route('admin.users.index')->with('success', 'Profile updated successfully.'); // Rediriger
        }

        return redirect()->route('login')->with('error', 'You need to be logged in'); // Redirect if not authenticated
    }
    // Nouvelle méthode pour renvoyer tous les utilisateurs au format JSON
    public function apiIndex()
    {
        // Récupérer tous les utilisateurs
        $users = User::all();

        // Retourner les utilisateurs au format JSON
        return response()->json([
            'data' => $users
        ]);
    }
}