<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< HEAD
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Voyage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    </head>
    <body>
        
        
    </body>
</html>
=======

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voyage</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <a href="http://127.0.0.1:8000/"><img src="/img/logo.png" alt="logo" width="90px"></a>
                <nav>
                    <ul>
                        <li><a href="">Acceuil</a></li>
                        <li><a href="">Service</a></li>
                        <li><a href="">Contact</a></li>

                        <li><button id="show-register">Inscription</button></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="popup" style="user-select: none;">
        <div class="close-btn">×</div>
        <div class="form">
            <h2>Inscription</h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Entrer votre email">
            </div>
            <div class="form-element">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" placeholder="Entrer votre nom d'utilisateur">
            </div>
            <div class="form-element">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-element">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="password" placeholder="Confirmer votre mot de passe">
            </div>
            <div class="form-element">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element">
                <button type="submit">Connexion</button>
            </div>

            <div class="form-element">
                <button style="margin-bottom: 23px" id="show-login">Déja Inscrit?</button>
                <a href="#" style="padding-left: 94px;">Mot passe oublié?</a>
            </div>
        </div>
    </div>
    <div class="popup">
        <div class="close-btn">×</div>
        <div class="form">
            <h2>Connexion</h2>
            <div class="form-element">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Entrer votre email">
            </div>
            <div class="form-element">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-element">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <div class="form-element">
                <button>Connexion</button>
            </div>
            <div class="form-element">
                <a href="#">Mot passe oublié?</a>
            </div>
        </div>
    </div>
    <div class="welcome">

    </div>
    <script>
        document.querySelector("#show-register").addEventListener("click", function() {
            document.querySelector(".popup").classList.add("active");
        });
        document.querySelector(".popup .close-btn").addEventListener("click", function() {
            document.querySelector(".popup").classList.remove("active");
        });
    </script>
    <script>
        document.querySelector("#show-login").addEventListener("click", function() {
            document.querySelector(".popup").classList.add("active");
        });
        document.querySelector(".popup .close-btn").addEventListener("click", function() {
            document.querySelector(".popup").classList.remove("active");
        });
    </script>


</body>

</html>
>>>>>>> 7908512 (acceuil)
