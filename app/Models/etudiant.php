<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'date_de_naissance',
        'genre',
        'email',
        'niveau',
        'cycle',
        'annee_academique',
        'matricule',
    ];
}

