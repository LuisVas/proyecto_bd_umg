</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Reestablecer contraseña | Dashboard</title>
        

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
                    <img src="images/asset-login.png">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-login form-restore-password"> 
                    <h1>¡Cambia tu contraseña!</h1>
                    <p>Ingresa la nueva contraseña que utilizarás para ingresar al tu sistema de lealtad.</p>
                    <form class="form-login-body" autocomplete="off" id="resetPassForm" action="validate" method="POST">

                        <input type="hidden" id="id_usuario" value="<?= $user->id_usuario; ?>">

                        <div class="form-login-email">
                            <div class="input-body-email">
                                <div class="input-container-login-email">
                                  <input id="ResetPassword" autocomplete="off" type="password" name="password" placeholder="Ingresa tu nueva contraseña" required>
                                    <label for="password" class="label-name">
                                        <img src="images/lock.png"><span class="content-name">Contraseña nueva</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="btns-interactive">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-login">
                                        <button id="resetPass" type="submit" value="resetpass">Reiniciar contraseña</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
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

