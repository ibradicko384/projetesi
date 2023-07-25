<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte Étudiante</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Ajoutez d'autres liens CSS si nécessaire -->
    <style>
        /* Styles spécifiques pour la carte étudiante */
        .student-card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            background-color: #f5f5f5;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            color: #333;
        }

        .student-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .student-card h3 {
            margin: 0;
            font-size: 24px;
        }

        .student-card p {
            margin: 5px 0;
        }

        .student-card .label {
            font-weight: bold;
        }

        .student-card .label::after {
            content: ":";
        }
    </style>
</head>
<body>
    <div class="student-card">
        <img src="path/to/student/avatar.jpg" alt="Avatar de l'étudiant">
        <h3>{{ $etudiant->prenom }} {{ $etudiant->nom }}</h3>
        <p class="label">Date de naissance</p>
        <p>{{ $etudiant->date_de_naissance }}</p>
        <p class="label">Genre</p>
        <p>{{ $etudiant->genre }}</p>
        <p class="label">Email</p>
        <p>{{ $etudiant->email }}</p>
        <p class="label">Niveau</p>
        <p>{{ $etudiant->niveau }}</p>
        <p class="label">Cycle</p>
        <p>{{ $etudiant->cycle }}</p>
        <p class="label">Année académique</p>
        <p>{{ $etudiant->annee_academique }}</p>
        <p class="label">Matricule</p>
        <p>{{ $etudiant->matricule }}</p>
    </div>
</body>
</html>
