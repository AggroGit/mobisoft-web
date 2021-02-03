<nav class="borde-linear | fixed">
  <div class="hamb-menu" id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div id="menuLi" class="menu">
    <ul class="listado-menu">
      <li> <a href="#">Desarrollo Apps</a> </li>
      <li> <a href="#">Desarrollo Web</a> </li>
      <li> <a href="#">Software</a> </li>
      <li> <a href="#">Portfolio</a> </li>
      <li>
        <a href="#">Desplegable</a>
        <ul>
          <li> <a href="#">Opcion</a> </li>
          <li> <a href="#">Opcion</a> </li>
        </ul>
      </li>

    </ul>
    <div class="bocata-help | borde-linear">
      <h5>¿Necesitas <span>ayuda</span> ?</h5>
      <div class="">
        <img class="phone-menu" src="/imagenes/phone.png" alt="">
        <span>Te llamamos gratis</span>
      </div>
      <div class="">
        <img src="/imagenes/whatsapp.png" alt="">
        <span>Whatsapp</span>
      </div>
      <div class="android-helper">
        <img src="/imagenes/android.png" alt="">
      </div>
    </div>
  </div>
  <div class="icon">
    <a href="/">
      <img src="{{asset('logos/mobisoft-mini.png')}}" alt="Mobility Software Solutions">
    </a>
  </div>
  <div class="contact | neonhover">
    <a href="#">Contacta</a>
  </div>
</nav>

<script type="text/javascript">

  var open = false;
  var menu = document.getElementById('nav-icon3');

  menu.onclick = () => {
    var menuLi = document.getElementById('menuLi')
    if(open) {
      menuLi.classList.remove('menu-open');
      menu.classList.remove('open');
    }else {
      menuLi.classList.add('menu-open');
      menu.classList.add('open');
    }
    open = !open;

  }
</script>
