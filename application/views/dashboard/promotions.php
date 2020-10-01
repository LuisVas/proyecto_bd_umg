</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Promociones y cupones | Dashboard</title>
        

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">   
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" type="text/css" href="css/alertify.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/alertify.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/services.js"></script>
 </head>
  
<body>
<div class="container-in">
    <section class="dashboard-body">
        <div class="row">
            <div class="col-md-3">
                <?php include("sidebar.php");?>
            </div>
            <div class="col-md-9">
                <div class="dash-content-body">
                    <div class="head-dash">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Servicios</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <form id="promotionProgram">
                            <div class="loyalty-content">
                                <h1>Promociones y cupones</h1>
                                <h2>Imagen de la promoción</h2>
                                <div class="prize-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="prize-img">
                                                <img class="picture" id="promoPicPrev" src="images/uploadimage.png">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="upload-logo">
                                                <input type="file" id="promoPic" name="photoPromo">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Información de la promoción</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1>Nombre del premio</h1>
                                            <input type="text" name="nombre_premio" placeholder="Ej. iPad Pro">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Fecha de inicio</h1>
                                            <input type="date" name="fecha_inicio" placeholder="dd/aa/mm">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Fecha de finalización</h1>
                                            <input type="date" name="fecha_fin" placeholder="dd/aa/mm">
                                        </div>
                                    </div>
                                    <h2>Descripción</h2>
                                    <textarea id="descTA" name="descripcion"></textarea>
                                    <h2>Políticas de canje</h2>
                                    <textarea id="polTA" name="politicas"></textarea>
                                </div>
                            </div>
                            <div class="btn-save">
                                <button class="btn-save-prize" id="savePromotion">Guardar</button>
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
</div>

<script>
    $('#services').addClass('active-dashboard');
    $('#promociones').addClass('active-dashboard');
</script>
</body>
</html>

