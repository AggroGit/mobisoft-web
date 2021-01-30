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
    <link href="{{ asset('css/common.css?v=0.2') }}" rel="stylesheet">
  </head>
  <body>
    @yield('content')
    <div class="content">
      <h1>Mobisoft | Empresa de desarrollo de apps, software y webs a medida</h1>
      <span>Somos verdaderos expertos en crear proyectos que funcionan tanto para ti como tus usuarios.</span>
      <p>¿Quieres empezar ahora a crear una app que destaque?</p>
    </div>

    <div class="content">
      <h2>Quienes somos</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

  </body>
</html>
