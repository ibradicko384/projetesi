<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_de_naissance');
            $table->string('genre');
            $table->string('email');
            $table->string('niveau');
            $table->string('cycle');
            $table->string('annee_academique');
            $table->string('matricule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
