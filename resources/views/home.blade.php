@extends('layouts.app')
@section('title',"Mobisoft | Empresa de Desarrollo de Apps, Software y Webs a Medida")

@section('head')
<meta name="description" content="Empresa de Desarrollo de Apps, Software y Webs a Medida para impulsar tu negocio o idea."/>
@endsection

@section('content')


<div class="cabezera">
  <section class="content-big">
    <div class="divided | noPadding | reverseOnPhone">
      <div class="divided-1-2  | titleSubtitle | noTopMob">
        <h1>Mobisoft | Empresa de <span>Desarrollo</span> de <span>Apps</span>, <span>Software</span> y <span>Webs</span> a Medida</h1>
        <p>Soluciones innovadoras para usuarios reales, nuestro equipo de desarrolladores interno es experto en aplicaciones móviles y lanzamiento de Startups.</p>
        <p>Operamos con total normalidad a pesar de la situación actual. ¿Buscas presupuesto gratuito? Te ayudamos.</p>
        <br>
        <div class="contieneBotonLila">
          <a class="boton-lila | center | down-40" href="#presupuestar">
            Presupuesto Gratuito
          </a>
        </div>

      </div>
      <div class="divided-1-2 | flex | imgCabezera | unselectable" >
        <!-- <img data-src="/imagenes/apps/both.png" class="unselectable | lazyload"  alt="Aplicacion Merco para Comercios"> -->
      </div>
    </div>
  </section>
  <div class="separadorCabezera">


    <!-- <div class="contieneImagenSeparador">
      <img class="unselectable" src="/imagenes/barcelona.png" alt="Desarrollo de aplicaciones en Barcelona">
    </div> -->
  </div>
</div>
@if(session('thanks'))
<div class="containAlert">
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    <strong>¡Gracias! 😊</strong> ¡Pronto nos pondremos en contacto contigo!
  </div>
</div>
@endif

  <section class="content">
    <h2>Tenemos todos los elementos necesarios para un desarrollo de primer nivel</h2>
    <p><b>Mobisoft</b> es el equipo y <strong>empresa de desarrollo de aplicaciones móviles, software y páginas web que te ayudará en todo el ciclo de programación</strong> para que tu nueva startup, producto o servicio sea un total éxito. ¡Cuenta con nosotros!</p>

    <p>Internet es la plataforma de comunicación líder del siglo XXI, su importancia es vital para cualquier negocio. Gracias a este medio puedes darte a conocer en todo el mundo pero… ¿cuál es la forma más eficaz, popular y revolucionaria? Sencillo, creando software ya sea App o Web que permita <strong>mejorar la imagen de marca del negocio, aumentar las conversiones y fidelizar a los clientes.</strong></p>

    <p>¿Cómo puedes hacer una aplicación de calidad y a un precio razonable? Precisamente en Mobisoft llevamos más de 5 años haciendo las cosas muy bien. Somos capaces de entender y priorizar tus objetivos además de resolver cada una de tus preocupaciones. <b>Nos encanta lo que hacemos y lo reflejamos en cada detalle.</b></p>

    <p>¿Qué es lo que mejor nos define? Sin duda alguna la transparencia. <b>Adecuamos cada proyecto a tu presupuesto </b>para conseguir el mejor resultado. Sentirás desde el primer momento que somos mucho más que una empresa, <strong>somos tu propio equipo de desarrollo de aplicaciones.</strong></p>

  </section>


  <section class="content ">
    <div class=" | plano">
      <h2 class="collapsible">Empresa Desarrollo de Software</h2>
      <div class="contentCollapsable">
        <p>Los motivos que acercan a las pequeñas, medianas y grandes empresas en España a la necesidad de seguir las tendencias tecnológicas <strong>pasan por el asesoramiento de una empresa de desarrollo de <em>software</em></strong>. Analizamos las necesidades de nuestros clientes, sus usuarios y mercado para poder dar soluciones concretas y específicas.</p>
        <p>Programamos <em>software</em> de manera modular acompañado de toda clase de documentación para asegurar su futuro. Crecimiento, cambios, adaptación y personalización son algunas de las palabras que mejor definen nuestras soluciones tecnológicas.</p>
        <p>Utilizamos <strong>metodologías ágiles tanto durante la conceptualización como la programación</strong> para asegurar los tiempos de entrega y la máxima calidad en el resultado. Adicionalmente los TIC (Tecnologías de la información y la comunicación) nos ayudan a optimizar procesos y adaptarnos con las mejores soluciones tecnológicas a cada necesidad.</p>
        <p>El futuro es ahora y los avances tecnológicos significan la ventaja competitiva sobre el mercado. ¿Buscas asesoramiento? Puedes contactar con nuestro equipo si buscas ayuda de una empresa de desarrollo de software. </p>
      </div>
    </div>
  </section>

  <section class="content | griuped">
    <div class=" | plano">
      <h2 class="collapsible">Empresa Desarrollo de apps</h2>
      <div class="contentCollapsable">
        <p>Nuestra empresa de desarrollo de apps ofrece <strong>tanto servicio de diseño como creación</strong> para tu aplicación móvil. Sea cual sea el tamaño de tu empresa o proyecto para desarrollar una app o incluso si requieres servicios de <em>mantenimiento de software, outsourcing</em> o incluso asesoramiento para <em>Startups</em></p>
        <p>Somos 100% nativos, desarrollamos <strong>aplicaciones para empresas con la mayor calidad posible y con las tecnologías más avanzadas</strong> como Flutter, Firebase y Laravel. Nuestros programadores expertos trabajan con estas herramientas desde antes de su lanzamiento y cuentan con la experiencia de haber creado ya decenas de apps. Cumplimos las fechas de entrega al 100% con aplicativos completamente funcionales gracias a las metodologías ágiles y los ciclos de testing.</p>
        <p>Adecuamos cada proyecto al presupuesto del que dispones <b>consiguiendo la mejor calidad precio</b> y facilitando el acceso a cualquier persona o empresa para que disponga de su propio equipo de desarrollo de apps bajo su propia marca y con las mejores funcionalidades del mercado.</p>
      </div>
    </div>
  </section>

  <section class="content | griuped">
    <div class=" | plano">
      <h2 class="collapsible">Empresa Desarrollo de webs</h2>
      <div class="contentCollapsable">
        <p>Si quieres realizar una página web lo primero es decidir si necesitas una web para darte a conocer, un <em>e-commerce</em> para vender de manera <em>Online</em> o bien crear una herramienta a modo de aplicación web.<b> Necesitarás un asesoramiento a la altura y aquí es precisamente cuando en Mobility Software Solutions ya empezamos a ayudarte.</b></p>
        <p>Seguramente algunas de las preguntas que te planteas ahora mismo son: ¿Qué diferencia hay entre una empresa de desarrollo web y una agencia de desarrollo web? ¿Cuál sería mejor opción para mi proyecto?</p>
        <p>La única respuesta coherente es depende, no solo del proyecto que quieres realizar sino también de tu visión sobre el futuro del mismo. En Mobisoft <b>te guiaremos desde el primer momento brindándote toda nuestra experiencia, un enfoque estratégico y total transparencia</b>.</p>
        <p>Trabajar con Mobisoft es como tener un miembro más en el equipo. Somos tu empresa de desarrollo de software, apps y webs de éxito.</p>
      </div>
    </div>
    <x-nosotros/>
  </section>



  <x-contact/>


  <section id="portfolio" class="">
    <h3 class="center | tituloPortfolio">Portafolio Proyectos de Software, Webs y Apps</h3>

    <div class="portfolio-element" id="vuitntas">
      <div class="divided">

        <div class="divided-1-2">
          <h4 class="titlePortfolio">Vuitantas 80’s</h4>
          <p class="subtitle-portfolio">Funciones principales:</p>
          <ul>
            <li>Reparto de comida a domicilio</li>
            <li>Aviso de alérgenos</li>
            <li>Ofertas</li>
            <li>Notificaciones push</li>
            <li>Gestión de pedidos vía back-office</li>
          </ul>
        </div>
        <div class="divided-1-2 | slideanim">
          <img class="phone-img | unselectable | lazyload" data-src="/imagenes/apps/vuitantas.png" alt="Aplicación para restaurantes">
        </div>

      </div>
    </div>





    <div class="separador"></div>
    <div class="portfolio-element" id="collblanc">

      <div class="divided | ">
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
        <div class="divided-1-2 | slideanim">
          <img class="phone-img | unselectable | lazyload" data-src="/imagenes/apps/collblanc-2.png" alt="Aplicación Merco para Mercados">
        </div>
      </div>
    </div>








    <div class="separadorDipper"></div>

    <div class="portfolio-element" id="dipper">
      <div class="divided">
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
        <div class="divided-1-2 | slideanim">
          <img class="phone-img | unselectable | lazyload" data-src="/imagenes/apps/dipper.png" alt="Desarrollo de proyecto Web">
        </div>
      </div>
    </div>
  </section>





  <section id="proceso" class="top10">

    <div class="content-big |">
      <div class="titulos  | ">
        <h2 class="tituloParrafo">¿Cómo Empezamos un Proyecto de Programación?</h2>
        <h3 class="subtitul">La comunicación es el primer paso para lograr que el desarrollo de software sea un éxito y el <b>uso de metodologías ágiles</b> nos ayudará a entender las necesidades de los usuarios finales para adaptarnos a ellas.</h3>
      </div>
    </div>

    <!-- PASO 1 -->
    <div class="content-big | divided | top10 ">
      <div class="divided-1-2">
        <h2>1. ONBOARDING: Hablamos y Definimos los Objetivos</h2>
        <p>Para facilitar la colaboración e integración contamos con el proceso de <em>onboarding</em>:</p>
        <ul class="listado">
          <li><b>1. Definimos</b> los objetivos del proyecto.</li>
          <li><b>2. Hablamos</b> sobre las principales funcionalidades y los requisitos técnicos.</li>
          <li><b>3. Asesoramos</b> sobre las mejores formas de monetización.</li>
        </ul>
        <p>Seguidos estos pasos <b>el entendimiento es completo y mutuo.</b>
        </p>
      </div>


      <div class="divided-1-2 | flex">
        <img class="unselectable | lazyload" data-src="/imagenes/desarrollo/definicion-objetivos.png" alt="Definición de objetivos">
      </div>
    </div>


    <!-- PASO 2 -->
    <div class="content-big | divided | reverse ">
      <div class="divided-1-2">
        <h2>2. La Conceptualización de la Idea</h2>
          <p>Empezamos con un <em>“Brainstorming”</em> (lluvia de ideas) para <b>plasmar todas las necesidades de los usuarios</b> de manera clara y concisa.
          <p>Continuamos trabajando el perfil del usuario objetivo <b>hasta definir los casos de uso</b>, entonces ordenamos los resultados mediante <em>"Card Sorting"</em> para estructurar la aplicación al completo.</p>
      </div>


      <div class="divided-1-2">
        <img class="unselectable | lazyload" data-src="/imagenes/desarrollo/usuario-objetivo.png" alt="Conceptualización de ideas en el desarrollo de aplicaciones">
      </div>
    </div>

    <!-- TITULO -->
    <div class="content">
      <div class="titulos | ">
        <h2 class="tituloParrafo">El proceso de desarrollo de software</h2>
        <h3>Los puntos de inflexión para ser un éxito</h3>
      </div>
    </div>


    <!-- PASO 3 -->
    <div class="content-big | divided ">
      <div class="divided-1-2">
        <h2>3. Diseño de Interfaz UI y Experiencia de Usuario UX con Material Design</h2>
        <p>Conseguimos que el diseño sea siempre un acierto gracias a las guías <em>Material design</em> design de Google.</p>
        <p>Con todas las funciones claras es hora de plasmar la idea en un diseño en la que ver como quedan los colores y las pantallas. En este momento es donde ponemos especial atención a los casos de uso y la experiencia de usuario con tal de realizar el diseño más acorde posible.</p>
      </div>


      <div class="divided-1-2">
        <img class="unselectable | lazyload" data-src="/imagenes/desarrollo/ui-original.png" alt="Diseño de interfaz UI">
      </div>
    </div>



    <!-- PASO 4 -->
    <div class="content-big | divided | reverse ">
      <div class="divided-1-2">
        <h2>4. Proceso de Desarrollo de Software</h2>
        <p>En Mobility Software Solutions como empresa dedicada al desarrollo de software utilizamos las tecnologías más punteras como son: <strong>Flutter para el desarrollo Android y iOS</strong>, Firebase para notificaciones y tanto Laravel como Vue.js para los desarrollos en servidor y web respectivamente.</p>
        <p>Durante el desarrollo <strong>aplicamos metodologías ágiles (principalmente Scrum Master, Lean o Kanban)</strong> para asegurar los tiempos de entrega. También nos permite entregar aplicaciones sin bugs ya que probamos  continuamente los programas durante su fabricación.</p>
      </div>


      <div class="divided-1-2">
        <img class="unselectable | lazyload" data-src="/imagenes/desarrollo/aplicaciones.png" alt="Processo de desarrollo de software">
      </div>
    </div>



    <!-- PASO 5 -->
    <div class="content-big | divided ">
      <div class="divided-1-2">
        <h2>5. Testing en entorno real, publicación y seguimiento</h2>
        <p>Llega el día señalado y publicamos el proyecto tanto en web como en las <em>App Stores</em>, ¿ahora qué?</p>
        <p>Nuestra amplia garantía nos permite encargarnos de la asistencia a tus usuarios. Puedes estar tranquilo al contar con nosotros a tu lado ya que <strong>nos responsabilizamos del apartado técnico para que te enfoques en lo verdaderamente importante</strong>: hacer crecer tu software.</p>
        <p>Orgullosos de nuestros datos, <b>resolvemos el 100% de las incidencias en menos de 48 horas</b>.</p>
        <p>¿Necesitas mantenimiento adicional? También podemos configurar y mantener tu servidor e incluso facilitarte <strong>servicios de <em>programación outsourcing</em> para que nuestros programadores seniors estén a tu completa disposición.</strong></p>
      </div>


      <div class="divided-1-2">
        <img class="unselectable | lazyload" data-src="/imagenes/desarrollo/aplicacion.png" alt="Testing y publicación de una Aplicación">
      </div>
    </div>


  </section>










  <section>
    <div class="content-big | divided">
      <div class="divided-1-1">
        <h3 class="center | titleBigger | top10">Somos todo lo que necesitas</h3>
        <p>Nos complace comunicarte que ofrecemos el <strong>servicio más completo de entre todas las empresas de desarrollo de apps, webs y software</strong>. El 70% de nuestros clientes son emprendedores y como entendemos a la perfección sus necesidades hemos creado un <b>plan de apoyo total al emprendedor</b> que seguro será de tu interés.
        <p>En Mobility Software Solutions trabajamos con los mejores expertos de cada campo. Nuestra red de <em>partners</em> especializados nos permiten apoyarte desde el primer momento tanto si necesitas constituir una empresa, crear un plan de negocio, lanzamiento o marketing digital como asesoría jurídica o económica.</p>
        <div class="contieneServicios">
          <div class="servicio">
            <div class="imagenServicio">
              <img class="lazyload" data-src="/imagenes/clientes/zincobs.png" alt="Zincobs" title="Zincobs logo">
            </div>
            <div class="contieneServiciosInd">
              <h4>Asesoría económica</h4>
              <ul>
                <li>Administración de empresas</li>
                <li>Contabilidad</li>
                <li>Auditoría</li>
              </ul>
              <h4>Asesoría jurídica</h4>

              <ul>
                <li>Laboral</li>
                <li>Fiscal</li>
                <li>Administrativo</li>
                <li>Mercantil</li>
                <li>GDPR</li>
              </ul>

            </div>
          </div>

          <div class="servicio">
            <div class="imagenServicio">
              <img  class="lazyload" data-src="/imagenes/clientes/aftermarketing.png" alt="AfterMarketing" title="Aftermarketing logo">
            </div>
            <div class="contieneServiciosInd">
              <h4>Marketing</h4>
              <ul>
                <li>SEO</li>
                <li>ASO</li>
                <li>Gestión de eventos</li>
                <li>Innovación tecnológica</li>
                <li>Relaciones laborales</li>
                <li>Generación de leads</li>
                <li>Social Media Marketing</li>
                <li>Community Manager</li>
              </ul>
            </div>
          </div>



          <div class="servicio">
            <div class="imagenServicio">
              <img alt="Ionos Servidores" class="ionosservice | lazyload" data-src="data:image/png;base64,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">
            </div>
            <div class="contieneServiciosInd">
              <h4>Telecomunicaciones</h4>
              <ul>
                <li>Despliegue de servidores</li>
                <li>Copias de seguridad</li>
                <li>Certificados SSL</li>
                <li>Dominios y correos</li>
                <li>Mantenimiento contínuo 24/7</li>
              </ul>


            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section  id="trust_us" class="topped">
    <h2 class="content">Nuestros clientes nos avalan:</h2>
    <br>
    <div class="contieneClientela">
      <div class="content-big | contieneClientes">
        <div class="contiene_trust">
          <img class="lazyload" data-src="/imagenes/clientes/ajuntament_barcelona.png" alt="Ayuntamiento de Barcelona Open Data" title="Ayuntamiento de Barcelona logo">
        </div>
        <div class="contiene_trust">
          <img class="lazyload" data-src="/imagenes/clientes/zincobs.png" alt="Zincobs" title="Zincobs logo">
        </div>
        <div class="contiene_trust">
          <img class="lazyload" data-src="/imagenes/clientes/aftermarketing.png" alt="AfterMarketing" title="Aftermarketing logo">
        </div>
        <div class="contiene_trust">
          <img class="lazyload" data-src="/imagenes/clientes/barcelona_open_data.png" alt="Barcelona open data logo">
        </div>
        <div class="contiene_trust">
          <img class="lazyload" data-src="/imagenes/clientes/collblanc_icono.png" alt="Collblanc app" title="Collblanc app logo">
        </div>
      </div>
    </div>
  </section>


<section class="presupuestoAll | topped" id="presupuestar">
  <div class="coniteneimg-form ">
    <img data-src="/logos/mobisoft-logo.png" class="lazyload" alt="Mobility Software Solutions">
  </div>

  <div class="contieneFormulario |" >
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
        <form onsubmit="return validateForm(2)" name="presupuesto2" action="{{url('presupuesto')}}" method="post">
          @csrf
          <h3 class="title-presu">¿Quieres empezar un proyecto?</h3>
          <p class="desc-form">Apostamos por la transparencia y la honestidad,si buscas un equipo de confianza estás en el lugar correcto. Nos adaptamos al covid19 con MEJORES PRECIOS para los emprendedores y <br> <span>PRESUPUESTO GRATUITO</span>.</p>
          <div class="inputs-forms-divided">
            <div class="form-input">
              <label for="name2">Nombre*</label>
              <input id="name2" type="text" name="name">
            </div>
            <div class="form-input">
              <label for="email2">Email*</label>
              <input id="email2" type="email" name="email" value="">
            </div>
            <div class="form-input">
              <label for="phone2">Teléfono*</label>
              <input id="phone2" type="tel" name="phone" value="">
            </div>
          </div>
          <div class="form-input">
            <label  for="about2">Breve descripción de tu proyecto</label>
            <input id="about2" type="text" name="about" value="">
          </div>


          <div class="contienecheckandbutton">
            <div class="checkbox">
              <label class="container-check">Aceptar política <a rel="nofollow" href="/legal/privacidad ">de privacidad</a>
                <input name="privacidad" type="checkbox" >
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
  </div>
</section>















@endsection
