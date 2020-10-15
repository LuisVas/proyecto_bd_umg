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
							<li>/<span>Carrito de Compra</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="cart-table">
							<table class="table table-hover table-products">
								<thead>
									<th>
										Imagen
									</th>
									<th>
										Nombre
									</th>
									<th>
										Precio unitario
									</th>
									<th>
										Cantidad
									</th>
									<th>
										Subtotal
									</th>
									<th>
										<span class="hidden-sm hidden-xs">Remover</span>
									</th>
								</thead>
								<tbody id="list_products"></tbody>
							</table>


							<div class="table-footer">
								<button class="btn btn-alt">Continuar comprando</button>
								<button class="btn btn-alt pull-right" id="clean_cart"><i class="icon icon-bin"></i><span>Limpiar carrito</span></button>
								<button class="btn btn-alt pull-right" id="update_cart"><i class="icon icon-sync"></i><span>Actualizar</span></button>
							</div>
						</div>
						<div class="row">
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
										<a href="<?= base_url(); ?>checkout"><button class="btn">Proceder al pago</button></a>
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
	<script src="js/functions.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){


			function list(){
					var list_products = get_cart_products();
					var html = '';
					var total = 0;

					if(list_products.length > 0){
						for(var x in list_products){
							total += get_subtotal(list_products[x].price,list_products[x].qty);
							html += '<tr class="_tr" value="'+list_products[x].id+'">\
									<td class="photo">\
										<a href="#"><img src="'+list_products[x].img+'" alt=""></a>\
									</td>\
									<td class="name">\
										<a href="#">'+list_products[x].name+'</a>\
									</td>\
									<td class="price">\
										Q '+add_commas(convert_price(list_products[x].price))+'\
									</td>\
									<td class="qty qty-changer">\
										<fieldset>\
											<input type="button" value="&#8210;" class="decrease">\
											<input type="text" class="qty-input" value="'+list_products[x].qty+'" data-min="0" data-max="5">\
											<input type="button" value="+" class="increase">\
										</fieldset>\
									</td>\
									<td class="subtotal">\
										'+add_commas(convert_price(get_subtotal(list_products[x].price,list_products[x].qty)))+'\
									</td>\
									<td class="_remove" value="'+list_products[x].id+'">\
										<a href="#" class="icon icon-close-2"></a>\
									</td>\
								</tr>\
							';
						}
					}else{
						html += '<tr><td colspan="6"><div style="display: flex;flex-direction: column;width: 100%;justify-content: center;align-items: center;  margin: 15px 0px;">No tienes productos agregados al carrito <a href="'+base_url()+'">Volver a la tienda</a></div></td></tr>';
					}

					$('#total').text("Q "+add_commas(convert_price(total)));
					$('#list_products').html(html);
				}

				list();

				$('#clean_cart').click(function(){
						remove_cart_products();
						core_cart();
						list();
				});

				$('#update_cart').click(function(){
						var data = [];
						$('#list_products ._tr').each(function(){
								data.push({
										id:$(this).attr('value'),
										qty:$(this).find('.qty-input').val()
								});
						});

						update_cart(data);
						core_cart();
						list();
				});

				$('body').on('click','._remove',function(){
						var id = $(this).attr('value');
						remove_cart_product_id(id);
						core_cart();
						list();
				});

		});
	</script>

	<style>
		.table-products img{max-width:100%;}
	</style>

</body>

</html>
