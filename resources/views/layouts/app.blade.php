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
    <link async href="{{ asset('css/common.css?v=0.3') }}" rel="stylesheet">
    <link async href="{{ asset('css/first.css?v=0.3') }}" rel="stylesheet">
    <link async href="{{ asset('css/menu.css?v=0.3') }}" rel="stylesheet">

  </head>
  <body>
    <x-cabezera/>
    @yield('content')












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
    var altura = window.innerHeight*0.6;
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
