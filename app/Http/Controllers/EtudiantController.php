<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Secretaire;
use App\Models\Admin;



class EtudiantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function liste_etudiant()
    {
        $etudiant = Etudiant::all();
        return view('liste', compact('etudiant'));
    }

    public function ajouter_etudiant()
    {
        return view('dashboard');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');  
    }



    public function delete($id)
    {
        $etudiant = Etudiant::find($id);
        if (!$etudiant) {
            return redirect()->route('etudiant')->with('error', 'Étudiant non trouvé.');
        }
        $etudiant->delete();
        return redirect()->route('etudiant')->with('status', 'Étudiant supprimé avec succès.');
    }



    public function modifier($id)
    {
        $etudiant = Etudiant::find($id);
    
        if (!$etudiant) {
            return redirect()->route('etudiant')->with('error', 'Étudiant non trouvé.');
        }
    
        return view('modifier', compact('etudiant'));
    }
    

    public function mettreAJour(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
    
        if (!$etudiant) {
            return redirect()->route('etudiant')->with('error', 'Étudiant non trouvé.');
        }
    
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->telephone = $request->telephone;
        $etudiant->save();
    
        return redirect()->route('etudiant')->with('status', 'Étudiant mis à jour avec succès.');
    }


    public function detail($id)
    {
        $etudiant = Etudiant::find($id);

        if (!$etudiant) {
        return redirect()->route('liste')->with('error', 'Étudiant non trouvé.');
        }

        return view('detail', compact('etudiant'));
    }


    public function ajouterSecretaire(Request $request)
    {
        // Valider les données du formulaire (vous pouvez utiliser les validations de Laravel)
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:admins,email',
            'mot_de_passe' => 'required|string|min:6',
        ]);

        // Créer une nouvelle secrétaire dans la base de données
        $secretaire = new Admin();
        $secretaire->nom = $request->nom;
        $secretaire->prenom = $request->prenom;
        $secretaire->email = $request->email;
        $secretaire->mot_de_passe = bcrypt($request->mot_de_passe); // Crypter le mot de passe
        $secretaire->role = 'secretaire'; // Définir le rôle de la secrétaire
        $secretaire->save();

        // Rediriger ou renvoyer une réponse à l'utilisateur
        return redirect()->route('formulaire_secretaire')->with('success', 'Secrétaire ajoutée avec succès.');
    }



        public function afficherFormulaire()
        {
            $cycles = ['Licence', 'Master', 'Doctorat'];
            $niveaux = [
                'Licence' => ['Licence 1', 'Licence 2', 'Licence 3'],
                'Master' => ['Master 1', 'Master 2'],
                'Doctorat' => ['Doctorat 1', 'Doctorat 2', 'Doctorat 3'],
            ];
    
            // Fetch the data for "cycle" and "niveau" from the database
            $etudiants = Etudiant::select('cycle', 'niveau')->distinct()->get();
    
            // Modify the $cycles and $niveaux arrays based on the fetched data
            foreach ($etudiants as $etudiant) {
                if (!in_array($etudiant->cycle, $cycles)) {
                    $cycles[] = $etudiant->cycle;
                }
    
                if (!array_key_exists($etudiant->cycle, $niveaux)) {
                    $niveaux[$etudiant->cycle] = [];
                }
    
                if (!in_array($etudiant->niveau, $niveaux[$etudiant->cycle])) {
                    $niveaux[$etudiant->cycle][] = $etudiant->niveau;
                }
            }
    
            return view('ajouter', compact('cycles', 'niveaux'));
        }
    
        public function ajouterEtudiant(Request $request)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'matricule' => 'required',
                'nom' => 'required',
                'prenom' => 'required',
                'date_de_naissance' => 'required|date',
                'genre' => 'required',
                'email' => 'required|email',
                'niveau' => 'required',
                'cycle' => 'required',
                'annee_academique' => 'required',
            ]);
    
            // Create a new Etudiant record in the database
            Etudiant::create($validatedData);
    
            // Redirect back with a success message or any other response as needed
            return back()->with('success', 'Étudiant ajouté avec succès!');
        }
    
        // Autres méthodes du contrôleur (liste_etudiant, delete, modifier, mettreAJour, detail, etc.)



        public function genererCarte($id)
        {
            // Récupérer les données de l'étudiant depuis la base de données en fonction de l'id
            
            $
    $etudiant = Etudiant::find($id);
    
            // Vérifier si l'étudiant existe
            if (!$etudiant) {
                return redirect()->route('liste')->with('error', 'Étudiant non trouvé.');
            }
    
            // Afficher la vue de la carte étudiante en passant les données de l'étudiant
            return view('carte_etudiante', compact('etudiant'));
        }
}
    
        
    

    


    