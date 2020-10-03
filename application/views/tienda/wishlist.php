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
							<li>/<span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
				<div class="block">
					<div class="container">
						<div class="cart-table wishlist">
							<div class="table-header">
								<div class="photo">
									Product Image
								</div>
								<div class="name">
									Product Name
								</div>
								<div class="price">
									Unit Price
								</div>
								<div class="remove">
									<span class="hidden-sm hidden-xs">Remove</span>
								</div>
								<div class="continue">
									<span class="hidden-sm hidden-xs">Continue</span>
								</div>
							</div>
							<div class="table-row">
								<div class="photo">
									<a href="product.html"><img src="images/products/product-1.jpg" alt=""></a>
								</div>
								<div class="name">
									<a href="product.html">Mid Pink Pleated Chiffon Cami</a>
								</div>
								<div class="price">
									$85.00
								</div>
								<div class="remove">
									<a href="#"><span>Remove</span><i class="icon icon-close-2"></i></a>
								</div>
								<div class="continue">
									<a href="#"><span>Continue</span><i class="icon icon-check"></i></a>
								</div>
							</div>
							<div class="table-row">
								<div class="photo">
									<a href="product.html"><img src="images/products/product-2.jpg" alt=""></a>
								</div>
								<div class="name">
									<a href="product.html">Mid Pink Pleated Chiffon Cami</a>
								</div>
								<div class="price">
									$185.00
								</div>
								<div class="remove">
									<a href="#"><span>Remove</span><i class="icon icon-close-2"></i></a>
								</div>
								<div class="continue">
									<a href="#"><span>Continue</span><i class="icon icon-check"></i></a>
								</div>
							</div>
							<div class="table-footer">
								<button class="btn btn-alt">CONTINUE SHOPPING</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 total-wrapper">
								<table class="total-price">
									<tr>
										<td>Subtotal</td>
										<td>$241.00</td>
									</tr>
									<tr>
										<td>Discount</td>
										<td>$12.00</td>
									</tr>
									<tr class="total">
										<td>Grand Total</td>
										<td>$229.00</td>
									</tr>
								</table>
								<div class="cart-action">
									<div>
										<button class="btn">Proceed To Checkout</button>
									</div>
									<a href="#">Checkout with Multiple Addresses</a>
								</div>
							</div>
							<div class="col-sm-6 col-md-5">
								<h2>Estimate Shipping and Tax</h2>
								<form class="white" action="#">
									<label>Country<span class="required">*</span></label>
									<div class="select-wrapper">
										<select class="form-control">
											<option data-code="US" value="United States">United States</option>
											<option data-code="NL" value="Netherlands">Netherlands</option>
											<option data-code="MY" value="Malaysia">Malaysia</option>
											<option data-code="CA" value="Canada">Canada</option>
											<option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
											<option data-code="BN" value="Brunei">Brunei</option>
											<option data-code="BG" value="Bulgaria">Bulgaria</option>
											<option data-code="BF" value="Burkina Faso">Burkina Faso</option>
											<option data-code="BI" value="Burundi">Burundi</option>
											<option data-code="KH" value="Cambodia">Cambodia</option>
											<option data-code="CM" value="Republic of Cameroon">Cameroon</option>
											<option data-code="CA" value="Canada">Canada</option>
											<option data-code="CV" value="Cape Verde">Cape Verde</option>
											<option data-code="KY" value="Cayman Islands">Cayman Islands</option>
											<option data-code="CF" value="Central African Republic">Central African Republic</option>
											<option data-code="TD" value="Chad">Chad</option>
											<option data-code="CL" value="Chile">Chile</option>
											<option data-code="CN" value="China">China</option>
											<option data-code="CX" value="Christmas Island">Christmas Island</option>
											<option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option data-code="CO" value="Colombia">Colombia</option>
											<option data-code="KM" value="Comoros">Comoros</option>
											<option data-code="CG" value="Congo">Congo - Brazzaville</option>
											<option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
											<option data-code="CK" value="Cook Islands">Cook Islands</option>
											<option data-code="CR" value="Costa Rica">Costa Rica</option>
											<option data-code="HR" value="Croatia">Croatia</option>
											<option data-code="CU" value="Cuba">Cuba</option>
											<option data-code="CW" value="Curaçao">Curaçao</option>
											<option data-code="CY" value="Cyprus">Cyprus</option>
											<option data-code="CZ" value="Czech Republic">Czech Republic</option>
											<option data-code="CI" value="Côte d'Ivoire">Côte d’Ivoire</option>
											<option data-code="DK" value="Denmark">Denmark</option>
											<option data-code="DJ" value="Djibouti">Djibouti</option>
											<option data-code="DM" value="Dominica">Dominica</option>
											<option data-code="DO" value="Dominican Republic">Dominican Republic</option>
											<option data-code="EC" value="Ecuador">Ecuador</option>
											<option data-code="EG" value="Egypt">Egypt</option>
											<option data-code="SV" value="El Salvador">El Salvador</option>
											<option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
											<option data-code="ER" value="Eritrea">Eritrea</option>
											<option data-code="EE" value="Estonia">Estonia</option>
											<option data-code="ET" value="Ethiopia">Ethiopia</option>
											<option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
											<option data-code="FO" value="Faroe Islands">Faroe Islands</option>
											<option data-code="FJ" value="Fiji">Fiji</option>
											<option data-code="FI" value="Finland">Finland</option>
											<option data-code="FR" value="French">French</option>
											<option data-code="GF" value="French Guiana">French Guiana</option>
											<option data-code="PF" value="French Polynesia">French Polynesia</option>
											<option data-code="TF" value="French Southern Territories">French Southern Territories</option>
											<option data-code="GA" value="Gabon">Gabon</option>
											<option data-code="GM" value="Gambia">Gambia</option>
											<option data-code="GE" value="Georgia">Georgia</option>
											<option data-code="DE" value="German">German</option>
											<option data-code="GH" value="Ghana">Ghana</option>
											<option data-code="GI" value="Gibraltar">Gibraltar</option>
											<option data-code="GR" value="Greece">Greece</option>
											<option data-code="GL" value="Greenland">Greenland</option>
											<option data-code="GD" value="Grenada">Grenada</option>
											<option data-code="GP" value="Guadeloupe">Guadeloupe</option>
											<option data-code="GT" value="Guatemala">Guatemala</option>
											<option data-code="GG" value="Guernsey">Guernsey</option>
											<option data-code="GN" value="Guinea">Guinea</option>
											<option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
											<option data-code="GY" value="Guyana">Guyana</option>
											<option data-code="HT" value="Haiti">Haiti</option>
											<option data-code="HM" value="Heard Island And Mcdonald Islands">Heard &amp; McDonald Islands</option>
											<option data-code="HN" value="Honduras">Honduras</option>
											<option data-code="HK" value="Hong Kong">Hong Kong SAR China</option>
											<option data-code="HU" value="Hungary">Hungary</option>
											<option data-code="IS" value="Iceland">Iceland</option>
											<option data-code="IN" value="India">India</option>
											<option data-code="ID" value="Indonesia">Indonesia</option>
											<option data-code="IR" value="Iran, Islamic Republic Of">Iran</option>
											<option data-code="IQ" value="Iraq">Iraq</option>
											<option data-code="IE" value="Ireland">Ireland</option>
											<option data-code="IM" value="Isle Of Man">Isle of Man</option>
											<option data-code="IL" value="Israel">Israel</option>
											<option data-code="IT" value="Italy">Italy</option>
											<option data-code="JM" value="Jamaica">Jamaica</option>
											<option data-code="JP" value="Japan">Japan</option>
											<option data-code="JE" value="Jersey">Jersey</option>
											<option data-code="JO" value="Jordan">Jordan</option>
											<option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
											<option data-code="KE" value="Kenya">Kenya</option>
											<option data-code="KI" value="Kiribati">Kiribati</option>
											<option data-code="KV" value="Kosovo">Kosovo</option>
											<option data-code="KW" value="Kuwait">Kuwait</option>
											<option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
											<option data-code="LA" value="Lao People's Democratic Republic">Laos</option>
											<option data-code="LV" value="Latvia">Latvia</option>
											<option data-code="LB" value="Lebanon">Lebanon</option>
											<option data-code="LS" value="Lesotho">Lesotho</option>
											<option data-code="LR" value="Liberia">Liberia</option>
											<option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
											<option data-code="LI" value="Liechtenstein">Liechtenstein</option>
											<option data-code="LT" value="Lithuania">Lithuania</option>
											<option data-code="LU" value="Luxembourg">Luxembourg</option>
											<option data-code="MO" value="Macao">Macau SAR China</option>
											<option data-code="MK" value="Macedonia, Republic Of">Macedonia</option>
											<option data-code="MG" value="Madagascar">Madagascar</option>
											<option data-code="MW" value="Malawi">Malawi</option>
											<option data-code="MY" value="Malaysia">Malaysia</option>
											<option data-code="MV" value="Maldives">Maldives</option>
											<option data-code="ML" value="Mali">Mali</option>
											<option data-code="MT" value="Malta">Malta</option>
											<option data-code="MQ" value="Martinique">Martinique</option>
											<option data-code="MR" value="Mauritania">Mauritania</option>
											<option data-code="MU" value="Mauritius">Mauritius</option>
											<option data-code="YT" value="Mayotte">Mayotte</option>
											<option data-code="MX" value="Mexico">Mexico</option>
										</select>
									</div>
									<label>State/Province <span class="required">*</span></label>
									<div class="select-wrapper">
										<select class="form-control">
											<option data-code="US" value="United States">United States</option>
											<option data-code="NL" value="Netherlands">Netherlands</option>
											<option data-code="MY" value="Malaysia">Malaysia</option>
											<option data-code="CA" value="Canada">Canada</option>
											<option data-code="IO" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option data-code="VG" value="Virgin Islands, British">British Virgin Islands</option>
											<option data-code="BN" value="Brunei">Brunei</option>
											<option data-code="BG" value="Bulgaria">Bulgaria</option>
											<option data-code="BF" value="Burkina Faso">Burkina Faso</option>
											<option data-code="BI" value="Burundi">Burundi</option>
											<option data-code="KH" value="Cambodia">Cambodia</option>
											<option data-code="CM" value="Republic of Cameroon">Cameroon</option>
											<option data-code="CA" value="Canada">Canada</option>
											<option data-code="CV" value="Cape Verde">Cape Verde</option>
											<option data-code="KY" value="Cayman Islands">Cayman Islands</option>
											<option data-code="CF" value="Central African Republic">Central African Republic</option>
											<option data-code="TD" value="Chad">Chad</option>
											<option data-code="CL" value="Chile">Chile</option>
											<option data-code="CN" value="China">China</option>
											<option data-code="CX" value="Christmas Island">Christmas Island</option>
											<option data-code="CC" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option data-code="CO" value="Colombia">Colombia</option>
											<option data-code="KM" value="Comoros">Comoros</option>
											<option data-code="CG" value="Congo">Congo - Brazzaville</option>
											<option data-code="CD" value="Congo, The Democratic Republic Of The">Congo - Kinshasa</option>
											<option data-code="CK" value="Cook Islands">Cook Islands</option>
											<option data-code="CR" value="Costa Rica">Costa Rica</option>
											<option data-code="HR" value="Croatia">Croatia</option>
											<option data-code="CU" value="Cuba">Cuba</option>
											<option data-code="CW" value="Curaçao">Curaçao</option>
											<option data-code="CY" value="Cyprus">Cyprus</option>
											<option data-code="CZ" value="Czech Republic">Czech Republic</option>
											<option data-code="CI" value="Côte d'Ivoire">Côte d’Ivoire</option>
											<option data-code="DK" value="Denmark">Denmark</option>
											<option data-code="DJ" value="Djibouti">Djibouti</option>
											<option data-code="DM" value="Dominica">Dominica</option>
											<option data-code="DO" value="Dominican Republic">Dominican Republic</option>
											<option data-code="EC" value="Ecuador">Ecuador</option>
											<option data-code="EG" value="Egypt">Egypt</option>
											<option data-code="SV" value="El Salvador">El Salvador</option>
											<option data-code="GQ" value="Equatorial Guinea">Equatorial Guinea</option>
											<option data-code="ER" value="Eritrea">Eritrea</option>
											<option data-code="EE" value="Estonia">Estonia</option>
											<option data-code="ET" value="Ethiopia">Ethiopia</option>
											<option data-code="FK" value="Falkland Islands (Malvinas)">Falkland Islands</option>
											<option data-code="FO" value="Faroe Islands">Faroe Islands</option>
											<option data-code="FJ" value="Fiji">Fiji</option>
											<option data-code="FI" value="Finland">Finland</option>
											<option data-code="FR" value="French">French</option>
											<option data-code="GF" value="French Guiana">French Guiana</option>
											<option data-code="PF" value="French Polynesia">French Polynesia</option>
											<option data-code="TF" value="French Southern Territories">French Southern Territories</option>
											<option data-code="GA" value="Gabon">Gabon</option>
											<option data-code="GM" value="Gambia">Gambia</option>
											<option data-code="GE" value="Georgia">Georgia</option>
											<option data-code="DE" value="German">German</option>
											<option data-code="GH" value="Ghana">Ghana</option>
											<option data-code="GI" value="Gibraltar">Gibraltar</option>
											<option data-code="GR" value="Greece">Greece</option>
											<option data-code="GL" value="Greenland">Greenland</option>
											<option data-code="GD" value="Grenada">Grenada</option>
											<option data-code="GP" value="Guadeloupe">Guadeloupe</option>
											<option data-code="GT" value="Guatemala">Guatemala</option>
											<option data-code="GG" value="Guernsey">Guernsey</option>
											<option data-code="GN" value="Guinea">Guinea</option>
											<option data-code="GW" value="Guinea Bissau">Guinea-Bissau</option>
											<option data-code="GY" value="Guyana">Guyana</option>
											<option data-code="HT" value="Haiti">Haiti</option>
											<option data-code="HM" value="Heard Island And Mcdonald Islands">Heard &amp; McDonald Islands</option>
											<option data-code="HN" value="Honduras">Honduras</option>
											<option data-code="HK" value="Hong Kong">Hong Kong SAR China</option>
											<option data-code="HU" value="Hungary">Hungary</option>
											<option data-code="IS" value="Iceland">Iceland</option>
											<option data-code="IN" value="India">India</option>
											<option data-code="ID" value="Indonesia">Indonesia</option>
											<option data-code="IR" value="Iran, Islamic Republic Of">Iran</option>
											<option data-code="IQ" value="Iraq">Iraq</option>
											<option data-code="IE" value="Ireland">Ireland</option>
											<option data-code="IM" value="Isle Of Man">Isle of Man</option>
											<option data-code="IL" value="Israel">Israel</option>
											<option data-code="IT" value="Italy">Italy</option>
											<option data-code="JM" value="Jamaica">Jamaica</option>
											<option data-code="JP" value="Japan">Japan</option>
											<option data-code="JE" value="Jersey">Jersey</option>
											<option data-code="JO" value="Jordan">Jordan</option>
											<option data-code="KZ" value="Kazakhstan">Kazakhstan</option>
											<option data-code="KE" value="Kenya">Kenya</option>
											<option data-code="KI" value="Kiribati">Kiribati</option>
											<option data-code="KV" value="Kosovo">Kosovo</option>
											<option data-code="KW" value="Kuwait">Kuwait</option>
											<option data-code="KG" value="Kyrgyzstan">Kyrgyzstan</option>
											<option data-code="LA" value="Lao People's Democratic Republic">Laos</option>
											<option data-code="LV" value="Latvia">Latvia</option>
											<option data-code="LB" value="Lebanon">Lebanon</option>
											<option data-code="LS" value="Lesotho">Lesotho</option>
											<option data-code="LR" value="Liberia">Liberia</option>
											<option data-code="LY" value="Libyan Arab Jamahiriya">Libya</option>
											<option data-code="LI" value="Liechtenstein">Liechtenstein</option>
											<option data-code="LT" value="Lithuania">Lithuania</option>
											<option data-code="LU" value="Luxembourg">Luxembourg</option>
											<option data-code="MO" value="Macao">Macau SAR China</option>
											<option data-code="MK" value="Macedonia, Republic Of">Macedonia</option>
											<option data-code="MG" value="Madagascar">Madagascar</option>
											<option data-code="MW" value="Malawi">Malawi</option>
											<option data-code="MY" value="Malaysia">Malaysia</option>
											<option data-code="MV" value="Maldives">Maldives</option>
											<option data-code="ML" value="Mali">Mali</option>
											<option data-code="MT" value="Malta">Malta</option>
											<option data-code="MQ" value="Martinique">Martinique</option>
											<option data-code="MR" value="Mauritania">Mauritania</option>
											<option data-code="MU" value="Mauritius">Mauritius</option>
											<option data-code="YT" value="Mayotte">Mayotte</option>
											<option data-code="MX" value="Mexico">Mexico</option>
										</select>
									</div>
									<label>Zip/Postal Code</label>
									<input type="text" class="form-control">
									<div>
										<button class="btn btn-alt">Get A Quote</button>
									</div>
								</form>
							</div>
							<div class="col-sm-6 col-md-4">
								<h2>Discount Codes</h2>
								<form class="white" action="#">
									<label>Enter your coupon code if you have one.</label>
									<input type="text" class="form-control dashed">
									<div>
										<button class="btn btn-alt">Apply Coupon</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</main>
			<!-- /Page Content -->
			<!-- Footer -->
			<footer class="page-footer variant1">
				<div class="container">
					<div class="under-footer">
						<a href="#"><img src="images/banners/footer-banner.jpg" alt="Footer Banner" class="img-responsive"></a>
					</div>
					<div class="footer-bot">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div class="footer-logo">
										<a href="#"><img src="images/logo-footer-small.png" alt="Footer Logo"></a>
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer-social"> <a href="#" data-tooltip="Facebook"><i class="icon icon-facebook-logo icon-circled"></i></a> <a href="#" data-tooltip="Twitter"><i class="icon icon-twitter-logo icon-circled"></i></a> <a href="#" data-tooltip="Skype"><i class="icon icon-skype-logo icon-circled"></i></a> <a href="#" data-tooltip="Vimeo"><i class="icon icon-vimeo icon-circled"></i></a> </div>
								</div>
								<div class="col-md-4">
									<div class="footer-payment-link">
										<a href="#"><img src="images/payment-logo/icon-pay-1.png" alt=""></a>
										<a href="#"><img src="images/payment-logo/icon-pay-2.png" alt=""></a>
										<a href="#"><img src="images/payment-logo/icon-pay-3.png" alt=""></a>
										<a href="#"><img src="images/payment-logo/icon-pay-4.png" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="after-footer">
						<div class="footer-copyright text-center"> © 2016 Demo Store. All Rights Reserved. </div>
					</div>
				</div>
			</footer>
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


</body>

</html>