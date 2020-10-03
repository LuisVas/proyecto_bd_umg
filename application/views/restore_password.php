</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Mey-ko Club - Reestablecer contraseña</title>
    
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
          <h1>¿Olvidaste tu</h1>
          <h1>contraseña?</h1>
          <div class="login">
            <form class="form-login-body" autocomplete="off" id="emailForm" action="resetlink" method="POST">
              <label>Correo electrónico</label>
              <input type="email" autocomplete="off" id="loginEmailReset" name="correo" required>   
              <button  type="submit" id="sendPassword" name="submit" value="Enviar">Enviar</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="carousel-example-generic" class="carousel slide coverhome1">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?php echo base_url()?>images/cover.jpg" alt="">
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

