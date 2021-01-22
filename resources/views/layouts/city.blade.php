<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>@yield('headTitle')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
  <!-- Letra Neon -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'> -->


  <!-- BUSCADORES -->
  <meta name="robots" content="noindex">


  <!-- STYLES -->
  <link href="{{ asset('css/base.css') }}" rel="stylesheet">
  <!-- MIGAS DE PAN -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "mobisoft.works",
        "item": "https://example.com/books"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "desarrollo de apps",
        "item": "https://example.com/books/sciencefiction"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "desarrollo aplicaciones Barcelona"
      }]
    }
  </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- NAVBAR -->
<x-navbar/>
<x-bienvenida/>



<!-- Container (About Section) -->
<div id="about" class="container">
  <div class="row ">
    <div class="col-sm-8">

      @yield('ptimerTexto')
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<br>

<!-- BOTON DESPLEGABLE -->
<div class="container">
      <div class="aparicion">
        <a data-toggle="collapse" class="tituloBoton" href="#collapse1">@yield('desplegabletitulo1')</a>
        <a  data-toggle="collapse" href="#collapse1" class="botonPlus">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </div>
    <div id="collapse1" class="collapse">
      <br>
      @yield('desplegabletexto1')
      <br>
    </div>
</div>
<br>
<!-- BOTON DESPLEGABLE -->
<div class="container">
      <div class="aparicion">
        <a data-toggle="collapse" class="tituloBoton" href="#collapse2">@yield('desplegabletitulo2')</a>
        <a  data-toggle="collapse" href="#collapse2" class="botonPlus">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </div>
    <div id="collapse2" class="collapse">
      <br>
      @yield('desplegabletexto2')
      <br>
    </div>
</div>

<br>

<!-- BUSCAR INFO -->
<div class="container-fluid moreInfo noTanBlanco d-flex align-items-center justify-content-center">
  <div class="container slideanim">
  <div class="row text-center flex">
    <div class="col-6 margin-auto">
      <h3 class="neon">¿Buscas ayuda immediata?</h3>
    </div>

  </div>

  <br>

  <div class="row">
    <!-- Imagen contacto -->
    <div class="col-md-3 text-center">
      <img class="img logollamada" src="/imagenes/llamada.png" alt="">
    </div>
    <!-- Medios contacto -->
    <div class="col-md-9 container">
      <div class="row">
        <div class="col-md-6">
          <p>También en whatsapp</p>
          <img class="img iconoWhats" src="/imagenes/whatsapp.png" alt="">
          <a class="linkWhats" href="https://wa.me/34747410385?text=Hola%20!%20me%20interesa%20hacer%20una%20app">747410385</a>
        </div>
        <div class="col-md-6">
          <p>Llámanos</p>
          <img class="img iconoWhats" src="/imagenes/whatsapp-blanco.png" alt="">
          <a class="linkWhats" href="tel:747410385">747410385</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 masGris">
          <p class="abajo1">
            Horario de atención de 9.00 a 19:00 de lunes a viernes.
          </p>
        </div>

      </div>
    </div>
  </div>
</div>
</div>

<!-- MAPA -->
<div class="container-fluid fullCompleta">
    <!-- <div class="" id="map"></div> -->
    <!-- <div class="col-md-6" id="pano"></div> -->
    <!-- <img src="https://maps.googleapis.com/maps/api/staticmap?size=512x512&zoom=15&center=Brooklyn&key=AIzaSyAZRjU-Ul0mi2mMAzruvkpA1VIYfmpZuc0" alt=""> -->

</div>


<div class="container-fluid">
  <div class="container slideanim">
    <div class="row">
      <div class="col-sm-6 text-center">
        <a target="_blank" href="https://www.google.com/maps/place/Plaza+del+Dr.+Letamendi,+2,+08007+Barcelona/@41.3897567,2.15794,15.53z/data=!4m13!1m7!3m6!1s0x12a4a28db53f0495:0xb37cb15cd638a6d!2sPlaza+del+Dr.+Letamendi,+2,+08007+Barcelona!3b1!8m2!3d41.3885805!4d2.1610856!3m4!1s0x12a4a28db53f0495:0xb37cb15cd638a6d!8m2!3d41.3885805!4d2.1610856">
          <!-- <img class="imageGoogleMap" src="https://maps.googleapis.com/maps/api/staticmap?center=41.3897567,2.15794&zoom=12&size=400x400&maptype=roadmap
      &style=color:red
      &key=AIzaSyAZRjU-Ul0mi2mMAzruvkpA1VIYfmpZuc0" alt=""> -->
        </a>

      </div>
      <div class="col-sm-6">
        <h2>Encuentranos en Barcelona</h2><br>
        <h4><strong>LOREM:</strong> Visitanos en la ciudad condal, en pleno centro de Barcelona. Estamos junto a plaza Universidad, en <a target="_blank" href="https://www.google.com/maps/place/Plaza+del+Dr.+Letamendi,+2,+08007+Barcelona/@41.3897567,2.15794,15.53z/data=!4m13!1m7!3m6!1s0x12a4a28db53f0495:0xb37cb15cd638a6d!2sPlaza+del+Dr.+Letamendi,+2,+08007+Barcelona!3b1!8m2!3d41.3885805!4d2.1610856!3m4!1s0x12a4a28db53f0495:0xb37cb15cd638a6d!8m2!3d41.3885805!4d2.1610856">plaza Letamendi nº 1</a></h4><br>
        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>
</div>

<!-- LOS 3 PASOS -->
<div id="portfolio" class="fondoOscuro letraBlanca noTanBlanco container-fluid text-center ">
  <div class="container letraBlanca">
  <h2>Una buena empresa de desarrollo de apps sigue:</h2><br>
  <div class="row text-center flex">
    <div class="col-6 margin-auto">
      <h4 class="neon">Los 3 pasos obligatorios antes de empezar</h4>
    </div>

  </div>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="imagenCuadrada letraBlanca">
        <img src="/imagenes/usuarios.webp" alt="@yield('paso1')" width="400" height="300">
        <p><strong>@yield('paso1')</strong></p>
        <p>@yield('paso1definicion')</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="imagenCuadrada">
        <img src="/imagenes/mano.webp" alt="@yield('paso1')" width="400" height="300">
        <p><strong>@yield('paso2')</strong></p>
        <p>@yield('paso2definicion')</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="imagenCuadrada">
        <img src="/imagenes/ordenador-app.webp" alt="Paris" width="400" height="300">
        <p><strong>@yield('paso3')</strong></p>
        <p>@yield('paso3definicion')</p>
      </div>
    </div>
</div>
</div>
</div>




<div class="container-fluid ">
  <div class="row">
    <div class="col-sm-4 text-center">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>



<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4 text">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".smoothScroll, .navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  function addAnimation() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
      var winTop = $(window).scrollTop();
        if (pos < winTop + 600 || pos <= 100) {
          $(this).addClass("slide");
        }
    });
  }
  // on scroll
  $(window).scroll(function() {
    addAnimation()
  });
  // on init
  addAnimation();
})
</script>

</body>
</html>
