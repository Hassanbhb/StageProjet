@extends('layout.layout')

@section('content')

<div>
  <div class="v_type_list">
    <ul>
      <li class="v_l active">All</li>
      <li class="v_l">Bord de mer</li>
      <li class="v_l">Art et culture</li>
      <li class="v_l">Visites</li>
      <li class="v_l">Nature et plain air</li>
      <li class="v_l">Sport</li>
    </ul>
  </div>
  <div class="voyages">
    <div class="card">
      <img src={{ asset('images/la1.jpg')}} alt="voyage image">
      <div class="head">
        <p>Voyage title</p>
        <span>300 Dh</span>
      </div>
      <div class="info">
        <div>
          <img src={{ asset('images/rate_star.svg') }} alt="rating star">
          <span>4.3</span>
        </div>
        <span>2 jours</span>
      </div>
    </div>

    <div class="card">
      <img src={{ asset('images/la1.jpg')}} alt="voyage image">
      <div class="head">
        <p>Voyage title</p>
        <span>300 Dh</span>
      </div>

      <div class="info">
        <div>
          <img src={{ asset('images/rate_star.svg') }} alt="rating star">
          <span>4.3</span>
        </div>
        <span>2 jours</span>
      </div>
    </div>

    <div class="card">
      <img src={{ asset('images/camp.svg')}} alt="voyage image">
      <div class="head">
        <p>Voyage title</p>
        <span>300 Dh</span>
      </div>
      <div class="info">
        <div>
          <img src={{ asset('images/rate_star.svg') }} alt="rating star">
          <span>4.3</span>
        </div>
        <span>2 jours</span>
      </div>
    </div>
  </div>
</div>

@endsection