<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Compte</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
</head>
  <body>
    <div class="navbar">
      <img src={{asset("images/logo.svg")}} alt="justalogo" class="logo"> 
      <div class="dropdown">
        <img src={{asset("images/account-icon.svg")}} alt="account" onclick="myFunction()" class="dropbtn">
        <div id="myDropdown" class="dropdown-content">
          <a href="#">Voyages</a>
          <a href="#">Favoris</a>
          <a href="/cree">Créer une expériance</a>
          <a href="/account">Compte</a>
          <a href="#">Déconexion</a>
        </div>
      </div>
    </div>

    @yield('content')

  </body>
</html>