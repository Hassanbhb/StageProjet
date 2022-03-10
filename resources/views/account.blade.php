  @extends('layout.layout')
  
  @section('content')
  
  <form action="post">
    <div class="formulaire">
      <div class="countainer">
        <img src={{asset("images/user-avatar.svg")}} alt="usericon" class="user_icon"> 
        <input type="file" name="file" id="file" class="inputfile" />
        <label for="file"><p style="margin-top: 47px;margin-left: 8px;"><u>Changer photo de profil</u></p></label>
      </div>
    </div>
    <div class="compte">
        <div>
          <label>Prénom</label><br/>
          <input type="text">
        </div>
        <div>
          <label>Nom</label><br/>
          <input type="text">
        </div>
        <div>
          <label>Adresse e-mail</label><br/>
          <input type="email" placeholder="example@gmail.com">
        </div>
        <div>
          <label>Sexe</label><br/>
          <select>
            <option>Homme</option>
            <option>Femme</option>
            <option>Autre</option>
          </select>
        </div>
        <div>
          <label>Date de naissance</label><br/>
          <input type="date">
        </div>
        <div>
          <label>Numéro de telephone</label><br/>
          <input type="tel" placeholder="(+212)123456789">
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