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
							<li><a href="index.html"><i class="icon icon-home"></i></a></li>
							<li>/<span>Inicio de sesión</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row row-eq-height">
							<div class="col-sm-6">
								<div class="form-card">
									<h4>Clientes nuevos</h4>
									<p>Al crear una cuenta con nuestra tienda, podrás tener un registro de las compras que has realizado.</p>
									<div><a href="<?php echo base_url()?>register" class="btn btn-lg"><i class="icon icon-user"></i><span>Crear cuenta</span></a></div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-card">
									<h4>Usuarios registrados</h4>
									<p>Si ya tienes una cuenta por favor inicia sesión.</p>
									<form class="account-create" action="#">
										<label>E-mail<span class="required">*</span></label>
										<input type="text" class="form-control input-lg">
										<label>Password<span class="required">*</span></label>
										<input type="password" class="form-control input-lg">
										<div>
											<button class="btn btn-lg">Iniciar sesión</button><span class="required-text">*Campos requeridos</span></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			
			<?php include("footer.php"); ?>
			<!-- /Footer -->
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


</body>

</html>