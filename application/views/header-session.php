  <header>
    <div class="container-in">
      <div class="header_nav">
        <div class="row">
          <div class="col-md-3">
            <div class="left_menu">
              <div class="logo">
                <a href="<?php echo base_url()?>" class="logoindex"><img src="<?php echo base_url()?>images/logo.png" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="right_menu">
              <nav class="navbar navbar-expand-lg navbar-light header_desktop">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item" id="index">
                      <a class="nav-link" href="<?php echo base_url()?>" id="mySession">Inicio</a>
                    </li>
                    <li class="nav-item" id="index">
                      <a class="nav-link" href="<?php echo base_url()?>referral" id="referral">Programa de referidos</a>
                    </li>
                    <li class="nav-item" id="index">
                      <a class="nav-link" href="<?php echo base_url()?>profile" id="myUser">Mi perfil</a>
                    </li>
                    <li class="nav-item" id="index">
                      <a class="nav-link" href="<?php echo base_url()?>sign_out">Cerrar sesión</a>
                    </li>
                    
                  </ul>
                </div>
              </nav>    


            </div>
          </div>
        </div>
      </div>
    </div>






<script>
  $('.trigger').on('click', function() {
  $(this).toggleClass('on');
  $('.menu').fadeToggle(200);
  });
</script>
<script>
  $('.dropdown-toggle').dropdown()
</script>

  </header>

