@extends('layout.layout')

@section('content')

<div>
  <div class="v_type_list">
    <form action="/voyages" method="post">
      @csrf
      <ul>
        <li class="v_l active">
          <input type="submit" name="filter" class="active" value="All">
        </li>
        <li class="v_l">
          <input type="submit" name="filter" value="Bord de mer">
        </li>
        <li class="v_l">
          <input type="submit" name="filter" value="Art et culture">
        </li>
        <li class="v_l">
          <input type="submit" name="filter" value="Visites">
        </li>
        <li class="v_l">
          <input type="submit" name="filter" value="Nature et plain air">
        </li>
        <li class="v_l">
          <input type="submit" name="filter" value="Sport">
        </li>
      </ul>
    </form>
  </div>
  <div class="voyages">
    @foreach ($exps as $exp)
      <div class="card" data-id={{ $exp->id }}>
        <img src={{ asset('images/la1.jpg')}} alt="voyage image">
        <div class="head">
          <p>{{ $exp->titre }}</p>
          <span> {{ $exp->prix }} </span>
        </div>
        <div class="info">
          <div>
            <img src={{ asset('images/rate_star.svg') }} alt="rating star">
            <span> {{ $exp->rating }} </span>
          </div>
          <span> {{ $exp->duree }} </span>
        </div>
      </div>
    @endforeach
  </div>
</div>
<script src={{ asset('js/voyages.js') }}></script>

@endsection