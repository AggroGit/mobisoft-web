<nav class="borde-linear">
  <div class="hamb-menu" id="nav-icon3">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="icon">
    <a href="/">
      <img src="{{asset('logos/mobisoft-mini.png')}}" alt="Mobility Software Solutions">
    </a>
  </div>
  <div class="contact | neonhover">
    <a href="#">Contacta</a>
  </div>
</nav>

<script type="text/javascript">

  var open = false;
  var menu = document.getElementById('nav-icon3')
  menu.onclick = () => {
    if(open) {
      menu.classList.remove('open');
    }else {
      menu.classList.add('open');
    }
    open = !open;

  }
</script>
