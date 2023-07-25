<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout d'étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-section {
            width: 48%;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="file"] {
            margin-top: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Formulaire d'ajout d'étudiant</h1>
    <div class="form-container">
        <div class="form-section">
            <form id="ajoutEtudiantForm" enctype="multipart/form-data">
                <label for="matricule">Matricule:</label>
                <input type="text" id="matricule" name="matricule" required>

                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="date_de_naissance">Date de naissance:</label>
                <input type="date" id="date_de_naissance" name="date_de_naissance" required>

                <label for="genre">Genre:</label>
                <select name="genre" id="genre" required>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                </select>
            </form>
        </div>
        <div class="form-section">
            <form id="ajoutEtudiantForm2" enctype="multipart/form-data">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="cycle">Cycle:</label>
                <select name="cycle" id="cycle" required>
                    @foreach ($cycles as $cycle)
                        <option value="{{ $cycle }}">{{ $cycle }}</option>
                    @endforeach
                </select>
                
                <label for="niveau">Niveau:</label>
                <select name="niveau" id="niveau" required>
                    @foreach ($niveaux as $cycle => $niveauOptions)
                        <optgroup label="{{ $cycle }}">
                            @foreach ($niveauOptions as $niveau)
                                <option value="{{ $niveau }}">{{ $niveau }}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>

                <label for="annee_academique">Année académique:</label>
                <input type="text" id="annee_academique" name="annee_academique" required>

                <label for="photo">Photo:</label>
                <input type="file" id="photo" name="photo">
                <br><br>
                <input type="submit" value="Ajouter">
            </form>
        </div>
    </div>

    <script>
        // Ajoute une classe CSS au formulaire lorsque soumis
        document.getElementById("ajoutEtudiantForm").addEventListener("submit", function(event) {
            event.preventDefault();
            this.classList.add("submitted");
        });

        document.getElementById("ajoutEtudiantForm2").addEventListener("submit", function(event) {
            event.preventDefault();
            this.classList.add("submitted");
        });
    </script>

    <style>
        /* Style pour le formulaire soumis */
        .submitted {
            opacity: 0.7;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out;
        }
    </style>
</body>
</html>
