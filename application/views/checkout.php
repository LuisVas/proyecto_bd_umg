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
							<li>/<span>Checkout</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">

						<?php $user = get_user_by_id($this->session->userdata('user')->ID_USU);?>

						<div class="row">
							<div class="col-sm-6 col-md-9">
								<h2>Datos de envío</h2>
								<form class="white" id="form_checkout">
									<label>País<span class="required">*</span></label>
									<input type="text" name="NACIONALIDAD" class="form-control" value="<?= $user->NACIONALIDAD; ?>">
									<label>Dirección <span class="required">*</span></label>
									<input type="text" name="DIRECCION" class="form-control" value="<?= ($user->DIRECCION ?? ''); ?>">
									<label>Teléfono</label>
									<input type="number" name="TELEFONO" class="form-control" value="<?= ($user->TELEFONO ?? ''); ?>">
									<h2>Datos de pago</h2>
									<?php $tar = get_register_tars($user->ID_TAR);?>
									<label>Número de tarjeta<span class="required">*</span></label>
									<input type="number" name="NUMERO" class="form-control"	value="<?= ($tar->NUMERO ?? ''); ?>">
									<label>Vencimiento <span class="required">*</span></label>
									<input type="number" name="FECHA_VENCIMIENTO" class="form-control" value="<?= ($tar->FECHA_VENCIMIENTO ?? ''); ?>">
									<label>CVV</label>
									<input type="number" name="CVV" class="form-control" value="<?= ($tar->CVV ?? ''); ?>">
								</form>
							</div>
							<div class="col-md-3 total-wrapper">
								<table class="total-price">
									<!-- <tr>
										<td>Subtotal</td>
										<td>$241.00</td>
									</tr> -->
									<tr class="total">
										<td>Total</td>
										<td id="total"></td>
									</tr>
								</table>
								<div class="cart-action">
									<div>
										<button class="btn" id="payment">Proceder al pago</button>
									</div>
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
	<script src="js/functions.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#total').text(add_commas(convert_price(get_cart_total())));

			$('#payment').click(function(){

					var form = new FormData($('#form_checkout')[0]);
					form.append('list',JSON.stringify(get_cart_products()));

					$.ajax({
							url:base_url()+'payment',
							type:'POST',
							dataType:'JSON',
							data:form,
							cache:false,
							processData:false,
							contentType:false,

							success:function(data){

							},error:function(error){

							}
					});
			});
		});
	</script>

</body>

</html>
