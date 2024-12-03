<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Récupérer tous les utilisateurs
        $utilisateurs = DB::table('users')->get();

        // Vérifier si des utilisateurs existent
        if ($utilisateurs->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Aucun utilisateur trouvé.',
            ], 404); // Aucun utilisateur trouvé
        }

        $resultats = [];

        // Pour chaque utilisateur, récupérer ses projets
        foreach ($utilisateurs as $utilisateur) {
            // Récupérer les projets de cet utilisateur et les trier par ordre alphabétique
            $projets = DB::table('projets')
                         ->where('userp_id', $utilisateur->id) // Filtrer par ID utilisateur
                         ->orderBy('titre', 'asc') // Trier les projets par titre
                         ->get();

            // Ajouter les informations de l'utilisateur et ses projets à la réponse
            $resultats[] = [
                'utilisateur' => [
                    'nom' => $utilisateur->name,
                ],
                'projets' => $projets,
            ];
        }

        // Retourner les données utilisateur avec leurs projets associés
        return response()->json([
            'success' => true,
            'message' => 'Utilisateurs et projets récupérés avec succès.',
            'data' => $resultats,
        ], 200); // Code HTTP 200 pour récupération réussie
    }


    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */




    /**
     * Display the specified resource.
     */



    /**
     * Show the form for editing the specified resource.
     */
   

    

    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */



}
