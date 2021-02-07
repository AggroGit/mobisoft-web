@extends('layouts.app')
@section('content')

  <section class="content-big | slideanim | first">
    <div class="divided">
      <div class="divided-1-2  | titleSubtitle">
        <h1>Mobisoft | Empresa de Desarrollo de Apps, Software y Webs a Medida</h1>
        <span>Somos verdaderos expertos en crear proyectos que funcionan tanto para ti como tus usuarios.</span>
        <p>Operamos con total normalidad a pesar de la situación actual. ¿Buscas presupuesto gratuito?</p>
        <br>
        <a class="boton-lila | center | down-40" href="#presupuestar">
          Sí, contactar
        </a>
      </div>
      <div class="divided-1-2 ">
        <img class="unselectable | " src="/desarrollo/mobisoft-desarrollo.png" alt="">
      </div>
    </div>
  </section>

  <section class="content | slideanim">
    <p><b>Mobisoft</b> es el equipo y <strong>empresa de desarrollo de aplicaciones, software y páginas web que te ayudará en todo el ciclo de programación</strong> para que tu nueva startup, producto o servicio sea un total éxito. ¡Cuenta con nosotros!</p>
    <p>Internet es la plataforma de comunicación líder del siglo XXI, su importancia es vital para cualquier negocio. Gracias a este medio puedes darte a conocer en todo el mundo pero... ¿cuál es la forma más eficaz, popular y revolucionaria? Sencillo, creando software ya sea App o Web que permita <strong>mejorar la imagen de marca del negocio, aumentar las conversiones y fidelizar a los clientes.<strong></p>
    <p>¿Cómo puedes hacer una aplicación de calidad y a un precio razonable? Precisamente en Mobisoft llevamos más de 5 años haciendo las cosas muy bien. Somos capaces de entender y priorizar tus objetivos además de resolver cada una de tus preocupaciones. <b>Nos encanta lo que hacemos y lo reflejamos en cada detalle.</b></p>
    <p>¿Qué es lo que mejor nos define? Sin duda alguna la transparencia. Adecuamos cada proyecto a tu presupuesto </b>para conseguir el mejor resultado.</b> Sentirás desde el primer momento que somos mucho más que una empresa, <strong>somos tu propio equipo de desarrollo de aplicaciones.</strong></p>
  </section>

  <section class="content | slideanim">
    <div class="borde-linear">
      <h2 class="collapsible">Empresa Desarrollo de Software</h2>
      <div class="contentCollapsable">
        <p>Los motivos que acercan a las pequeñas, medianas y grandes empresas en España a la necesidad de seguir las tendencias tecnológicas <strong>pasan por el asesoramiento de una empresa de desarrollo de <em>software</em></strong>. Analizamos las necesidades de nuestros clientes, sus usuarios y mercado para poder dar soluciones concretas y específicas.</p>
        <p>Programamos <em>software</em> de manera modular acompañado de toda clase de documentación para asegurar su futuro. Crecimiento, cambios, adaptación y personalización son algunas de las palabras que mejor definen nuestras soluciones tecnológicas.</p>
        <p>Utilizamos <strong>metodologías ágiles tanto durante la conceptualización como la programación</strong> para asegurar los tiempos de entrega y la máxima calidad en el resultado. Adicionalmente los TIC (Tecnologías de la información y la comunicación) nos ayudan a optimizar procesos y adaptarnos con las mejores soluciones tecnológicas a cada necesidad.</p>
        <p>El futuro es ahora y los avances tecnológicos significan la ventaja competitiva sobre el mercado. ¿Buscas asesoramiento? Puedes contactar con nuestro equipo si buscas ayuda de una empresa de desarrollo de software <a href=“”>aquí.</a> </p>
      </div>
    </div>
  </section>

  <section class="content | slideanim">
    <div class="borde-linear">
      <h2 class="collapsible">Empresa Desarrollo de apps</h2>
      <div class="contentCollapsable">
        <p>Nuestra empresa de desarrollo de apps ofrece <strong>tanto servicio de diseño como creación</strong> para tu aplicación móvil. Sea cual sea el tamaño de tu empresa o proyecto para desarrollar una app o incluso si requieres servicios de <em>mantenimiento de software, outsourcing</em> o incluso asesoramiento para <em>Startups</em></p>
        <p>Somos 100% nativos, desarrollamos <strong>aplicaciones para empresas con la mayor calidad posible y con las tecnologías más avanzadas</strong> como Flutter, Firebase y Laravel. Nuestros programadores expertos trabajan con estas herramientas desde antes de su lanzamiento y cuentan con la experiencia de haber creado ya decenas de apps. Cumplimos las fechas de entrega al 100% con aplicativos completamente funcionales gracias a las metodologías ágiles y los ciclos de testing.</p>
        <p>Adecuamos cada proyecto al presupuesto del que dispones <b>consiguiendo la mejor calidad precio</b> y facilitando el acceso a cualquier persona o empresa para que disponga de su propio equipo de <a href=“”>desarrollo de apps</a> bajo su propia marca y con las mejores funcionalidades del mercado.</p>
      </div>
    </div>
  </section>

  <section class="content | slideanim">
    <div class="borde-linear">
      <h2 class="collapsible">Empresa Desarrollo de webs</h2>
      <div class="contentCollapsable">
        <p>Si quieres realizar una página web lo primero es decidir si necesitas una web para darte a conocer, un <em>e-commerce</em> para vender de manera <em>Online</em> o bien crear una herramienta a modo de aplicación web.<b>Necesitarás un asesoramiento a la altura y aquí es precisamente cuando en Mobility Software Solutions ya empezamos a ayudarte.</b></p>
        <p>Seguramente algunas de las preguntas que te planteas ahora mismo son: ¿Qué diferencia hay entre una empresa de desarrollo web y una agencia de desarrollo web? ¿Cuál sería mejor opción para mi proyecto?</p>
        <p>La única respuesta coherente es depende, no solo del proyecto que quieres realizar sino también de tu visión sobre el futuro del mismo. En Mobisoft <b>te guiaremos desde el primer momento brindándote toda nuestra experiencia, un enfoque estratégico y total transparencia</b>.</p>
        <p>Trabajar con Mobisoft es como tener un miembro más en el equipo. Somos tu empresa de desarrollo de software, apps y webs de éxito.</p>
      </div>
    </div>
  </section>

  <x-nosotros/>

  <x-contact/>


  <section id="portfolio" class="">
    <h3 class="center | tituloPortfolio">Portafolio Proyectos de Software, Webs y Apps</h3>
    <div class="portfolio-element" id="collblanc">
      <div class="divided | slideanim">
        <div class="divided-1-2">
          <h4 class="titlePortfolio">Mercat Collblanc Shopping Center</h4>
          <p class="subtitle-portfolio">Funciones principales:</p>
          <ul>
            <li>Buscador y filtros avanzados</li>
            <li>Login con redes sociales</li>
            <li>App tipo Market Place</li>
            <li>Notificaciones push</li>
            <li>Chat integrado</li>
            <li>Compras in-app con solo 3 clics</li>
            <li>E-Payments con TPV virtual </li>
            <li>Noticias</li>
          </ul>
        </div>
        <div class="divided-1-2">
          <img class="phone-img | unselectable" src="/imagenes/apps/collblanc-2.png" alt="">
        </div>
      </div>
    </div>




    <div class="portfolio-element" id="vuitntas">
      <div class="divided | slideanim">
        <div class="divided-1-2">
          <img class="phone-img | unselectable" src="/imagenes/apps/vuitantas.png" alt="">
        </div>
        <div class="divided-1-2">
          <h4 class="titlePortfolio">Vuitantas 80’s</h4>
          <p class="subtitle-portfolio">Funciones principales:</p>
          <ul>
            <li>Reparto de comida a domicilio</li>
            <li>Aviso de alérgenos</li>
            <li>Ofertas</li>
            <li>Notificaciones push</li>
            <li>Gestión de pedidos vía back-office</li>
        </div>

      </div>
    </div>






    <div class="portfolio-element" id="dipper">
      <div class="divided | slideanim">
        <div class="divided-1-2">
          <h4 class="titlePortfolio">GRUPO DIPER</h4>
          <p class="subtitle-portfolio">Funciones principales:</p>
          <ul>
            <li>Fácil de gestionar</li>
            <li>Venta 100% online</li>
            <li>Publicación de proyectos como portafolio</li>
            <li>Contacto para generar <em>leads</em></li>

          </ul>
        </div>
        <div class="divided-1-2">
          <img class="phone-img | unselectable" src="/imagenes/apps/collblanc-2.png" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="content-big | slideanim">
    <div class="contienetitlePasos">
      <h3 class="center">¿Cómo Empezamos un Proyecto de Programación?</h3>
      <h4 class="center">Los 3 pasos obligatorios antes de empezar</h4>
    </div>
    <div class="divided">
      <div class="divided-1-3">
        <div class="content-proceso">
          <x-svg.web/>
          <h3 class="center">1. Definir el usuario objetivo</h3>
          <p class="center">Definir al usuario objetivo permite enfocar el software desde el inicio a las personas que realmente lo van a utilizar.</p>
        </div>
      </div>

      <div class="divided-1-3">
        <div class="content-proceso">
          <x-svg.ux/>
          <h3 class="center">2. Trabajar la UI/UX en los diseños</h3>
          <p class="center">Definir al usuario objetivo permite enfocar el software desde el inicio a las personas que realmente lo van a utilizar.</p>
        </div>
      </div>

      <div class="divided-1-3">
        <div class="content-proceso">
          <x-svg.list/>
          <h3 class="center">3. Definición de objetivos</h3>
          <p class="center">La tarea más clara para facilitar el entendimiento del proyecto y potenciar sus puntos fuertes es la definición de objetivos</p>
        </div>
      </div>

    </div>

  </section>



  <section class="" id="proceso" >
    <div class="content-big | slideanim">
      <div class="titulos | slideanim">
        <h2>El proceso de desarrollo de software</h2>
        <h3>5 puntos de inflexión para ser un éxito</h3>
      </div>
      <div class="divided">
        <div class="divided-1-2 | textproceso">
          <h2>Conceptualización de la idea</h2>
          <p>Iniciamos el proyecto realizando un "brainstorming" que consiste en reflejar todas las ideas clave sobre las funcionalidades.</p>
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
        <div class="divided-1-2 | textproceso">
          <h2>Interfaz y experiencia de usuario</h2>
          <p>Seguimos ordenando estas ideas antes de empezar el desarrollo de apps en Barcelona gracias al “card sorting”.</p>
          <p>Con todas las funciones claras es hora de plasmar la idea en un diseño en la que ver como quedan los colores y las pantallas. En este momento es donde ponemos especial atención a los casos de uso y la experiencia de usuario con tal de realizar el diseño más acorde posible.</p>
        </div>
      </div>
    </div>


    <div class="content-big | slideanim">
      <div class="divided">
        <div class="divided-1-2 | textproceso">
          <h2>Programación y publicación</h2>
            <p>En Mobility Software Solutions utilizamos las tecnologías más punteras como son Flutter para el desarrollo Android y iOS, Firebase para notificaciones y tanto Laravel como Vue.js para los desarrollos en servidor y web respectivamente.</p>
            <p>Todas nuestras entregas ya sean desarrollos de software, apps o web pasan por un proceso de <em>testing</em>.</p>
        </div>
        <div class="divided-1-2">
          <img class="unselectable | " src="/desarrollo/publicar-tu-app.png" alt="">
        </div>

      </div>
    </div>
  </section>


  <section  id="trust_us">
    <div class="content">
      <h3>Ya confían en nosotros</h3>
    </div>
    <div class="content-big">

    </div>

    <div class="content-big | contieneClientes">
      <div class="contiene_trust">
        <img src="/imagenes/clientes/ajuntament_barcelona.png" alt="">
      </div>
      <div class="contiene_trust">
        <img src="/imagenes/clientes/zincobs.png" alt="">
      </div>
      <div class="contiene_trust">
        <img src="/imagenes/clientes/aftermarketing.png" alt="">
      </div>
      <div class="contiene_trust">
        <img src="/imagenes/clientes/collblanc.png" alt="">
      </div>
    </div>

  </section>


<section class="presupuestoAll" id="presupuestar">
  <div class="coniteneimg-form | top10">
    <img src="/logos/mobisoft-logo.png" alt="">
  </div>

  <div class="contieneFormulario" >
    <div id="presupuesto" class="content-big | agranda-en-pe" >
      <div class="formulario">
        <h4 class="title-presupuesto">Somos expertos a tu servicio</h4>
        <ol>
          <li>Llevamos +5 años haciendo aplicaciones móviles con una relación calidad/precio inmejorable.</li>
          <li>Nuestros clientes vuelven a confiar en nosotros para sus futuros desarrollos tanto webs como móviles.</li>
          <li>No subcontratamos desarrolladores de otros países, todo el equipo es interno.</li>
        </ol>
        <h4 class="title-presupuesto">¡Gracias por interactuar con nosotros!</h4>
        <p>Incluímos en tu presupuesto de manera totalmente gratuita:</p>
        <ul>
          <li>2 horas de consultoría para tu idea.</li>
          <li>Wireframe + 1 revisión.</li>
          <li>1 revisión adicional.</li>
          <li>Prototyping</li>
        </ul>

      </div>
      <div class="lado-form">
        <form class="" action="index.html" method="post">
          <h3 class="title-presu">¿Quieres empezar un proyecto?</h3>
          <p class="desc-form">Apostamos por la transparencia y la honestidad,si buscas un equipo de confianza estás en el lugar correcto. Nos adaptamos al covid19 con MEJORES PRECIOS para los emprendedores y <br> <span>PRESUPUESTO GRATUITO</span>.</p>
          <div class="inputs-forms-divided">
            <div class="form-input">
              <input placeholder="Nombre*" type="email" name="name">
            </div>
            <div class="form-input">
              <input placeholder="Correo*" type="name  " name="email" value="">
            </div>
            <div class="form-input">
              <input placeholder="Teléfono*" type="phone" name="phone" value="">
            </div>
          </div>
          <div class="form-input">
            <input placeholder="Sobre tu proyecto" type="text" name="about" value="">
          </div>


          <div class="contienecheckandbutton">
            <div class="checkbox">
              <label class="container-check">Aceptar política <a href="df ">de privacidad</a>
                <input type="checkbox" >
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="btn-form">
              <button class="btn-form-b" type="submit" name="button">Enviar</button>
            </div>
          </div>

        </form>
      </div>
  </div>
</section>















@endsection
