<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetsController extends Controller
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
        return view('projects');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_limite' => 'required|date|after:today',
            'statut' => 'required|string|in:en cours,terminé,annulé',
        ]);

        try {
            // Récupérer l'utilisateur connecté
            $userId = Auth::id();

            // Insertion des données dans la table 'projets'
            $projetId = DB::table('projets')->insertGetId([
                'titre' => $validatedData['titre'],
                'description' => $validatedData['description'],
                'date_limite' => $validatedData['date_limite'],
                'statut' => $validatedData['statut'],
                'userp_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Retourner un message de succès à la même page avec les anciennes entrées
            return back()->with('success', 'Projet créé avec succès!');
        } catch (\Exception $e) {
            // En cas d'erreur lors de l'insertion
            return back()->with('error', 'Une erreur s\'est produite lors de la création du projet : ' . $e->getMessage());
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
