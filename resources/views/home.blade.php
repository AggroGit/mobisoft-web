@extends('layouts.app')
@section('content')

  <section class="content-big | slideanim | first">
    <div class="divided">
      <div class="divided-1-2  | titleSubtitle">
        <h1>Mobisoft | Empresa de Desarrollo de Apps, Software y Webs a Medida</h1>
        <span>Somos verdaderos expertos en crear proyectos que funcionan tanto para ti como tus usuarios.</span>
        <p>Operamos con total normalidad a pesar de la situación actual. ¿Buscas presupuesto gratuito?</p>
        <br>
        <a class="boton-lila | center | down-40" href="#contacto">
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


  <section id="portfolio" class="slideanim">

    <h3 class="center | tituloPortfolio">Portafolio Proyectos de Software, Webs y Apps</h3>

    <div class="portfolio-element" id="collblanc">
      <div class="divided">
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
      <div class="divided">
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
      <div class="divided">
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



  </section>












@endsection
