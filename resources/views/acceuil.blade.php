<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Safir with us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        
    </head>

    <body>
        <nav class="ac_nav">
            <img src={{ asset('images/logo.svg') }} alt="logo">
            <ul>
                <li><a href="/">Acceuil</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><button id="show-register">Inscription</button></li>
            </ul>
        </nav>
        @if(Session::has('success'))
        <div class="div" style="text-align: center;border: 2px green solid;width: 30%;margin-left: 550px;color:green;">
            &#9888; {{Session::get('success')}}
        </div>
        @endif
        @if(Session::has('fail'))
        <div class="div" style="text-align: center;border: 2px red solid;width: 30%;margin-left: 550px;color:red;">
            &#9888; {{Session::get('fail')}}
        </div>
        @endif
        <form action="{{route('register-user')}}" method="POST">
        <div class="popup">
            <div class="close-btn">×</div>
            <div class="form">
                @csrf
                <h2>Inscription</h2>
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Entrer votre email" required>
                </div>
                <div class="form-element">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="name" placeholder="Entrer votre nom d'utilisateur" required>
                </div>
                <div class="form-element">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe" required>
                </div>
                <div class="form-element">
                    <label for="confirm-password">Confirmer le mot de passe</label>
                    <input type="password" id="password" name="conpw" placeholder="Confirmer votre mot de passe" required>
                </div>
                <div class="form-element">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="form-element">
                    <button type="submit">Connexion</button>
                </div>

                <div class="form-element">
                    <button type="button" style="margin-bottom: 23px" id="show-login">Déja Inscrit?</button>
                    <a href="#" style="padding-left: 94px;">Mot passe oublié?</a>
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('login-user') }}" method="POST">
        <div class="popup_login">
            <div class="close-btn">×</div>
            <div class="form">
                @csrf
                <h2>Connexion</h2>
                <div class="form-element">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Entrer votre email" required>
                </div>
                <div class="form-element">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe" required>
                </div>
                <div class="form-element">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="form-element">
                    <button type="submit">Connexion</button>
                </div>
                <div class="form-element">
                    <a href="#">Mot passe oublié?</a>
                </div>
            </div>
        </div>
    </form>
        <div class="welcome" id="welcome">
            <div>
                <p>Laissez-vous guider par votre curiosité</p>
                <button>Explorez</button>
            </div>
        </div>
        <div class="service" id="service">
            <div class="s1">
                <div>
                    <h1>Crée votre voyage</h1>
                    <p>Avec Saafr vous pouvez organizer votre experince depuis chez vous, votre annonce est affichée pour les gens du monde et ils peuvent vous rejoindre facilement.</p>
                </div>
                <img class="s_svg" src={{ asset('images/tv-tg.svg') }} alt="" srcset="">
            </div>
            <div class="s2">
                <img class="s_svg" src= {{ asset('images/camp.svg') }} alt="A girl traveling">
                <div>
                    <h1>Joindre un voyage</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, facilis mollitia vitae maiores at quasi maxime similique, iste, odio numquam nisi molestiae eius? Quas, fugit provident optio rerum perspiciatis asperiores!</p>
                </div>
            </div>
        </div>
        <div class="exp">
            <h1>Les Experiences les plus populaire: </h1>
            <div>
                <div class="top">

                </div>
                <div class="stats">
                    <div class="card">
                        <p class="head">33</p>
                        <p class="label">Expériences</p>
                    </div>
                    <div class="card">
                        <p class="head"><?php
                            use Illuminate\Support\Facades\DB;
                            $users = DB::table('users')->count();
                            echo $users;
                            ?></p>
                        <p class="label">Utilisateurs</p>
                    </div>
                    <div class="card">
                        <p class="head">90%</p>
                        <p class="label">satisfaction</p>
                    </div>
                </div>
            </div>


        </div>

        <div class="contact" id="contact">
            <div class="con_info">
                <span class="head">Contacter nous:</span>
                <p><span>E-mail:</span> safir@gmail.com</p>
                <p><span>Tél:</span> 06-73-34-32-05</p>
                <a href="#" id="socials"><img src={{ asset('images/face_logo.svg') }} alt="facebook logo"> Facebook</a>
                <a href="#" id="socials"><img src={{ asset('images/twitter_logo.svg') }} alt="twitter logo"> Twitter</a>
                <a href="#" id="socials"><img src={{ asset('images/insta_logo.svg') }} alt="instagram logo"> Instagram</a>
            </div>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215.0539107956635!2d-9.546908077789043!3d30.411640739983817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b7da61b863c9%3A0x1134028ed4dab469!2sUnivers%20Startup%20et%20Entrepreneur%20-%20Incubateur%20et%20Espace%20Coworking%20Agadir!5e0!3m2!1sen!2sma!4v1646823925991!5m2!1sen!2sma&z=5" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <footer>
            <div class="big_logo">
                <img src={{ asset('images/logo.svg') }} alt="logo">
            </div>
            <div class="apps">
                <p>Télécharger notre app sur Android et ios</p>
                <div>
                    <a href="https://drive.google.com/uc?export=download&id=1Frda7fnLd8qsrzktBLIqH5Dnqf1Pye92"><img src={{ asset("images/google_play.svg") }} alt="google play button"></a>
                    <a href="https://drive.google.com/uc?export=download&id=1RTH-SXbdglOl_DNigLD3vl6-Q-Af8rSX"><img src={{ asset("images/ios_store.svg") }} alt="apple store button"></a>
                </div>
            </div>

            <div class="copyright">
                <p><img src={{ asset('images/copyright.svg') }} alt="coppyright"> 2022 Safir,inc </p>
            </div>
        </footer>

        <script>
            const inscription_btn = document.querySelector("#show-register");
            const login_btn = document.querySelector("#show-login");
            const close_btns = document.querySelectorAll(".close-btn");

            inscription_btn.addEventListener("click", function() {
                document.querySelector(".popup").classList.add("active"); 
            });
            
            login_btn.addEventListener("click", function() {
                document.querySelector(".popup").classList.remove("active");
                document.querySelector(".popup_login").classList.add("active");
            });

            close_btns.forEach(btn => {
                btn.addEventListener("click", (e) => {
                    e.target.parentElement.classList.remove("active");
                })
            });
        </script>
        

    </body>

</html>
