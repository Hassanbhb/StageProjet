<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Voyage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    </head>
    <body>
    <div class="navbar">
                <a href="http://127.0.0.1:8000/"><img src="/img/logo.svg" alt="logo" width="90px"></a>
                <nav class="menu">
                    <ul>
                        
                    <div class="dropdown">
          
          <svg onclick="myFunction()" class="dropbtn" width="160" height="70" viewBox="0 0 82 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M59.875 9.375C58.3298 9.375 56.8194 9.8332 55.5346 10.6916C54.2499 11.5501 53.2485 12.7702 52.6572 14.1978C52.0659 15.6253 51.9112 17.1962 52.2126 18.7116C52.5141 20.2271 53.2581 21.6192 54.3507 22.7118C55.4433 23.8044 56.8354 24.5484 58.3509 24.8499C59.8663 25.1513 61.4372 24.9966 62.8647 24.4053C64.2923 23.814 65.5124 22.8127 66.3709 21.5279C67.2293 20.2431 67.6875 18.7327 67.6875 17.1875C67.6875 15.1155 66.8644 13.1284 65.3993 11.6632C63.9341 10.1981 61.947 9.375 59.875 9.375Z" fill="#333333"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M1.15385 12C0.847827 12 0.554342 12.1229 0.337954 12.3417C0.121566 12.5605 0 12.8572 0 13.1667C0 13.4761 0.121566 13.7728 0.337954 13.9916C0.554342 14.2104 0.847827 14.3333 1.15385 14.3333H28.8462C29.1522 14.3333 29.4457 14.2104 29.662 13.9916C29.8784 13.7728 30 13.4761 30 13.1667C30 12.8572 29.8784 12.5605 29.662 12.3417C29.4457 12.1229 29.1522 12 28.8462 12H1.15385ZM0 22.5C0 22.1906 0.121566 21.8938 0.337954 21.675C0.554342 21.4562 0.847827 21.3333 1.15385 21.3333H28.8462C29.1522 21.3333 29.4457 21.4562 29.662 21.675C29.8784 21.8938 30 22.1906 30 22.5C30 22.8094 29.8784 23.1062 29.662 23.325C29.4457 23.5437 29.1522 23.6667 28.8462 23.6667H1.15385C0.847827 23.6667 0.554342 23.5437 0.337954 23.325C0.121566 23.1062 0 22.8094 0 22.5V22.5ZM0 31.8333C0 31.5239 0.121566 31.2272 0.337954 31.0084C0.554342 30.7896 0.847827 30.6667 1.15385 30.6667H28.8462C29.1522 30.6667 29.4457 30.7896 29.662 31.0084C29.8784 31.2272 30 31.5239 30 31.8333C30 32.1428 29.8784 32.4395 29.662 32.6583C29.4457 32.8771 29.1522 33 28.8462 33H1.15385C0.847827 33 0.554342 32.8771 0.337954 32.6583C0.121566 32.4395 0 32.1428 0 31.8333V31.8333Z" fill="#333333"/>
<path d="M59.875 0C55.5485 0 51.3192 1.28295 47.7219 3.6866C44.1246 6.09026 41.3208 9.50667 39.6651 13.5038C38.0095 17.5009 37.5763 21.8993 38.4203 26.1426C39.2644 30.3859 41.3478 34.2837 44.407 37.343C47.4663 40.4022 51.3641 42.4856 55.6074 43.3297C59.8507 44.1737 64.2491 43.7405 68.2462 42.0849C72.2433 40.4292 75.6598 37.6254 78.0634 34.0281C80.4671 30.4308 81.75 26.2015 81.75 21.875C81.7434 16.0754 79.4366 10.5153 75.3357 6.41435C71.2347 2.31342 65.6746 0.00661675 59.875 0V0ZM72.3625 35.8219C72.3314 33.7724 71.4964 31.8172 70.0374 30.3775C68.5784 28.9378 66.6122 28.1289 64.5625 28.125H55.1875C53.1378 28.1289 51.1716 28.9378 49.7126 30.3775C48.2537 31.8172 47.4186 33.7724 47.3875 35.8219C44.554 33.2918 42.5558 29.9607 41.6576 26.2698C40.7593 22.5788 41.0033 18.7021 42.3573 15.1529C43.7112 11.6037 46.1113 8.54948 49.2397 6.39464C52.368 4.23979 56.0771 3.08598 59.8758 3.08598C63.6745 3.08598 67.3836 4.23979 70.5119 6.39464C73.6403 8.54948 76.0404 11.6037 77.3943 15.1529C78.7483 18.7021 78.9923 22.5788 78.094 26.2698C77.1957 29.9607 75.1976 33.2918 72.3641 35.8219H72.3625Z" fill="#333333"/>
</svg>
  <div id="myDropdown" class="dropdown-content">
    <a href="#">Voyages</a>
    <a href="#">Favoris</a>
    <a href="/cree">Créer une expériance</a>
    <a href="#">Compte</a>
    <a href="#">Déconexion</a>
  </div>
</div> 
                    </ul>
                </nav>
            </div>
        <h1 class="c_h1">Proposez votre expérience</h1>
        <div class="c_form">
            <form  action="">
                <div class="c_f_ville">
                    <label for="ville">
                        Dans quelle ville voulez-vous organiser votre expérience?
                    </label> <br>
                    <input type="text" name="ville" placeholder="example: Agadir">
                </div>
                
                <div class="c_f_lang">
                    <div>
                        <label for="langue"> En quelle langue proposerez-vous votre expérience? </label>
                        <br>
                        <select name="langue">
                            <option>Select Language</option>
                            <option value="af">Afrikaans</option>
                            <option value="sq">Albanian - shqip</option>
                            <option value="am">Amharic - አማርኛ</option>
                            <option value="ar">Arabic - العربية</option>
                            <option value="an">Aragonese - aragonés</option>
                            <option value="hy">Armenian - հայերեն</option>
                            <option value="ast">Asturian - asturianu</option>
                            <option value="az">Azerbaijani - azərbaycan dili</option>
                            <option value="eu">Basque - euskara</option>
                            <option value="be">Belarusian - беларуская</option>
                            <option value="bn">Bengali - বাংলা</option>
                            <option value="bs">Bosnian - bosanski</option>
                            <option value="br">Breton - brezhoneg</option>
                            <option value="bg">Bulgarian - български</option>
                            <option value="ca">Catalan - català</option>
                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                            <option value="zh">Chinese - 中文</option>
                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                            <option value="co">Corsican</option>
                            <option value="hr">Croatian - hrvatski</option>
                            <option value="cs">Czech - čeština</option>
                            <option value="da">Danish - dansk</option>
                            <option value="nl">Dutch - Nederlands</option>
                            <option value="en">English</option>
                            <option value="en-AU">English (Australia)</option>
                            <option value="en-CA">English (Canada)</option>
                            <option value="en-IN">English (India)</option>
                            <option value="en-NZ">English (New Zealand)</option>
                            <option value="en-ZA">English (South Africa)</option>
                            <option value="en-GB">English (United Kingdom)</option>
                            <option value="en-US">English (United States)</option>
                            <option value="eo">Esperanto - esperanto</option>
                            <option value="et">Estonian - eesti</option>
                            <option value="fo">Faroese - føroyskt</option>
                            <option value="fil">Filipino</option>
                            <option value="fi">Finnish - suomi</option>
                            <option value="fr">French - français</option>
                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                            <option value="fr-FR">French (France) - français (France)</option>
                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                            <option value="gl">Galician - galego</option>
                            <option value="ka">Georgian - ქართული</option>
                            <option value="de">German - Deutsch</option>
                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                            <option value="el">Greek - Ελληνικά</option>
                            <option value="gn">Guarani</option>
                            <option value="gu">Gujarati - ગુજરાતી</option>
                            <option value="ha">Hausa</option>
                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                            <option value="he">Hebrew - עברית</option>
                            <option value="hi">Hindi - हिन्दी</option>
                            <option value="hu">Hungarian - magyar</option>
                            <option value="is">Icelandic - íslenska</option>
                            <option value="id">Indonesian - Indonesia</option>
                            <option value="ia">Interlingua</option>
                            <option value="ga">Irish - Gaeilge</option>
                            <option value="it">Italian - italiano</option>
                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                            <option value="ja">Japanese - 日本語</option>
                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                            <option value="kk">Kazakh - қазақ тілі</option>
                            <option value="km">Khmer - ខ្មែរ</option>
                            <option value="ko">Korean - 한국어</option>
                            <option value="ku">Kurdish - Kurdî</option>
                            <option value="ky">Kyrgyz - кыргызча</option>
                            <option value="lo">Lao - ລາວ</option>
                            <option value="la">Latin</option>
                            <option value="lv">Latvian - latviešu</option>
                            <option value="ln">Lingala - lingála</option>
                            <option value="lt">Lithuanian - lietuvių</option>
                            <option value="mk">Macedonian - македонски</option>
                            <option value="ms">Malay - Bahasa Melayu</option>
                            <option value="ml">Malayalam - മലയാളം</option>
                            <option value="mt">Maltese - Malti</option>
                            <option value="mr">Marathi - मराठी</option>
                            <option value="mn">Mongolian - монгол</option>
                            <option value="ne">Nepali - नेपाली</option>
                            <option value="no">Norwegian - norsk</option>
                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                            <option value="oc">Occitan</option>
                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                            <option value="om">Oromo - Oromoo</option>
                            <option value="ps">Pashto - پښتو</option>
                            <option value="fa">Persian - فارسی</option>
                            <option value="pl">Polish - polski</option>
                            <option value="pt">Portuguese - português</option>
                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                            <option value="qu">Quechua</option>
                            <option value="ro">Romanian - română</option>
                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                            <option value="rm">Romansh - rumantsch</option>
                            <option value="ru">Russian - русский</option>
                            <option value="gd">Scottish Gaelic</option>
                            <option value="sr">Serbian - српски</option>
                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                            <option value="sn">Shona - chiShona</option>
                            <option value="sd">Sindhi</option>
                            <option value="si">Sinhala - සිංහල</option>
                            <option value="sk">Slovak - slovenčina</option>
                            <option value="sl">Slovenian - slovenščina</option>
                            <option value="so">Somali - Soomaali</option>
                            <option value="st">Southern Sotho</option>
                            <option value="es">Spanish - español</option>
                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                            <option value="su">Sundanese</option>
                            <option value="sw">Swahili - Kiswahili</option>
                            <option value="sv">Swedish - svenska</option>
                            <option value="tg">Tajik - тоҷикӣ</option>
                            <option value="ta">Tamil - தமிழ்</option>
                            <option value="tt">Tatar</option>
                            <option value="te">Telugu - తెలుగు</option>
                            <option value="th">Thai - ไทย</option>
                            <option value="ti">Tigrinya - ትግርኛ</option>
                            <option value="to">Tongan - lea fakatonga</option>
                            <option value="tr">Turkish - Türkçe</option>
                            <option value="tk">Turkmen</option>
                            <option value="tw">Twi</option>
                            <option value="uk">Ukrainian - українська</option>
                            <option value="ur">Urdu - اردو</option>
                            <option value="ug">Uyghur</option>
                            <option value="uz">Uzbek - o‘zbek</option>
                            <option value="vi">Vietnamese - Tiếng Việt</option>
                            <option value="wa">Walloon - wa</option>
                            <option value="cy">Welsh - Cymraeg</option>
                            <option value="fy">Western Frisian</option>
                            <option value="xh">Xhosa</option>
                            <option value="yi">Yiddish</option>
                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                            <option value="zu">Zulu - isiZulu</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="theme"> Quel sera le théme central de votre expérience? </label>
                        <br>
                        <select name="theme">
                            <option value="bm">Bord de mer</option>
                            <option value="bm">Art et culture</option>
                            <option value="bm">Nature et plain air</option>
                            <option value="bm">Visites</option>
                        </select>
                    </div>
                    
                </div>
    
                <div class="c_f_area">
                    <label for="desc"> Que feront vos participants en votre compagnie ?</label>
                    <p>Proposez un programme précis du début a la fin, et non plusieurs idées ou options</p>
                    <textarea name="desc" cols="30" rows="10" placeholder="Expliquez aux participants le déroylement de votre expérience"></textarea>
                </div>
                
                <div class="c_f_titre">
                    <div>
                        <label for="duree"> Quelle est la durée de votre expérience? </label>
                        <input type="text" name="duree" placeholder="par exemple: 1 jour ou 4 heures">
                    </div>
                    <div>
                        <label for="titre">Titre</label>
                        <br>
                        <input type="text" name="titre" placeholder="Donnez un nom a votre expérience">
                    </div>
                    
                </div>
                
                <div class="c_f_photo">
                    <label for="photo">Ajoutez vos photos <span>5 photos max</span></label>
                    <br>
                    <input type="file" name="photo">
                </div>
                
                <div class="c_f_prix">
                    <div>
                        <label for="prix">Prix par voyageur</label>
                        <br>
                        <input type="number" name="prix">
                    </div>
                    
                    <div>
                        <span>Ce qui est inclus</span>
                        <br>
                        <input type="checkbox" name="trans" value="transport">
                        <label for="tans">Transport</label>
                        <input type="checkbox" name="equi" value="equipement">
                        <label for="equi">Equipement</label>
                        <br>
                        <input type="checkbox" name="bois" value="boissons">
                        <label for="bois">Boissons</label>
                        <input type="checkbox" name="Hebe" value="hebergements">
                        <label for="hebe">hebergement</label>
                        <br>
                        <input type="checkbox" name="nour" value="nourriture">
                        <label for="nous">Nourriture</label>
                    </div>
    
                </div>
                
                
                
    
                <input id="sb_btn" type="submit" value="Crée l'éxperiance">
            </form>
        </div>
        
        <script>
   /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>
    </body>
</html>
