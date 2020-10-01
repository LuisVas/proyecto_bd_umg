</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Mey-ko Club - Programa de lealtad</title>
    
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>   
        <script src="js/bootstrap.js"></script>
        <script src="js/alertify.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/session.js"></script>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="css/alertify.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> </head>
 </head>
  
<body>

<section class="header-menu header-index">
  <?php include("header.php");?>
</section>
<section class="coverindex" id="inicio">
  <div class="overlaycover">
    <div class="container-in">
      <div class="form-login">
        <div class="back-login">
          <h1>¡Bienvenido a nuestra</h1>
          <h1>plataforma de lealtad!</h1>
          <div class="login">
            <form id="register-meyko">
              <label>Nombre</label>
              <input type="text" name="nombre" required>
              <label>No. de identidad</label>
              <input type="number" name="identificacion" required>
              <label>Correo electrónico</label>
              <input type="email" name="correo">
              <label>Contraseña</label>
              <input type="password" name="password" required>
              <label>¿Eres?</label>
              <select id="userType" name="id_tipo_user" required>
                <option value="1" name="noselect" selected disabled>Selecciona qué tipo de usuario eres</option>
                <option value="2" name="medico">Médico</option>
                <option value="3" name="paciente">Paciente</option>
                <option value="4" name="paciente_diabetico">Paciente Diabético</option>
              </select>
              <button type="submit" id="register_button" name="submit">Registrarme</button>
            </form>
            <div class="helper">
              <div class="row">
                <div class="col-md-12">
                  <p>¿Ya tienes cuenta?<a href="<?php base_url()?>login">Iniciar sesión</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="carousel-example-generic" class="carousel slide coverhome1">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/cover.jpg" alt="">
        </div>
    </div>
  </div>  
</section>
<section class="beneficios">
  <div class="container-in">
    <h1>Beneficios de nuestra plataforma</h1>
    <p>Forma parte de nuestro equipo y se parte de nuestro sistema de puntos y premios para recibir beneficios únicos</p>
    <div class="tags">
      <div class="row">
        <div class="col-md-4">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
          <style type="text/css">
            .st0{clip-path:url(#SVGID_2_);fill:#0D4272;}
            .st1{clip-path:url(#SVGID_4_);fill:#0D4272;}
            .st2{clip-path:url(#SVGID_6_);fill:#0D4272;}
          </style>
          <g>
            <g>
              <defs>
                <rect id="SVGID_1_" x="109.5" y="12.2" width="194.1" height="194.1"/>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
              </clipPath>
              <path class="st0" d="M265,206.4c-0.8,0-1.7-0.2-2.5-0.5l-56-24.9l-56,24.9c-2.1,0.9-4.5,0.6-6.3-0.8c-1.8-1.4-2.6-3.7-2.2-5.9
                l12.4-61.9l-43.2-43.3c-1.6-1.6-2.2-3.9-1.5-6.1c0.6-2.1,2.4-3.8,4.6-4.2l61.9-12.4L201,15.5c2-4.4,9.1-4.4,11.1,0l24.7,55.7
                l61.9,12.4c2.2,0.4,4,2.1,4.6,4.2c0.6,2.1,0.1,4.5-1.5,6.1l-43.2,43.3l12.4,61.9c0.4,2.2-0.4,4.5-2.2,5.9
                C267.7,205.9,266.4,206.4,265,206.4L265,206.4z M206.5,168.2c0.8,0,1.7,0.2,2.5,0.5l47.8,21.3l-10.7-53.6c-0.4-2,0.2-4.1,1.7-5.5
                l37.5-37.5l-53.9-10.8c-1.9-0.4-3.6-1.7-4.4-3.5L206.5,33l-20.5,46.1c-0.8,1.8-2.4,3.1-4.4,3.5l-53.9,10.8l37.5,37.5
                c1.4,1.4,2.1,3.5,1.7,5.5L156.3,190l47.8-21.3C204.9,168.3,205.7,168.2,206.5,168.2L206.5,168.2z M206.5,168.2"/>
            </g>
          </g>
          <g>
            <g>
              <defs>
                <rect id="SVGID_3_" x="16.1" y="97.8" width="111.6" height="111.6"/>
              </defs>
              <clipPath id="SVGID_4_">
                <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
              </clipPath>
              <path class="st1" d="M105.5,209.4c-0.5,0-1-0.1-1.4-0.3l-32.2-14.3l-32.2,14.3c-1.2,0.5-2.6,0.3-3.6-0.5c-1-0.8-1.5-2.1-1.2-3.4
                l7.1-35.6l-24.8-24.9c-0.9-0.9-1.2-2.2-0.9-3.5c0.4-1.2,1.4-2.2,2.7-2.4l35.6-7.1l14.2-32c1.1-2.5,5.2-2.5,6.4,0l14.2,32l35.6,7.1
                c1.3,0.3,2.3,1.2,2.7,2.4c0.4,1.2,0,2.6-0.9,3.5l-24.8,24.9l7.1,35.6c0.3,1.3-0.2,2.6-1.2,3.4C107,209.1,106.3,209.4,105.5,209.4
                L105.5,209.4z M71.9,187.4c0.5,0,1,0.1,1.4,0.3l27.5,12.2l-6.1-30.8c-0.2-1.1,0.1-2.3,1-3.2l21.5-21.6l-31-6.2c-1.1-0.2-2-1-2.5-2
                l-11.8-26.5l-11.8,26.5c-0.5,1-1.4,1.8-2.5,2l-31,6.2L48.2,166c0.8,0.8,1.2,2,1,3.2L43,199.9l27.5-12.2
                C70.9,187.5,71.4,187.4,71.9,187.4L71.9,187.4z M71.9,187.4"/>
            </g>
          </g>
          <g>
            <g>
              <defs>
                <rect id="SVGID_5_" x="288.5" y="97.8" width="111.6" height="111.6"/>
              </defs>
              <clipPath id="SVGID_6_">
                <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
              </clipPath>
              <path class="st2" d="M377.9,209.4c-0.5,0-1-0.1-1.4-0.3l-32.2-14.3l-32.2,14.3c-1.2,0.5-2.6,0.3-3.6-0.5c-1-0.8-1.5-2.1-1.2-3.4
                l7.1-35.6l-24.8-24.9c-0.9-0.9-1.2-2.2-0.9-3.5c0.4-1.2,1.4-2.2,2.7-2.4l35.6-7.1l14.2-32c1.1-2.5,5.2-2.5,6.4,0l14.2,32l35.6,7.1
                c1.3,0.3,2.3,1.2,2.7,2.4c0.4,1.2,0,2.6-0.9,3.5l-24.8,24.9l7.1,35.6c0.3,1.3-0.2,2.6-1.2,3.4
                C379.5,209.1,378.7,209.4,377.9,209.4L377.9,209.4z M344.3,187.4c0.5,0,1,0.1,1.4,0.3l27.5,12.2l-6.1-30.8c-0.2-1.1,0.1-2.3,1-3.2
                l21.5-21.6l-31-6.2c-1.1-0.2-2-1-2.5-2l-11.8-26.5l-11.8,26.5c-0.5,1-1.4,1.8-2.5,2l-31,6.2l21.5,21.6c0.8,0.8,1.2,2,1,3.2
                l-6.1,30.8l27.5-12.2C343.3,187.5,343.8,187.4,344.3,187.4L344.3,187.4z M344.3,187.4"/>
            </g>
          </g>
          </svg>



          <h1>Sistema de puntos</h1>
          <p>Gana puntos y recibe beneficios por formar parte de nuestro programa</p>
        </div>
        <div class="col-md-4">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
          <style type="text/css">
            .st0{clip-path:url(#SVGID_2_);fill:#0E4578;}
          </style>
          <g>
            <g>
              <defs>
                <rect id="SVGID_1_" x="117" y="37.6" width="174.8" height="174.8"/>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
              </clipPath>
              <path class="st0" d="M277.2,78.3h-37c4.8-4.3,7.9-10.5,7.9-17.4c0-19.5-22.6-30.3-37.7-18.3c-1.3,1-1.5,2.8-0.5,4.1
                c1,1.3,2.8,1.5,4.1,0.5c11.4-9,28.3-0.9,28.3,13.7c0,9.2-7.2,16.8-16.3,17.4h-18.7V60.9c0-12.9-10.5-23.3-23.3-23.3
                c-12.9,0-23.3,10.5-23.3,23.3c0,6.9,3,13.2,7.9,17.4h-37c-8,0-14.6,6.5-14.6,14.6v15c0,7.3,5.4,13.3,12.4,14.4v75.5
                c0,8,6.5,14.6,14.6,14.6h120.9c8,0,14.6-6.5,14.6-14.6v-62.7c0-1.6-1.3-2.9-2.9-2.9c-1.6,0-2.9,1.3-2.9,2.9v62.7
                c0,4.8-3.9,8.7-8.7,8.7h-70.6v-84.1h20.4v73.6c0,1.6,1.3,2.9,2.9,2.9c1.6,0,2.9-1.3,2.9-2.9v-73.6h32.4c1.6,0,2.9-1.3,2.9-2.9
                c0-1.6-1.3-2.9-2.9-2.9h-19.3V84.2h43.7c4.8,0,8.7,3.9,8.7,8.7v15c0,4.8-3.9,8.7-8.7,8.7h-5.6c-1.6,0-2.9,1.3-2.9,2.9
                c0,1.6,1.3,2.9,2.9,2.9h5.6c8,0,14.6-6.5,14.6-14.6v-15C291.8,84.9,285.3,78.3,277.2,78.3L277.2,78.3z M166.5,60.9
                c0-9.6,7.8-17.5,17.5-17.5c9.6,0,17.5,7.8,17.5,17.5v17.4h-18.7C173.7,77.7,166.5,70.1,166.5,60.9L166.5,60.9z M188.4,206.6H144
                c-4.8,0-8.7-3.9-8.7-8.7v-75.4h53.2V206.6z M227.7,116.7h-96.1c-4.8,0-8.7-3.9-8.7-8.7v-15c0-4.8,3.9-8.7,8.7-8.7h43.7v23.3
                c0,1.6,1.3,2.9,2.9,2.9c1.6,0,2.9-1.3,2.9-2.9V84.2h46.6V116.7z M227.7,116.7"/>
            </g>
          </g>
          </svg>
          <h1>Premios y beneficios</h1>
          <p>Ten acceso a premios únicos y descuentos exclusivos</p>
        </div>
        <div class="col-md-4">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
          <style type="text/css">
            .st0{clip-path:url(#SVGID_2_);fill:#0E4578;}
          </style>
          <g>
            <g>
              <defs>
                <rect id="SVGID_1_" x="151.7" y="47.2" width="105.4" height="155.7"/>
              </defs>
              <clipPath id="SVGID_2_">
                <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
              </clipPath>
              <path class="st0" d="M256.9,184.9v15.3c0,1.4-1.2,2.6-2.6,2.6c-1.4,0-2.6-1.2-2.6-2.6v-15.3c0-11.9-9.7-21.6-21.6-21.6
                c-5.6,0-10.8-2.9-13.7-7.7c-0.7-1.2-0.4-2.8,0.9-3.6c1.2-0.7,2.8-0.4,3.6,0.9c2,3.3,5.5,5.2,9.3,5.2
                C245,158.1,256.9,170.1,256.9,184.9L256.9,184.9z M208.6,156.9c-5.4,1.2-10.9,0-15.3-3c0.7-1.7,1.2-3.4,1.4-5.3
                c22.2,6.5,44.5-10.2,44.5-33.3c0-22,0-21.7-0.1-22.6c-0.3-3.6-5.5-3.1-5.2,0.5c0.1,0.6,0,1.1,0,22c0,16.3-13.2,29.5-29.5,29.5
                s-29.5-13.2-29.5-29.5c0-5.8-0.1-10.4-0.1-13.8c-0.1-8.5,7.8-15,16.3-12.9c12,2.9,16.9,10.4,32.3,9.7c1.4-0.1,2.5-1.3,2.5-2.7
                c-0.1-1.4-1.3-2.5-2.7-2.5c-13.9,0.7-17.7-6.4-30.8-9.5c-11.8-2.8-22.8,6.2-22.7,18c0,2.8,0.1,5.8,0.1,9.5
                c-1.7-0.9-2.9-2.7-2.9-4.7c0-0.1,0-13.5,0-13.5c-0.1-5.9,0.7-20.7,11.3-30.8c11.8-11.4,30.3-11.4,44.6-6.4l-2.1,0.9
                c-2.5,1-2,4.7,0.7,5l4.6,0.5c8.8,0.9,16.5,5.5,21.5,12.6c-3.3,4-5,8.9-5,14.1v17.7c0,1.4,1.2,2.6,2.6,2.6s2.6-1.2,2.6-2.6V88.7
                c0-4.5,1.7-8.8,4.9-12c0.9-0.9,1-2.3,0.4-3.3c-5.2-8.3-12.9-13.6-21.7-15.8c1.4-1.2,1.1-3.5-0.5-4.3c-7.5-3.8-18.3-6.5-28.5-6.1
                c-25.9,1-41.1,20.3-40.5,45.7v13.4c0,5,3.5,9.1,8.1,10.3c0.5,13.2,8.4,24.6,19.8,30v0.7c0,6-4.8,10.8-10.8,10.8
                c-14.8,0-26.8,12-26.8,26.8v15.3c0,1.4,1.2,2.6,2.6,2.6c1.4,0,2.6-1.2,2.6-2.6v-15.3c0-11.9,9.7-21.6,21.6-21.6
                c4.4,0,8.6-1.8,11.7-5.1c5.5,3.8,12.5,5.3,19.3,3.8c1.4-0.3,2.3-1.7,2-3.1S210,156.6,208.6,156.9L208.6,156.9z M230.7,189.5h-7.8
                c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h7.8c1.4,0,2.6-1.2,2.6-2.6C233.3,190.7,232.1,189.5,230.7,189.5L230.7,189.5z
                 M230.7,189.5"/>
            </g>
          </g>
          </svg>

          <h1>Programa de referidos</h1>
          <p>Gana puntos por recomendar a alguien dentro de nuestra plataforma</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fifty">
  <div class="container-in">
    <div class="fifty-body">
      <div class="row">
        <div class="col-md-6">
          <img src="images/coverfifty.jpg">
        </div>
        <div class="col-md-6">
          <div class="content-fifty">
            <h1>"Mas de 50 años transformando vidas en Honduras."</h1>
            <p>Nuestra mision es comercializar y asesorar en el manejo de dispositivos medicos innovadores de calidad , ofreciendo servicios tecnicos especializados que contribuyen al bienestar de la salud de nuestros clientes y usuarios.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="marcas">
  <div class="container-in">
    <h1>Nuestras marcas</h1>
    <div class="marcas-body">
      <div class="row">
        <div class="col-md-6">
          <img src="images/Logo-medtronic.png">
        </div>
        <div class="col-md-6">
          <img src="images/Logo-health-care.png">
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    $('#index').addClass('active');
</script>
<section class="footer-menu">
  <?php include("footer.php");?>
</section>
 
</body>
</html>

