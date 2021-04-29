<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M4XX7KT');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TITULO -->
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('imagenes/logo-mobility-software-solutions.webp')}}">

    <!-- BUSCADORES -->
    @yield('head')
    <!-- STYLES -->
    <link href="{{ asset('css/common.css?v=1.2') }}" rel="stylesheet">
    <link href="{{ asset('css/first.css?v=1.2') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css?v=1.2') }}" rel="stylesheet">
    <script src="{{asset('js/lazysizes.min.js')}}"></script>


  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4XX7KT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <x-cabezera/>
    @yield('content')
    <footer>
      <div class="content-big">
        <div class="columnafooter">
          <h4>Legal</h4>
          <ul>
            <li>
              <a rel="nofollow" href="/legal/cookies">Política de cookies</a>
            </li>
            <li>
              <a rel="nofollow" href="/legal/privacidad">Política de privacidad</a>
            </li>
            <li>
              <a rel="nofollow" href="/legal/aviso">Aviso legal</a>
            </li>
          </ul>
        </div>
        <div class="columnafooter">

        </div>
        <div class="columnafooter | righted">
          <a class="ionosCol" href="https://partnernetwork.ionos.es/partner/mobility.software.solutions?origin=PartnerBadge">
            <img class="lazyload" data-src="/imagenes/normal_white_eco.svg" alt="IONOS - Colaborador oficial">
          </a>
        </div>
      </div>

      <div class="contieneLove">
        <p class="love">Made with ❤️ by <span>Mobisoft</span> </p>
      </div>


    </footer>







    <script >
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
    var altura = window.innerHeight*0.8;
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


    function validateForm(num=1) {
      var email = document.forms["presupuesto"+num]["email"].value;
      var phone = document.forms["presupuesto"+num]["phone"].value;
      var privacidad = document.forms["presupuesto"+num]["privacidad"];
        if (email == "") {
          alert("El Email es obligatorio");
          return false;
        }
        if (phone == "") {
          alert("El Teléfono es obligatorio");
          return false;
        }
        if (privacidad.checked == false) {
          alert("Debes aceptar nuestra política de privacidad");
          return false;
        }
        return true;

      }








    </script>

  </body>
</html>
