<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link href="boost/getbootstrap.com_docs_5.3_dist_css_bootstrap.min.css" rel="stylesheet">
    <link href="boost/cdn.jsdelivr.net_npm_bootstrap-icons@1.10.3_font_bootstrap-icons.css" rel="stylesheet">
    <style>
          body{
            background-color: lavenderblush;
        }
    </style>
    <script src="boost/getbootstrap.com_docs_5.3_assets_js_color-modes.js"></script>
</head>
<body>
    <form class="form" style="margin: 50px;" action="/ajouter_secretaire" method="POST">
    <h1 class="text-center">Inscrire une secrétaire</h1>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" name="nom" id="floatingInput" placeholder="Nom" required>
        <label for="floatingInput">Nom</label>
    </div>
    <div class="form-floating mt-3">
        <input type="text" class="form-control" name="prenom" id="floatingInput" placeholder="Prénom" required>
        <label for="floatingInput">Prénom</label>
    </div><br>
    <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com" required>
        <label for="floatingEmail">Email</label>
    </div>
    <div class="form-floating mt-3">
        <input type="password" class="form-control" id="floatingPassword" name="mot_de_passe" placeholder="Mot de passe" required>
        <label for="floatingPassword">Mot de passe</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="administrer">Inscrire</button>
</form>

<script src="boost/cdn.jsdelivr.net_npm_chart.js@4.2.1_dist_chart.umd.min.js"></script>
<script src="boost/getbootstrap.com_docs_5.3_examples_dashboard_dashboard.js"></script>
</body>
</html>