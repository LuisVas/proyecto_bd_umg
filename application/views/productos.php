<!DOCTYPE html>
<html lang="es">

<head>
		<?php include("tags.php"); ?>
</head>

<body class="boxed">
	<!-- Loader -->
	<div id="loader-wrapper">
		<div class="cube-wrapper">
			<div class="cube-folding">
				<span class="leaf1"></span>
				<span class="leaf2"></span>
				<span class="leaf3"></span>
				<span class="leaf4"></span>
			</div>
		</div>
	</div>
	<!-- /Loader -->
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
							<li><a href="<?php echo base_url()?>"><i class="icon icon-home"></i></a></li>
							<li>/<span>TIENDA</span></li>
						</ul>
					</div>
				</div>
				<div class="container">
					<!-- Two columns -->
					<div class="row row-table">
						<!-- Left column -->
						<div class="col-md-3 filter-col fixed aside">
							<div class="filter-container">
								<div class="fstart"></div>
								<div class="fixed-wrapper">
									<div class="fixed-scroll">
										<div class="filter-col-header">
											<div class="title">Filtros</div>
											<a href="#" class="filter-col-toggle"></a>
										</div>
										<div class="filter-col-content">
											<div class="sidebar-block-top">
												<h2>Comprar por</h2>
												<ul class="selected-filters">
													<li><a href="#"><span>Ej...</span><span class="remove"><i class="icon icon-close"></i></span></a>
														<div class="bg-striped"></div>
													</li>
												</ul>
											</div>
											<div class="sidebar-block collapsed">
												<div class="block-title">
													<span>Men</span>
													<div class="toggle-arrow"></div>
												</div>
												<div class="block-content">
													<ul class="category-list">
														<li class="active"><a href="#" class="value">Dresses</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Jackets</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Trousers</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Jeans</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Jewellery</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Scarves & snoods</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Sunglasses</a>
															<a href="#" class="clear"></a>
														</li>
														<li><a href="#">Blouses & shirts</a>
															<a href="#" class="clear"></a>
														</li>
													</ul>
													<div class="bg-striped"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="fend"></div>
							</div>
						</div>
						<!-- /Left column -->
						<!-- Center column -->
						<div class="col-md-9 aside">
							<!-- Products Grid -->
							<div class="products-grid four-in-row product-variant-5">
								<!-- Product Item -->
								<div class="product-item large category1">
									<div class="product-item-inside">
										<div class="product-item-info">
											<!-- Product Photo -->
											<div class="product-item-photo"> 
												<!-- product main photo -->
												<!-- product inside carousel -->
												<div class="carousel-inside slide" data-ride="carousel">
													<div class="carousel-inner" role="listbox">
														<div class="item active">
															<a href="#"><img class="product-image-photo" src="images/products/product-20.jpg" alt=""></a>
														</div> 
													</div> 
												</div>
												<!-- /product inside carousel -->
												<a href="<?php base_url()?>quick-view" title="Quick View" class="quick-view-link quick-view-btn"> <i class="icon icon-eye"></i><span>Ver producto</span></a>
												<!-- /product main photo  -->
												 
											</div>
											<!-- /Product Photo -->
											<!-- Product Details -->
											<div class="product-item-details">
												<div class="product-item-name"> <a title="Lace back mini dress" href="product-single.php" class="product-item-link">Lace back mini dress</a> </div>
												<div class="product-item-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore</div>
												<div class="price-box"> <span class="price-container"> <span class="price-wrapper"><span class="price">$239.00</span> </span>
													</span>
												</div> 
												<button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Agregar a carrito</span> </button>
											</div>
											<!-- /Product Details -->
										</div>
									</div>
								</div>
								

							</div>
							<!-- /Products Grid -->
							<!-- Filter Row -->
							<div class="filter-row">
								<div class="row">
									<div class="col-xs-8 col-sm-7 col-lg-5 col-left">
										<div class="directions">
											<a href="#"><i class="icon icon-arrow-down"></i></a>
											<a href="#"><i class="icon icon-arrow-up"></i></a>
										</div>
									</div>
									<div class="col-sm-2 col-lg-2 hidden-xs">
										<div class="view-mode">
											<a href="#" class="grid-view"><i class="icon icon-th"></i></a>
											<a href="#" class="list-view"><i class="icon icon-th-list"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Filter Row -->
						</div>
						<!-- /Center column -->
					</div>
					<div class="ymax"></div>
					<!-- /Two columns -->
				</div>
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			
			<?php include("footer.php"); ?>
			<!-- /Footer -->
		</div>
		<!-- Page Content -->
	</div>
	 

	<!-- Modal Quick View -->
	<div class="modal quick-view zoom" id="quickView">
		<div class="modal-dialog">
			<div class="modalLoader-wrapper">
				<div class="modalLoader bg-striped"></div>
			</div>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">&#10006;</button>
			</div>
			<div class="modal-content">
				<iframe></iframe>
			</div>
		</div>
	</div>
	<!-- /Modal Quick View -->

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