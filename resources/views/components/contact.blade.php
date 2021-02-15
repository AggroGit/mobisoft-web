<section class="contieneFormulario | top10" >
  <div id="contacto" class="slideanim | content-big | agranda-en-pe" >
    <div class="lado-form">
      <h3>¿Necesitas ayuda con tu presupuesto ahora?</h3>
      <p>Disponibles de 9.00 a 19:00 horas de lunes a viernes para asesorarte gratuitamente sobre tu proyecto. Si lo prefieres también atendemos por Whats App.</p>
      <h3>¡Llámanos!</h3>
      <a class="contieneWhatsapp-form" rel="nofollow" href="tel:+34747410385">
        <x-svg.phone/>
        <span>+34 747 410 385</span>
      </a>
      <h3>¡También en whatsapp!</h3>
      <a class="contieneWhatsapp-form" target="_blank" rel="noopener" href="https://wa.me/34747410385?text=¡Hola!%20me%20interesa%20hacer%20una%20app">
        <x-svg.whatsapp/>
        <span>+34 747 410 385</span>
      </a>

  </div>
    <div class="formulario">
      <h3 class="form-title">Escápate de lo ordinario con <span class="color-lila">Mobility Software Solutions</span></h3>
      <form onsubmit="return validateForm()" name="presupuesto1" action="{{url('presupuesto')}}" method="post">
        @csrf
        <div class="inputs-forms-divided">
          <div class="form-input">
            <input placeholder="Nombre*" type="text" name="name">
          </div>
          <div class="form-input">
            <input placeholder="Email*" type="name  " name="email" value="">
          </div>
          <div class="form-input">
            <input placeholder="Teléfono*" type="phone" name="phone" value="">
          </div>
        </div>
        <div class="form-input">
          <input placeholder="Breve descripción de tu proyecto" type="text" name="about" value="">
        </div>

        <div class="contienecheckandbutton">
          <div class="checkbox">
            <label class="container-check">Aceptar política <a rel="nofollow" href="/legal/privacidad ">de privacidad</a>
              <input name="privacidad" type="checkbox" >
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="btn-form">
            <button class="boton-lila | lilaForm" type="submit" name="button">Sí. contactar</button>
          </div>
        </div>

      </form>
    </div>




</section>
