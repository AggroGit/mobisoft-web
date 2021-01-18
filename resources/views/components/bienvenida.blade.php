<div class="jumbotron text-center welcome">
  <div class="container slideanim ">

    <h1>@yield('titulo')</h1>
    <h1 class="verdeClaro">@yield('tituloUbi')</h1>

    <div class="bordesLilas ">
      <h2 class="blanco">@yield('tituloEntrelineado')</h2>
    </div>

    <div class="">
      <h3>@yield('subtitulo1')</h3>
      <h3><a class=" smoothScroll linkSubrallado" href="#services">@yield('subtitulo2')</a>
        @yield('subtitulo3')
      </h3>
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
        <a class="noLink" href="{{url('/')}}">desarrollo apps > </a>
      </li>
      <li>
        <a class="noLink" href="http://www.example.com/books/sciencefiction">  @yield('migasPan')</a>
      </li>
    </ol>
</div>
