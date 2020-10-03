</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Configuración | Dashboard</title>
        
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
                                <h1>Configuración</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="analytics-content">
                        <div class="loyalty-content">
                            <h1>Configuración de la cuenta</h1>
                            <div class="prize-body">
                                <h2>Información de la cuenta</h2>
                                <form id="settingsDashboard" method="POST">
	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <h1>Nombre de comercial</h1>
	                                        <input type="text" name="nombre" id="nombre" value=" ">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Página web</h1>
	                                        <input type="text" name="website" id="website" value=" ">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Correo electrónico</h1>
	                                        <input type="tel" name="correo" id="correo" placeholder=" " readonly>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Nombre del contacto</h1>
	                                        <input type="text" name="nombre_contacto" id="nombre_contacto" value="">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Teléfono del contacto</h1>
	                                        <input type="tel" name="tel_contacto" id="tel_contacto" value=" ">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Puesto del contacto</h1>
	                                        <input type="text" name="puesto_contacto" id="puesto_contacto" value=" ">
	                                    </div>
	                                </div>
	                                <h2 class="company-comercial-information">Información comercial de la empresa</h2>
	                                <p class="information-detail-text">*La siguiente información será utilizada por la administración de Frenzy, S.A. para fines de facturación y no será divulgada por ningún motivo.</p>
	                                <div class="row">
	                                    <div class="col-md-4">
	                                        <h1>NIT</h1>
	                                        <input type="number" name="nit" id="nit" value=" >">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Razón social</h1>
	                                        <input type="text" name="r_social" id="r_social" value=" ">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <h1>Dirección física</h1>
	                                        <input type="text" name="direccion" id="direccion" value=" >">
	                                    </div>
	                                </div>
	                                
			                        <div class="btn-save">
			                            <button class="btn-save-prize" id="saveSettingsDash">Guardar</button>
			                        </div>
	                        	</form>
                            </div>
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
    $('#configuracion').addClass('active-dashboard');
</script>
</body>
</html>

