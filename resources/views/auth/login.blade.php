<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESI Page</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.cs') }}">
 
  <style>
    /* Add custom styles here */
    body {
      font-family: Arial, sans-serif;
    }
    img {
      width: 20px;
    }

    /* Container styles */
    .container {
      max-width: 800px; /* Set a fixed width for the container */
      margin: 0 auto; /* Center the container horizontally */
      overflow: hidden; /* Prevent scrolling */
    }
  </style>
</head>
<body>
  <header>
  
  </header>
  <div class="container">
    <main>
      <div class="form-container">
        {{-- <h5 class="welcome-heading">BIENVENUE SUR LA PAGE<span class="esi-text">ESI</span></h5>
        <img src="images/logo.png" alt="ESI Logo" class="esi-logo"> --}}
        <h2 class="form-heading">Authentification</h2>
        <form method="POST" action="{{ route('login') }}" class="login-form">
          @csrf
          <!-- Email Address -->
          <div>
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
  
          <!-- Password -->
          <div class="mt-4">
              <x-input-label for="password" :value="__('Password')" />
              <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
  
          <!-- Remember Me -->
          <div class="block mt-4">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                  <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
              </label>
          </div>
  
          <div class="flex items-center justify-between mt-4">
            <button type="submit" class="login-button">S'identifier</button>
            @if (Route::has('password.request'))
              <a class="forgot-password" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
              </a>
            @endif
          </div>
        </form>
      </div>
    </main>
    <div class="container-half">
      <!-- Second part of the code -->
      <!-- Add your custom content here if needed -->
    </div>
  </div>
</body>
</html>
