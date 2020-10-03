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
			<!-- /Header -->
			<!-- Sidebar -->
			<div class="sidebar-wrapper">
				<div class="sidebar-top"><a href="#" class="slidepanel-toggle"><i class="icon icon-left-arrow-circular"></i></a></div>
				<ul class="sidebar-nav">
					<li> <a href="index.html">HOME</a> </li>
					<li> <a href="gallery.html">GALLERY</a> </li>
					<li> <a href="blog.html">BLOG</a> </li>
					<li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
					<li> <a href="faq.html">FAQ</a> </li>
					<li> <a href="contact.html">CONTACT</a> </li>
				</ul>
				<div class="sidebar-bot">
					<div class="share-button toTop">
						<span class="toggle"></span>
						<ul class="social-list">
							<li>
								<a href="#" class="icon icon-google google"></a>
							</li>
							<li>
								<a href="#" class="icon icon-fancy fancy"></a>
							</li>
							<li>
								<a href="#" class="icon icon-pinterest pinterest"></a>
							</li>
							<li>
								<a href="#" class="icon icon-twitter-logo twitter"></a>
							</li>
							<li>
								<a href="#" class="icon icon-facebook-logo facebook"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Sidebar -->
			<!-- Page Content -->
			<main class="page-main">
				<div class="block">
					<div class="container">
						<ul class="breadcrumbs">
							<li><a href="index.html"><i class="icon icon-home"></i></a></li>
							<li>/<span>Contact</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="row">
							<div class="col-sm-5">
								<div class="text-wrapper">
									<h2>Place for nice title</h2>
									<div class="address-block">
										<h3>ADDRESS 1</h3>
										<ul class="simple-list">
											<li><i class="icon icon-location-pin"></i>Adress: 8901 Marmora Road, Glasgow D04 64 GR, New York</li>
											<li><i class="icon icon-phone"></i>Phone: 9823xxx</li>
											<li><i class="icon icon-phone"></i>Fax: 123456789xxxx</li>
											<li><i class="icon icon-close-envelope"></i>Email: <a href="mailto:support@seiko.com">Seico@example.com</a></li>
										</ul>
									</div>
									<div class="address-block last">
										<h3>ADDRESS 2</h3>
										<ul class="simple-list">
											<li><i class="icon icon-location-pin"></i>Adress: 5487 Capers Road, Glasgow D43 66 GR, Boston</li>
											<li><i class="icon icon-phone"></i>Phone: 9823xxx</li>
											<li><i class="icon icon-phone"></i>Fax: 123456789xxxx</li>
											<li><i class="icon icon-close-envelope"></i>Email: <a href="mailto:support@seiko.com">Seico@example.com</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="text-wrapper">
									<h2>Contact Information</h2>
									<p id="contactFormSuccess">Your email was send successfully!</p>
									<p id="contactFormError">Error, try to submit this form again.</p>
									<form id="contactform" class="contact-form white" name="contactform" method="post">
										<label>Name<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="name">
										<label>E-mail<span class="required">*</span></label>
										<input type="text" class="form-control input-lg" name="email">
										<label>Comment<span class="required">*</span></label>
										<textarea class="form-control input-lg" name="message"></textarea>
										<div>
											<button class="btn btn-lg" id="submit">Submit</button>
										</div>
										<div class="required-text">* Required Fields</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block fullwidth">
					<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSK_nLPUyr7NGihR1MkH5z1COHYFI9SKs"></script>
					<script type="text/javascript">
						// When the window has finished loading create our google map below
						google.maps.event.addDomListener(window, 'load', init);

						function init() {
							// Basic options for a simple Google Map
							// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
							var mapOptions = {
								zoom: 14,
								scrollwheel: false,
								center: new google.maps.LatLng(64.1309896, -21.8393331, 13.75), // Seiko

								// How you would like to style the map. 
								// This is where you would paste any style found on Snazzy Maps.
								styles: [{
									"featureType": "administrative",
									"elementType": "labels.text.fill",
									"stylers": [{
										"color": "#444444"
									}]
								}, {
									"featureType": "landscape",
									"elementType": "all",
									"stylers": [{
										"color": "#f2f2f2"
									}]
								}, {
									"featureType": "poi",
									"elementType": "all",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "road",
									"elementType": "all",
									"stylers": [{
										"saturation": -100
									}, {
										"lightness": 45
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "all",
									"stylers": [{
										"visibility": "simplified"
									}]
								}, {
									"featureType": "road.highway",
									"elementType": "geometry.fill",
									"stylers": [{
										"color": "#ffffff"
									}]
								}, {
									"featureType": "road.arterial",
									"elementType": "labels.icon",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "transit",
									"elementType": "all",
									"stylers": [{
										"visibility": "off"
									}]
								}, {
									"featureType": "water",
									"elementType": "all",
									"stylers": [{
										"color": "#dde6e8"
									}, {
										"visibility": "on"
									}]
								}]
							};

							// Get the HTML DOM element that will contain your map 
							// We are using a div with id="map" seen below in the <body>
							var mapElement = document.getElementById('googleMap');

							// Create the Google Map using our element and options defined above
							var map = new google.maps.Map(mapElement, mapOptions);

							// Let's also add a marker while we're at it
							var marker = new google.maps.Marker({
								position: new google.maps.LatLng(64.127182, -21.817184),
								map: map,
								title: 'Seiko'
							});
						}
					</script>
					<!-- The element that will contain our Google Map. This is used in both the Javascript and CSS above. -->
					<div id="googleMap" class="google-map"></div>
				</div>
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			<?php include("footer.php"); ?>
			<!-- /Footer -->
		</div>
		<!-- Page Content -->
	</div>
	<!-- ProductStack -->
	<div class="productStack disable hide_on_scroll"> <a href="#" class="toggleStack"><i class="icon icon-cart"></i> (6) items</a>
		<div class="productstack-content">
			<div class="products-list-wrapper">
				<ul class="products-list">
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-10.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a href="#" class="action edit" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-11.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-12.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-13.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-14.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
					<li>
						<a href="product.html" title="Product Name Long Name"><img class="product-image-photo" src="images/products/product-15.jpg" alt=""></a> <span class="item-qty">3</span>
						<div class="actions"> <a class="action edit" href="#" title="Edit item"><i class="icon icon-pencil"></i></a> <a class="action delete" href="#" title="Delete item"><i class="icon icon-trash-alt"></i></a>
							<div class="edit-qty">
								<input type="number" value="3">
								<button type="button" class="btn">Apply</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="action-cart">
				<button type="button" class="btn" title="Checkout"> <span>Checkout</span> </button>
				<button type="button" class="btn" title="Go to Cart"> <span>Go to Cart</span> </button>
			</div>
			<div class="total-cart">
				<div class="items-total">Items <span class="count">6</span></div>
				<div class="subtotal">Subtotal <span class="price">2.150</span></div>
			</div>
		</div>
	</div>
	<!-- /ProductStack -->

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
	<!-- jQuery form validation -->
	<script src="js/vendor/form/jquery.form.js"></script>
	<script src="js/vendor/form/jquery.validate.min.js"></script>
	<script>
		// Contact page form
		$(function () {
			$('#contactform').validate({
				rules: {
					name: {
						required: true,
						minlength: 3
					},
					message: {
						required: true,
						minlength: 15
					},
					email: {
						required: true,
						email: true
					}

				},
				messages: {
					name: {
						required: "Please enter your name",
						minlength: "Your name must consist of at least 3 characters"
					},
					message: {
						required: "Please enter your message",
						minlength: "Your message must consist of at least 15 characters"
					},
					email: {
						required: "Please enter your email"
					}
				},
				submitHandler: function (form) {
					$(form).ajaxSubmit({
						type: "POST",
						data: $(form).serialize(),
						url: "contact.php",
						success: function () {
							$('#contactFormSuccess').fadeIn();
							$('#contactFormError').fadeOut();
							$('#contactform').trigger('reset');
						},
						error: function () {
							$('#contactFormSuccess').fadeOut();
							$('#contactFormError').fadeIn();
						}
					});
				}
			});
		});
	</script>
	</div>
</body>

</html>