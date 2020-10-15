<!DOCTYPE html>
<html lang="es">

<head>
		<?php include("tags.php"); ?>
</head>

<body class="boxed bg-white">

	<div class="fixed-btns">
		<!-- Back To Top -->
		<a href="#" class="top-fixed-btn back-to-top"><i class="icon icon-arrow-up"></i></a>
		<!-- /Back To Top -->
	</div>
	<div id="wrapper">
		<!-- Page -->
		<div class="page-wrapper">
		<?php include("header.php"); ?>
			<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">
						<ul class="breadcrumbs">
							<li><a href="<?php echo base_url();?>"><i class="icon icon-home"></i></a></li>
							<li>/<span>Registro</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="form-card">
							<h3>Información personal</h3>
							<form id="userNew" enctype="multipart/form-data">
								<label>Nombre<span class="required">*</span></label>
								<input type="text" name="NOMBRE" class="form-control input-lg">
								<label>Apellido<span class="required">*</span></label>
								<input type="text" name="APELLIDO" class="form-control input-lg">
								<label>Edad<span class="required">*</span></label>
								<input type="number" name="EDAD" min="18" value="18" class="form-control input-lg">
								<label>Sexo<span class="required">*</span></label>
								<select name="SEXO" class="form-control">
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
									<option value="Prefiero no decirlo">Prefiero no decirlo</option>
								</select>
								<label>Código Postal<span class="required">*</span></label>
								<input type="text" name="CODIGO_POSTAL" class="form-control input-lg">
								<label>Nacionalidad<span class="required">*</span></label>
								<input type="text" name="NACIONALIDAD" class="form-control input-lg">
								<label>Correo<span class="required">*</span></label>
								<input type="email" name="EMAIL" class="form-control input-lg">
								<label>Password<span class="required">*</span></label>
								<input type="password" name="CONTRASENA" class="form-control input-lg">
								<div>
									<button class="btn btn-lg" type="submit">Crear cuenta</button>
									<span class="required-text">*Campos requeridos</span>
								</div>
							</form>
							<div class="back">o <a href="<?php echo base_url()?>">Regresa a la tienda y comprar como invitado <i class="icon icon-undo"></i></a></div>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
			<?php include("footer.php"); ?>
		</div>
		<!-- Page Content -->
	</div>
<!-- jQuery Scripts  -->
	<script src="js/vendor/jquery/jquery.js"></script>
	<script src="js/vendor/bootstrap/bootstrap.min.js"></script>
	<script src="js/vendor/swiper/swiper.min.js"></script>
	<script src="js/vendor/slick/slick.min.js"></script>
	<script src="js/vendor/parallax/parallax.js"></script>
	<script src="js/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="js/vendor/magnificpopup/dist/jquery.magnific-popup.js"></script>
	<script src="js/vendor/countdown/jquery.countdown.min.js"></script>
	<script src="js/vendor/nouislider/nouislider.min.js"></script>
	<script src="js/vendor/ez-plus/jquery.ez-plus.js"></script>
	<script src="js/vendor/tocca/tocca.min.js"></script>
	<script src="js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js"></script>
	<script src="js/vendor/scrollLock/jquery-scrollLock.min.js"></script>
	<script src="js/vendor/darktooltip/dist/jquery.darktooltip.js"></script>
	<script src="js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="js/vendor/instafeed/instafeed.min.js"></script>
	<script src="js/megamenu.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/functions.js"></script>

	<!-- <script type="text/javascript" src="<?//= base_url(); ?>js/functions.js"></script> -->

<script>
$(document).ready(function(){

	$('#userNew').submit(function(){

		var data = new FormData($('#userNew')[0]);

		$.ajax({
			url:base_url()+'add_register',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache:false,
			processData:false,
			contentType:false,

			success:function(data){
				if(data){
					alertify.alert('¡Urra!', '¡Te has registrado a la tienda con éxito!', function(){ window.location.href=base_url()+'login';});
					$('input[type="text"]').val('');
					$('input[type="number"]').val('');
					$('input[type="email"]').val('');
				}
			},error:function(error){
				alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
			}
		});

		return false;
	});
});


</script>


</body>

</html>
