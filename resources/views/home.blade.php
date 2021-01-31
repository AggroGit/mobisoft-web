<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TITULO -->
    <title>@yield('title')</title>
    <!-- BUSCADORES -->
    <meta name="robots" content="noindex">
    @yield('head')
    <!-- STYLES -->
    <link async href="{{ asset('css/common.css?v=0.2') }}" rel="stylesheet">
    <link async href="{{ asset('css/first.css?v=0.2') }}" rel="stylesheet">
  </head>
  <body>
    @yield('content')

    <nav>
      <div class="icon">
        <img src="{{asset('logos/mobisoft-mini.png')}}" alt="Mobility Software Solutions">
      </div>
    </nav>
    <div class="content | welcome">
      <h1>Mobisoft | Empresa de desarrollo de apps, software y webs a medida</h1>
      <span class="entrelineado | linea-lila">Somos verdaderos expertos en crear proyectos que funcionan tanto para ti como tus usuarios.</span>
      <p>¿Quieres empezar ahora a <br> crear una app que destaque?</p>
      <a class="boton-lila | center" href="">
        Sí, Empecemos
      </a>
    </div>

    <div class="content">
      <h2>Quienes somos</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="content">
      <div class="contieneLema">
        <div class="lema">
          <p>Nuestro lema en <span>Mobility</span> </p>
        </div>
        <q cite="">Cuando la confianza es alta, la comunicación es fácil, instantánea y efectiva</q>
      </div>
      <div class="triangle"></div>
      <div class="citado">
        <div class="citaimg">
          <img src="/imagenes/Stephen.jpg" alt="Stephen R. Covey">
        </div>
        <div class="quienCita">
          <span>Stephen R. Covey</span>
          <p>Escritor y conferenciante</p>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="borde-linear">
        <h2 class="collapsible">Empresa desarrollo de software</h2>
        <div class="contentCollapsable">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    
    <div class="content">
      <div class="borde-linear">
        <h2 class="collapsible">Empresa desarrollo de software</h2>
        <div class="contentCollapsable">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    // collapsable
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
    </script>

  </body>
</html>
