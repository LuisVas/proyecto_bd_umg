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
                                <h1>Productos</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <form id="iAwardProgram" >
                            <div class="loyalty-content">
                                <h1>Crear producto</h1>
                                <h2>Imagen del producto</h2>
                                <div class="prize-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="prize-img">
                                                <img class="picture" id="awardPicPrev" src="<?php echo base_url() ?>images/uploadimage.png">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="upload-logo">
                                                <input type="file" id="awardPic" name="IMAGEN">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Información del producto</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1>Nombre</h1>
                                            <input type="text" name="NOMBRE" placeholder="Ej. Camisa Polo">
                                        </div>
                                        <div class="col-md-4">
                                            <h2>Descripción</h2>
                                            <textarea id="descTA" name="DESCRIPCION"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Proveedor</h1>
                                            <input type="text" name="PROVEEDOR" placeholder="Ej. Polo Ralf Lauren">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Precio en GTQ.</h1>
                                            <input type="number" min="0" name="PRECIO">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Existencias</h1>
                                            <input type="number" min="0" name="EXISTENCIA">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Categorías</h1>
                                            <input type="text" name="ID_CAT" placeholder="Ej. 1,2,3">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Subcategorías</h1>
                                            <input type="text" name="ID_SUBCAT" placeholder="Ej. 1,2,3">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Temporada</h1>
                                            <input type="number" name="ID_TEMP" placeholder="Ej. 1,2,3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-save">
                                <button class="btn-save-prize" id="saveProduct">Guardar</button>
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

