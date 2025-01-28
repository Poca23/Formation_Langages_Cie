<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateUserRequest; // Ajoutez ceci pour la mise à jour
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
        $user->update($request->validated()); // Mettre à jour l'utilisateur
        return redirect()->route('admin.users.index')->with('success', 'Profile updated successfully.'); // Rediriger
    }
}
