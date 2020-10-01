</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Login | Dashboard</title>
        

        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script> 
        <script src="js/bootstrap.js"></script>
        <script src="js/alertify.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/session.js"></script>
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="css/alertify.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> </head>
  
<body>

<section class="header-menu">
  <?php include("header-login.php");?>
</section>
<section class="login-dashboard">
    <div class="container-in">
        <div class="row">
            <div class="col-md-7">
                <div class="asset-login">
                    <img src="images/asset-register-2.png">
                </div>
            </div>
            <div class="col-md-5">
                <?php
                if ($verify){
                ?>
                <div class="form-login form-activate">
                    <h1>¡Cuenta verificada exitosamente!</h1>
                    <p>Inicia sesión para poder ingresar al programa de lealtad.</p>
                    <a href="login">Iniciar sesión</a>
                </div>

                <?php }else{ ?>

                <div class="form-login form-activate">
                    <h1>¡El código de registro no es válido o ya ha sido usado!</h1>
                    <p>Registra nuevamente tu cuenta o contacta al proveedor.</p>
                    <a href="register">Registrar cuenta</a>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="footer-menu">
  <?php include("footer-login.php");?>
</section>

<script>
  $('.trigger').on('click', function() {
  $(this).toggleClass('on');
  $('.menu').fadeToggle(200);
  });
</script>
<script>
  $('.dropdown-toggle').dropdown()
</script>
</body>
</html>

