  @extends('layout.layout')
  
  @section('content')
  <div>
    @if (Session::has('success'))
        <div style="text-align: center;border: 2px black solid;width: 30%;margin-left: 550px;">
            <label>&#9888; Status :</label>
           {{ Session::get('success') }}
        </div>
    @endif
  </div>  
  @if(count($errors)>0)
    @foreach ($errors->all() as $error )
    <li>{{$error}}</li>
    @endforeach
  @endif
  <form method="post" action="{{ route('update' , $data->id) }}" enctype="multipart/form-data">
    @csrf
    <div class="formulaire">
      <div class="countainer">
        <img src={{asset($data->userImg)}} alt="usericon" class="user_icon"> 
        <input type="file" name="userImg" id="file" class="inputfile" />
        <label for="file"><p style="margin-top: 47px;margin-left: 8px;"><u>Changer photo de profil</u></p></label>
      </div>
    </div>
    <div class="compte">
        <div>
          <label>Prénom</label><br/>
          <input type="text" name="secondname" value="{{$data->secondname}}">
        </div>
        <div>
          <label>Nom</label><br/>
          <input type="text" name="name" value="{{$data->name}}">
        </div>
        <div>
          <label>Adresse e-mail</label><br/>
          <input type="email" name="email" value="{{$data->email}}">
        </div>
        <div>
          <label>Sexe</label><br/>
          <select name="sexe" value="{{$data->sexe}}">
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>
          </select>
        </div>
        <div>
          <label>Date de naissance</label><br/>
          <input type="date" name="date" value="{{$data->date}}">
        </div>
        <div>
          <label>Numéro de telephone</label><br/>
          <input type="tel" placeholder="(+212)123456789" name="tel" value="{{$data->tel}}">
        </div>
  </div>
  <input id="sv_btn" type="submit" value="Enregister">
</form>
  

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

@endsection