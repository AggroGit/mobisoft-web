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
    <x-cabezera/>



    <div class="content | welcome | slideanim">
      <h1>Mobisoft | Empresa de desarrollo de apps, software y webs a medida</h1>
      <span class="entrelineado | linea-lila">Somos verdaderos expertos en crear proyectos que funcionan tanto para ti como tus usuarios.</span>
      <p>¿Quieres empezar ahora a <br> crear una app que destaque?</p>
      <a class="boton-lila | center" href="#test">
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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


    <div class="content slideanim" id="test">
      <div class="divided">
        <img class="divided-1-2 |  | unselectable" src="/imagenes/apps/collblanc.png" alt="">
        <div class="divided-1-2 | inlined">
          <h2>Lorem ipsum</h2>
          <p>These opinions paint a picture of a language getting more mature, but also more complex. And perhaps –at least while we struggle to keep up with the pace of change– a little less enjoyable?</p>
          <a class="borde-linear | boton-sencillo | down-40" href="">Ver Portfolio</a>
        </div>
      </div>
    </div>

    <div class="" id="proceso">
      <div class="content-big | slideanim">
        <div class="divided">
          <div class="divided-1-2">
            <h2>Conceptualización de la idea</h2>
            <p>Iniciamos el proyecto realizando un "brainstorming" que consiste en reflejar todas las ideas clave sobre las funcionalidades.</p>
            <p>Seguimos ordenando estas ideas antes de empezar el desarrollo de apps en Barcelona gracias al "card sorting”</p>
          </div>
          <div class="divided-1-2">
            <img class="unselectable | " src="/desarrollo/idea-hacer-app.png" alt="">

          </div>

        </div>
      </div>


      <div class="content-big | slideanim">
        <div class="divided">
          <div class="divided-1-2 ">
            <img class="unselectable | " src="/desarrollo/interfaz-app.png" alt="">
          </div>
          <div class="divided-1-2">
            <h2>Interfaz y experiencia de usuario</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>


      <div class="content-big | slideanim">
        <div class="divided">
          <div class="divided-1-2">
            <h2>Programación y publicación</h2>
            <p>Iniciamos el proyecto realizando un "brainstorming" que consiste en reflejar todas las ideas clave sobre las funcionalidades.</p>
            <p>Seguimos ordenando estas ideas antes de empezar el desarrollo de apps en Barcelona gracias al "card sorting”</p>
          </div>
          <div class="divided-1-2">
            <img class="unselectable | " src="/desarrollo/publicar-tu-app.png" alt="">
          </div>

        </div>
      </div>
    </div>


    <div class="contieneFormulario" >
      <div id="contacto" class="slideanim | content-big | agranda-en-pe" >
        <div class="formulario">
          <h4 class="form-title">Empieza a hacer crecer tu negocio con <span class="color-lila">Mobisoft</span></h4>
          <form class="" action="index.html" method="post">
            <div class="inputs-forms-divided">
              <div class="form-input">
                <input placeholder="Nombre" type="email" name="name">
              </div>
              <div class="form-input">
                <input placeholder="Correo" type="name  " name="email" value="">
              </div>
              <div class="form-input">
                <input placeholder="Teléfono" type="phone" name="phone" value="">
              </div>
            </div>
            <div class="form-input">
              <input placeholder="Sobre tu proyecto" type="text" name="about" value="">
            </div>
          </form>
        </div>
        <div class="lado-form">

          <div class="quoted">
            <img class="unselectable" src="/desarrollo/quote.png" alt="">
          </div>
          <q class="cita-form" cite="">For me, working with a team of reliable, professional people is a major factor. I am really glad I found Mobisoft, a great team of pros, who outdid my expectations and were always available for new ideas.</q>
        </div>
      </div>
    </div>








    <footer>
      <div class="content">
        <p>Made with ❤️ by <span>Mobisoft</span> </p>
      </div>
    </footer>







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


    // pruebas mias
    var divideds = document.getElementsByClassName('divided');
    // le ponemos flex
    for (var i = 0; i < divideds.length; i++) {
      divideds[i].style.display = "flex";
      // calculamos sus hijos
    }

    // SCROLL SMOTH APPEAR
    var elements = document.getElementsByClassName('slideanim');
    var altura = window.innerHeight*0.4;
    window.onscroll = function() {checkSmothAppeares(elements,altura)};
    // initial
    this.checkSmothAppeares(elements,altura);
    function checkSmothAppeares(elements,altura) {

      for (var i = 0; i < elements.length; i++) {
        if(document.documentElement.scrollTop+altura >= elements[i].offsetTop || elements[i].offsetTop<=100){
          elements[i].classList.add('slide')
        }
      }
    }








    </script>

  </body>
</html>
