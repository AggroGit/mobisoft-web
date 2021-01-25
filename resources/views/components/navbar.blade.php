<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div id="menu" class="box">
      <!-- <div id="nav-icon1">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="nav-icon2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="nav-icon4">
        <span></span>
        <span></span>
        <span></span>
      </div>
    -->
      <div id="nav-icon3">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div id="contentMenu" class="elementosMenu">
        <div class="listMenu verdeClaro fuenteNeon">
          <ul>
            <li>
              <a class="parpadeo" href="#">Inicio</a>
            </li>
            <li>
              <a class="parpadeo" href="#">Elemento Menu</a>
            </li>
            <li>
              <a class="parpadeo" href="#">Elemento Menu</a>
            </li>

          </ul>
        </div>


      </div>
     </div>
    <a class="logoYNombre" href="/">
        <img src="{{asset('logos/mobisoft-mini.png')}}"  class="d-inline-block align-top iconoMenu" alt="">
        <span class=" hidden-xs">Mobility software Solutions</span>
      </a>
  </div>

</nav>


<script type="text/javascript">

$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
    $('#contentMenu').toggleClass('menuopen');

	});
});
</script>
