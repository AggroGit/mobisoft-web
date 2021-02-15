<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="{{ asset('css/common.css') }}" rel="stylesheet">
  <meta name="robots" content="noindex">


<link rel="stylesheet" href="{{asset('css/404Neon/style.css')}}">



</head>
<body>
<div class="board ">
  <p id="error">
    error
  </p>
  <p id="code">
    404
  </p>

</div>
<div  class="bocata-help  ">
  <div id="ayudaMenu" class="info-bocata | borde-linear | opaco">
    <h5>¿Necesitas <span>ayuda</span> ?</h5>
    <a class="" href="tel:+34747410385">
      <img class="phone-menu" src="/imagenes/phone.png" alt="Contacto teléfono">
      <span>Llámanos</span>
    </a>
    <a class="" target="_blank" href="https://wa.me/34747410385?text=¡Hola!%20me%20interesa%20hacer%20una%20app">
      <img src="/imagenes/home.png" alt="Icono Inicio Mobility">
      <span>Inicio</span>
    </a>
    <a class="" target="_blank" href="https://wa.me/34747410385?text=¡Hola!%20me%20interesa%20hacer%20una%20app">
      <img src="/imagenes/whatsapp.png" alt="Contacto Whatsapp">
      <span>Whatsapp</span>
    </a>

  </div>


  <div id="android-helper" class="android-helper">
    <img class="unselectable" src="/imagenes/android-relleno.png" alt="Android Dark" title="Android Dark">
  </div>
</div>
<script  src="{{asset('css/404Neon/script.js')}}"></script>
<script type="text/javascript">
appear()
function appear()  {
  var open = false;
  var android = document.getElementById('android-helper')
  var ayuda = document.getElementById('ayudaMenu')
  if(open) {
    android.classList.remove('appear');
    ayuda.classList.add('opaco');
  }else {
    setTimeout(function(){ android.classList.add('appear'); }, 400);
    setTimeout(function(){ ayuda.classList.remove('opaco'); }, 800);


  }
  open = !open;

}
</script>
</body>
</html>
