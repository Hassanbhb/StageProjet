@extends('layout.layout')

@section('content')
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
<h1 class="c_h1">Proposez votre expérience</h1>
<div class="c_form">
    <form  method="post" action="{{ route('addExp') }}">
        @csrf
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
            <textarea name="description" cols="30" rows="10" placeholder="Expliquez aux participants le déroylement de votre expérience"></textarea>
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
        <input id="sb_btn" type="submit" value="Crée l'éxperiance" style="cursor:pointer;">
    </form>
</div>

@endsection