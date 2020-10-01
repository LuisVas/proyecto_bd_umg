</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Reestablecer contraseña | Dashboard</title>
        

        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>   
        <script src="../js/bootstrap.js"></script>
        <script src="../js/alertify.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/functions.js"></script>
        <script src="../js/sessiondashboard.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
        <link rel="stylesheet" type="text/css" href="../css/alertify.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> 


</head>
  
<body>

<section class="header-menu">
  <?php include("header-login.php");?>
</section>
<section class="login-dashboard">
    <div class="container-in">
        <div class="row">
            <div class="col-md-7">
                <div class="asset-login">
                    <img src="../images/asset-register-2.png">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-login form-restore-password">
                    <h1>¿Olvidaste tu contraseña?</h1>
                    <p>Ingresa tu correo electrónico para ayudarte a reestablecer tu contraseña.</p>
                    <form class="form-login-body" autocomplete="off" id="emailForm" action="resetlink" method="POST">
                        <div class="form-login-email">
                            <div class="input-body-email">
                                <div class="input-container-login-email">
                                  <input id="loginEmailReset" autocomplete="off" type="email" name="correo" placeholder="Ingresa tu correo electrónico" required>
                                    <label for="email" class="label-name">
                                        <img src="../images/correo.png"><span class="content-name">Correo electrónico</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="btns-interactive">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-login">
                                        <button  type="submit" id="sendPassword" name="submit" value="Enviar">Enviar</button>
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

