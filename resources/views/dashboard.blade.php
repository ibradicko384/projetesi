<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('getbootstrap.com_docs_5.3_dist_css_bootstrap.min.css') }}">
  <style>
    /* Add custom styles here */
    body {
      background-color: rgb(237, 132, 99);
    }
    img{
        width: 200px;
    }
    .malf{
        color: white;
        text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <!-- Dropdown content -->
  </div>

  <div class="container bg-black">
    <div class="row">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ajouter_secretaire') }}">Ajouter secrétaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('gerer_etudiants') }}">Gérer étudiants</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button> -->
      </form>
    </div>
  </div>

  <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
      <div class="row mt-5">
        <div class="col-3 bg-black">
          <img src="images/duex (1).png">
          <p><button type="button" class="btn bg-success mt-2"><a class="malf" href="{{ route('generer_carte') }}">Générer carte</a></button></p>
        </div>

        <div class="col-3 bg-black offset-1">
          <img src="images/duex (2).png">
          <!-- Update the href attribute with the correct URL -->
          <p><button type="button" class="btn bg-success mt-2"><a class="malf" href="#">Your Link</a></button></p>
        </div>

        <div class="col-3 bg-black offset-1">
          <img src="images/duex (3).png">
          <!-- Update the href attribute with the correct URL -->
          <p><button type="button" class="btn bg-success mt-2"><a class="malf" href="#">Avis sur l'app</a></button></p>
        </div>
      </div>
    </div>
  </main>

  <div class="container">
    <div class="row">
      <div class="bg-black text-center p-5 mt-4">
        <p class="text-white">
          Tous les droits sont réservés 2023
        </p>
      </div>
    </div>
    {{-- <p><button type="button" class="btn btn-nfo"><a class="abc"  href="accueil.php">Retour à l'accueil</a></button></p> --}}
  </div>

  <script src="{{ asset('getbootstrap.com_docs_5.3_assets_js_color-modes.js') }}"></script>
  <script src="{{ asset('css/script.js') }}"></script>
  <script src="{{ asset('css/bootstrap.min.js') }}"></script>
  <script src="{{ asset('getbootstrap.com_docs_5.3_dist_js_bootstrap.bundle.min.js') }}"></script>
</body>
</html>
