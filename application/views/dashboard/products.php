</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Crear producto | Dashboard</title>
    
    <?php include ("tags.php");?>


 </head>
  
<body>
<div class="container-dash">
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
                                <h1>Premios</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <form id="iAwardProgram" >
                            <div class="loyalty-content">
                                <h1>Crear premio</h1>
                                <h2>Imagen del premio</h2>
                                <div class="prize-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="prize-img">
                                                <img class="picture" id="awardPicPrev" src="<?php echo base_url() ?>images/uploadimage.png">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="upload-logo">
                                                <input type="file" id="awardPic" name="photoAward">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Información del premio</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1>Nombre del premio</h1>
                                            <input type="text" name="nombre_premio" placeholder="Ej. Cintas para Glucómetro">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Valor en puntos</h1>
                                            <input type="number" name="valor_puntos" placeholder="Ej. 1500">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Valor en sellos</h1>
                                            <input type="number" name="valor_sellos" placeholder="Ej. 6">
                                        </div>
                                    </div>
                                    <h2>Descripción</h2>
                                    <textarea id="descTA" name="desc_premio"></textarea>
                                </div>
                            </div>
                            <div class="btn-save">
                                <button class="btn-save-prize" id="saveAward">Guardar</button>
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
    $('#premios').addClass('active-dashboard');
</script>
</body>
</html>

