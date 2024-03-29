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
      <h3 class="form-title | color-verde">Escápate de lo ordinario  <span class="color-blanco">con <strong>Mobility Software Solutions</strong></span></h3>
      <form onsubmit="return validateForm()" name="presupuesto1" action="{{url('presupuesto')}}" method="post">
        @csrf
        <div class="inputs-forms-divided">
          <div class="form-input">
            <label for="name">Nombre*</label>
            <input  type="text" id="name" name="name">
          </div>
          <div class="form-input">
            <label for="email">Email*</label>
            <input  type="email" id="email" name="email" value="">
          </div>
          <div class="form-input">
            <label for="phone">Teléfono*</label>
            <input type="tel" id="phone" name="phone" value="">
          </div>
        </div>
        <div class="form-input">
          <label for="about">Breve descripción de tu proyecto</label>
          <input  type="text" id="about" name="about" value="">
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
  </div>
</section>
