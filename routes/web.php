<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('liste');

Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);

Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);

Route::get('/etudiant/{id}/delete', [EtudiantController::class, 'delete'])->name('supprimer');


Route::get('/etudiant/{id}/modifier', [EtudiantController::class, 'modifier'])->name('modifier');

Route::post('/etudiant/{id}/mettre-a-jour', [EtudiantController::class, 'mettreAJour'])->name('mettre_a_jour');


Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant');

Route::get('/etudiant/{id}', [EtudiantController::class, 'detail'])->name('detail');


Route::get('/ajouter_secretaire', [EtudiantController::class, 'afficherFormulaire'])->name('formulaire_secretaire');


Route::post('/ajouter_secretaire', [EtudiantController::class, 'ajouterSecretaire'])->name('ajouter_secretaire');

Route::get('/gerer_etudiants', [EtudiantController::class, 'methodeGestionEtudiant'])->name('gerer_etudiants');

// web.php
Route::get('/generer_carte', 'CarteController@genererCarte')->name('generer_carte');

// routes/web.php

Route::get('/gerer_etudiants', [EtudiantController::class, 'afficherFormulaire'])->name('gerer_etudiants');

Route::post('/gerer_etudiants', [EtudiantController::class, 'ajouterEtudiant'])->name('ajouter_etudiant');


