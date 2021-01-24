<div class="jumbotron text-center welcome">
  <div class="container slideanim ">

    <h1>@yield('titulo')</h1>
    <h1 class="verdeClaro fuenteNeon parpadeo">@yield('tituloUbi')</h1>

    <div class="bordesLilas ">
      <span class="blanco">@yield('tituloEntrelineado')</span>
    </div>

    <div class="Subtitulo">
      <h2>@yield('subtitulo1')</h2>
      <h2><a class=" smoothScroll linkSubrallado" href="#services">@yield('subtitulo2')</a>
        @yield('subtitulo3')
      </h2>
    </div>

    <br>
    <div class="contieneBotonMobisoft">
      <a class="noLink" href="">
        <div class="BotonMobisoft">
          Sí, empecemos
        </div>
      </a>
    </div>
  </div>
</div>
<div class="migasPan hidden-sm hidden-xs">
  <ol>
      <li>
        <a class="noLink" href="{{url('/')}}">mobisoft.works > </a>
      </li>
      <li>
        <a class="noLink" href="{{url('/desarrollo-apps/')}}">desarrollo apps > </a>
      </li>
      <li>
        <a class="noLink" href="{{url('/desarrollo-apps/')}}/@yield('cityName')">  @yield('migasPan')</a>
      </li>
    </ol>
</div>
