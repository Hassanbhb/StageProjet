@extends('layout.layout')

@section('content')

<div class="detail_body">
  <div class="detail_head">
    <div class="detail_titre">
      <h1> {{ $exp->titre }} </h1>
    </div>
    <div class="detail_info">
      <div class="detail_rating">
        <img src={{ asset('images/rate_star.svg') }} alt="rating star">
        <span> {{ $exp->rating }} </span>
      </div>
      <div class="detail_ville">
        <p>{{ $exp->ville }}</p>
      </div>
      <div class="detail_save">
        <img src={{ asset('images/fav_heart.svg') }} alt="favorit heart">
        <span>Ajouter aux favoris</span>
      </div>
    </div>
  </div>
  <div class="detail_imgs">
    <img src={{ asset($exp->image) }} alt="images">
  </div>
  <div class="detail_organiser">
    <p class="section_title" >Expérience organizée par "creator name" </p>
    <span> {{ $exp->duree }}, proposé en {{ $exp->langue }} </span>
  </div>
  <hr>
  <div class="detail_desc">
    <p class="section_title">Description</p>
    <p class="desc"> {{ $exp->description }} </p>
  </div>
  <hr>
  <div class="detail_inclus">
    inclus here
  </div>
  <hr>
  <div class="detail_creator">
    info about creator
  </div>
  <hr>
  
</div>

@endsection