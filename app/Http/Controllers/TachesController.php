<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
USE Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer la liste des projets et des utilisateurs
        $projets = DB::table('projets')->get(['id', 'titre']);
        $users = DB::table('users')->get(['id', 'name']);
    
        // Retourner la vue avec les données
        return view('taches', [
            'projets' => $projets,
            'users' => $users,
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données du formulaire
            $validatedData = $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'projet_id' => 'required|integer|exists:projets,id',
                'priorite' => 'required|string|in:faible,moyen,urgent',
            ]);
    
            // Récupération de l'utilisateur connecté
            $userId = Auth::id();
    
            // Si l'utilisateur assigné n'est pas défini, on l'assigne à l'utilisateur connecté
            $assigne_a = $request->input('assigne_a') ?? Auth::id();
    

            //dd($assigne_a);
            // Création de la tâche dans la base de données
            DB::table('taches')->insert([
                'titre' => $validatedData['titre'],
                'description' => $validatedData['description'],
                'statut' => 'non commencé', // Statut par défaut
                'priorite' => $validatedData['priorite'],
                'projet_id' => $validatedData['projet_id'],
                'assigne_a' => $assigne_a,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    
            // Redirection vers la vue de création avec un message de succès
            return redirect()->route('taches.create')->with('success', 'Tâche créée avec succès.');
        } catch (\Exception $e) {
            // Gérer les erreurs et retourner à la vue avec un message d'erreur
            return redirect()->route('taches.create')->with('error', 'Erreur lors de la création de la tâche : ' . $e->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
