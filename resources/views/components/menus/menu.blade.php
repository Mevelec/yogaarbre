<div class="topnav" id="myTopnav">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">ss
      <i class="fa fa-bars"></i>
    </a>
  <a href="{{url('/')}}" class="active">Accueil</a>
  <a href="{{url('/memberSpace')}}">Membre</a>
  @if(Auth::check())
    <a href="{{url('/logout')}}">Déconnection</a>
  @else
    <a href="{{url('/register')}}">Inscription</a>
  @endif
  <a href="{{url('/contact')}}">Contact</a>
  <a href="{{url('/about')}}">A propos</a>
</div>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>