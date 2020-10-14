</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="<?= base_url(); ?>js/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>js/session.js"></script>
    <title>Login | Dashboard</title>


 <?php include ("tags.php");?>

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
                    <img src="<?php echo base_url();?>images/asset-login.png">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-login">
                    <h1>¡Bienvenido de vuelta!</h1>
                    <p>Para poder iniciar sesión debes ingresar tu información de correo electrónico y contraseña.</p>
                    <form class="form-login-body" autocomplete="off" id="form_login">
                        <div class="form-login-email">
                            <div class="input-body-email">
                                <div class="input-container-login-email">
                                  <input id="loginEmail" autocomplete="off" type="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                                    <label for="email" class="label-name">
                                        <span class="content-name">Correo electrónico</span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-body-password">
                                <div class="input-container-login-password">
                                  <input id="loginPassword" autocomplete="off" type="password" name="password" placeholder="Ingresa tu contraseña" required>
                                    <label for="password" class="label-password">
                                        <span class="content-password">Password</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="reset_password">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="reset_question">
                                        <p>¿Tienes problemas para iniciar?</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reset_btn">
                                        <p><a href="dashboard/restore_password">Reiniciar mi contraseña</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btns-interactive">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-login">
                                        <button type="submit" value="Iniciar">Iniciar sesión</button>
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
