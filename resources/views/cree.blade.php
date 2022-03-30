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
                    <option value="arabic">Arabic</option>
                    <option value="english">English</option>
                    <option value="french">French</option>
                    <option value="german">German</option>
                    <option value="portuguese">Portuguese</option>
                    <option value="russian">Russian</option>
                    <option value="spanish">Spanish</option>
                    <option value="swedich">Swedish</option>
                    <option value="turkish">Turkish</option>
                </select>
            </div>
            
            <div>
                <label for="theme"> Quel sera le théme central de votre expérience? </label>
                <br>
                <select name="theme">
                    <option value="bord de mer">Bord de mer</option>
                    <option value="art et culture">Art et culture</option>
                    <option value="nature et plain air">Nature et plain air</option>
                    <option value="visites">Visites</option>
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