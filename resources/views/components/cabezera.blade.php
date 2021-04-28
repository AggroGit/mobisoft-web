<nav class="fixed">
  <div class="hamb-menu" id="nav-icon3">
    <span class="no-selectionable"></span>
    <span class="no-selectionable"></span>
    <span class="no-selectionable"></span>
    <span class="no-selectionable"></span>
  </div>
  <div id="menuLi" class="menu">
    <!-- <ul class="listado-menu">
      <li> <a href="#">Desarrollo de Apps</a> </li>
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
    </ul> -->
    <div  class="bocata-help  ">
      <div id="ayudaMenu" class="info-bocata | borde-linear | opaco">
        <h5>¿Necesitas <span>ayuda</span> ?</h5>
        <a class="llamar" rel="nofollow" href="tel:+34747410385">
          <img class="phone-menu | lazyload" data-src="/imagenes/phone.png" alt="Contacto teléfono">
          <span>Llámanos</span>
        </a>
        <a class="whatsappllamar" target="_blank" rel="noopener" href="https://wa.me/34747410385?text=¡Hola!%20me%20interesa%20hacer%20una%20app">
          <img class="lazyload" data-src="/imagenes/whatsapp.png" alt="Contacto Whatsapp">
          <span>Whatsapp</span>
        </a>
      </div>


      <div id="android-helper" class="android-helper">
        <img class="unselectable | lazyload" data-src="/imagenes/android-relleno.png" alt="Android Dark" title="Android Dark">
      </div>
    </div>
  </div>
  <div class="icon">
    <a href="/">
      <img id="logo" class="logo-max | lazyload" data-src="/logos/mobisoft-logo-letras.png" alt="Mobility Software Solutions">
    </a>
  </div>

  <div class="contactar_desarrollo_apps">
    <div class="contactB">
      <a class="whatsappHeader" target="_blank" rel="noopener" href="https://wa.me/34747410385?text=¡Hola!%20me%20interesa%20hacer%20una%20app">
        <x-svg.whatsapp/>
      </a>
      <a class="" rel="nofollow" href="tel:+34747410385">
        <span>747410385</span>
      </a>
    </div>
    <div class="contact">
      <a href="/#presupuestar">Contactar</a>
    </div>
  </div>


</nav>

<script>

  var open = false;
  var menu = document.getElementById('nav-icon3');
  var android = document.getElementById('android-helper')
  var ayuda = document.getElementById('ayudaMenu')
  menu.onclick = () => {
    var menuLi = document.getElementById('menuLi')
    if(open) {
      menuLi.classList.remove('menu-open');
      menu.classList.remove('open');
      android.classList.remove('appear');
      ayuda.classList.add('opaco');
    }else {
      menuLi.classList.add('menu-open');
      menu.classList.add('open');
      setTimeout(function(){ android.classList.add('appear'); }, 400);
      setTimeout(function(){ ayuda.classList.remove('opaco'); }, 800);


    }
    open = !open;

  }
  logo();
  window.addEventListener("resize", logo);
  // window.addEventListener("scroll", resizeLogo);
  function logo() {
    if(window.innerWidth <= 600) {
      var logo = document.getElementById('logo')
      logo.src = "/logos/mobisoft-mini.png"
    } else {
      var logo = document.getElementById('logo')
      logo.src = "/logos/mobisoft-logo-letras.png"
    }

  }
  function resizeLogo() {
    if(document.documentElement.scrollTop == 0 ) {
      var logo = document.getElementById('logo')
      logo.src = "/logos/mobisoft-logo-letras.png"
    } else {
      var logo = document.getElementById('logo')
      logo.src = "/logos/mobisoft-mini.png"
    }

  }

</script>
