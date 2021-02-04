@extends('layouts.app')
@section('content')

  <section class="content-big | slideanim | first">
    <div class="divided">
      <div class="divided-1-2  | titleSubtitle">
        <h1>Apps, software y webs a medida</h1>
        <p>Somos verdaderos expertos en crear proyectos para tu negocio y hacer realidad tu idea</p>
        <br>
        <a class="boton-lila | center | down-40" href="#contacto">
          Empecemos
        </a>
      </div>
      <div class="divided-1-2 ">
        <img class="unselectable | " src="/desarrollo/mobisoft-desarrollo.png" alt="">
      </div>
    </div>
  </section>

  <section class="content-big | slideanim" id="services">
    <div class="divided | servicesContent">
      <div class="divided-1-3">
        <div class="svg | web-svg">
          <x-svg.web/>
        </div>
        <h3>Páginas Web y Aplicaciones Web</h3>
      </div>
      <div class="divided-1-3">
        <div class="svg | app-svg">
          <x-svg.app/>
        </div>
        <h3 class="down">Apps para Android y iPhone</h3>
      </div>
      <div class="divided-1-3">
        <div class="svg | web-svg">
          <x-svg.web/>
        </div>
        <h3>Marketing y asesoramiento digital</h3>
      </div>
    </div>
  </section>












      <div class="content slideanim" id="test">
        <div class="divided">
          <img class="divided-1-2 | phone-img | unselectable" src="/imagenes/apps/collblanc.png" alt="">
          <div class="divided-1-2 | inlined">
            <h2>Lorem ipsum</h2>
            <p>These opinions paint a picture of a language getting more mature, but also more complex. And perhaps –at least while we struggle to keep up with the pace of change– a little less enjoyable?</p>
            <a class="borde-linear | boton-sencillo | down-40" href="">Ver Portfolio</a>
          </div>
        </div>
      </div>

      <div class="" id="proceso" >
        <div class="content-big | slideanim">
          <div class="titulos | slideanim">
            <h2>El proceso de desarrollo de software</h2>
            <h3>5 puntos de inflexión para ser un éxito</h3>
          </div>
          <div class="divided">
            <div class="divided-1-2">
              <h2>Conceptualización de la idea</h2>
              <p>Iniciamos el proyecto realizando un "brainstorming" que consiste en reflejar todas las ideas clave sobre las funcionalidades.</p>
              <p>Seguimos ordenando estas ideas antes de empezar el desarrollo de apps en Barcelona gracias al "card sorting”</p>
            </div>
            <div class="divided-1-2">
              <img class="unselectable " src="/desarrollo/idea-hacer-app.png" alt="">
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


      <x-mapa/>
      <x-contact/>





@endsection
