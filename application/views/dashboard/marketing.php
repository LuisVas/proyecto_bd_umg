</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Marketing | Dashboard</title>
        
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
                                <h1>Email marketing</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="analytics-content">
                        <div class="loyalty-content">
                            <h1>Envío de email marketing</h1>
                            <div class="prize-body">
                                <h2>Usuarios</h2>
                                <form id="sendMarketing" method="POST">
	                                <div class="row">
	                                    <div class="col-md-12">
	                                        <h1>Enviar a:</h1>
	                                        <select id="recipients" name="recipients" required>
	                                        	<option value="0" disabled>Selecciona una opción</option>
	                                        	<option value="all">Todos</option>
	                                        </select>
	                                    </div>
	                                    <div class="col-md-12">
	                                        <h1>Asunto del correo</h1>
	                                        <input type="text" name="subject" id="subject" placeholder="Ej: ¡Promoción del mes!" required>
	                                    </div>
	                                    <div class="col-md-12">
	                                        <h1>Mensaje</h1>
	                                        <textarea name="body" id="message" required></textarea>
	                                    </div>
	                                    <div class="col-md-12">
	                                        <h1>Url de la promoción</h1>
	                                        <input type="text" name="cta" id="cta" placeholder="Inserta la url de tu promoción, ej: https://meykoclub.com">
	                                    </div>
	                                    <div class="col-md-12">
		                                <h2>Adjuntar imagen</h2>
		                                <div class="prize-body">
		                                    <div class="row">
		                                        <div class="col-md-3">
		                                            <div class="prize-img">
		                                                <img class="picture" id="awardPicPrev" src="<?php echo base_url() ?>images/uploadimage.png">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-3">
		                                            <div class="upload-logo">
		                                                <input type="file" id="awardPic" name="photoAward">
		                                            </div>
		                                        </div>
		                                    </div>
	                                    </div>
	                                </div>
			                        <div class="btn-save">
			                            <button class="btn-save-prize" id="sendEmailMarketing">Enviar</button>
			                        </div>
	                        	</div>
                            </form>
                        </div>
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
    $('#marketing').addClass('active-dashboard');
</script>
</body>
</html>

