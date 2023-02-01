<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {

        //on va récupérer la liste de tout les etudiants
        $etudiants = Etudiant::orderBy("nom", "asc")->paginate(5);
        return view("etudiant", compact("etudiants"));
    }

    public function create()
    {

        $classes = Classe::all();
        return view("createEtudiant", compact("classes"));
    }

    public function edit(Etudiant $etudiant)
    {
        $classes = Classe::all();
        return view("editEtudiant", compact("etudiant", "classes"));
    }

    public function store(Request $request)
    {

        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required"
        ]);

        //atheya trecupery ay haja mawjouda fl fillable mtaa Etudiant.php
        //Etudiant::create($request->all());
        //houni je peux spécifier
        Etudiant::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id,
        ]);
        return back()->with("success", "Etudiant ajouté avec succè!");
    }

    public function update(Request $request, Etudiant $etudiant)
    {

        //atheya to check la validation des données
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "classe_id" => "required"
        ]);

        //atheya trecupery ay haja mawjouda fl fillable mtaa Etudiant.php
        //Etudiant::create($request->all());
        //houni je peux spécifier
        $etudiant->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "classe_id" => $request->classe_id,
        ]);
        return back()->with("success", "Etudiant mis à jour avec succè!");
    }

    public function delete(Etudiant $etudiant)
    {
        $nom_complet = $etudiant->nom . " " . $etudiant->prenom;
        $etudiant->delete();
        return back()->with("successDelete", "l'étudiant '$nom_complet' supprimé avec succés!");
    }
}
