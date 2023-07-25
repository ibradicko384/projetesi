<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add any other CSS files you need -->

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <button style="background-color: rgb(233, 238, 245)">
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </button><br><br>
                @else
                    @if (Route::has('register'))
                        <button style="background-color: rgb(241, 245, 248)">
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'enregistrer</a>
                        </button>
                    @endif
                @endauth
            </div>
        @endif

        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <!-- Your sign-up form content here -->
            </div>
            <div class="form-container signe">
                <form id="matricule" action="/ajouter/traitement" method="post">
                    <h1>BIENVENUE SUR L'APP ESI</h1><br><br><br>
                    <button type="submit" class="btn btn-dark">Se connecter</button>
                    <h2>université ESI</h2>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="panel overlay-left"></div>
                    <div class="container" id="container">
                        <div class="form-container sign-up-container">
                            <!-- Your sign-up form content here -->
                        </div>
                        <div class="form-container signe">
                            <!-- Remplacez le formulaire par l'image du logo et le lien "Générer carte" -->
                            <img src="images/premier.png" alt="Logo de la carte">
                            <a href="{{ route('generer_carte') }}">Générer carte</a>
                            <!-- Assurez-vous d'avoir défini la route "generer_carte" dans votre fichier de définition des routes de Laravel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>
                Copyright <i class="fa fa-heart"></i> tous droits réservés
                <a target="_blank" href="https://florin-pop.com">une application</a>
                Copyright tous droits réservés
                <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">privé</a>.
            </p>
        </footer>
    </div>

    <!-- Add any scripts you need -->

</body>
</html>
