<div class="sidebar-dashboard">
	<div class="logo_dashboard">
		<img src="<?php echo base_url(); ?>/images/logo.png">
	</div>
	<div class="store-name">
		<?php $user = $this->session->userdata('user'); ?>
		<?php if($user){ ?>
			<h1><?= $user->username; ?></h1>
			<h2><?= $user->email; ?></h2>
		<?php } ?>
	</div>
	<div class="nav-sidebar">
		<ul>
			<a id="canjes" href="<?php echo base_url() ?>dashboard/orders"><li><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<path d="M353.1,297.8c0,0.2,0.4,0.2,0.4,0C353.4,297.6,353.1,297.6,353.1,297.8z M269.7,214c-0.2,0-0.2,0.4,0,0.4
				C269.9,214.4,269.9,214,269.7,214z M477.9,87.5H206.4c-4.7,0-8.5,3.8-8.5,8.5c0,4.7,3.8,8.5,8.5,8.5h271.5c9.4,0,17.1,7.7,17.1,17.1
				v268.8c0,9.4-7.7,17.1-17.1,17.1H155.7v-18.1c0-4.7-3.8-8.5-8.5-8.5c-4.7,0-8.5,3.8-8.5,8.5v18.1H34.1c-9.4,0-17.1-7.7-17.1-17.1
				v-47c0-6.3,3.4-12,8.8-14.9c57.9-30.9,57.9-114.1,0-145c-5.4-2.9-8.8-8.6-8.8-14.9v-47c0-9.4,7.7-17.1,17.1-17.1h104.5v18.1
				c0,4.7,3.8,8.5,8.5,8.5c4.7,0,8.5-3.8,8.5-8.5V96c0-4.7-3.8-8.5-8.5-8.5H34.1C15.3,87.5,0,102.8,0,121.6v47c0,12.6,6.8,24.1,17.8,30
				c45.9,24.5,45.9,90.4,0,114.9c-11,5.9-17.8,17.3-17.8,30v47c0,18.8,15.3,34.1,34.1,34.1h443.7c18.8,0,34.1-15.3,34.1-34.1V121.6
				C512,102.8,496.7,87.5,477.9,87.5z M155.7,187.1c0-4.7-3.8-8.5-8.5-8.5c-4.7,0-8.5,3.8-8.5,8.5v33.4c0,4.7,3.8,8.5,8.5,8.5
				c4.7,0,8.5-3.8,8.5-8.5V187.1z M147.2,283c-4.7,0-8.5,3.8-8.5,8.5v33.4c0,4.7,3.8,8.5,8.5,8.5c4.7,0,8.5-3.8,8.5-8.5v-33.4
				C155.7,286.8,151.9,283,147.2,283z"/>
			</svg>órdenes</li></a>
			<a id="categories" href="<?= base_url() ?>dashboard/categories"><li><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<g>
				<path d="M175,52.4h-55.5c-38.2,0-69.3,31.1-69.3,69.3V146c0,4.1,3.4,7.5,7.5,7.5c4.1,0,7.5-3.4,7.5-7.5v-24.3
					c0-30,24.4-54.3,54.3-54.3H175c30,0,54.3,24.4,54.3,54.3v84.4c0,14-11.4,25.4-25.4,25.4h-84.4c-28.6,0-52.4-22.3-54.2-50.8
					c-0.3-4.1-3.8-7.3-7.9-7c-4.1,0.3-7.3,3.8-7,7.9c2.3,36.4,32.7,64.9,69.2,64.9h84.4c22.3,0,40.4-18.1,40.4-40.4v-84.4
					C244.3,83.5,213.2,52.4,175,52.4L175,52.4z"/>
				<path d="M392.5,52.4H337c-38.2,0-69.3,31.1-69.3,69.3v84.4c0,22.3,18.1,40.4,40.4,40.4h84.4c38.2,0,69.3-31.1,69.3-69.3v-55.5
					C461.8,83.5,430.7,52.4,392.5,52.4z M446.9,177.2c0,30-24.4,54.3-54.3,54.3h-84.4c-14,0-25.4-11.4-25.4-25.4v-84.4
					c0-30,24.4-54.3,54.3-54.3h55.5c30,0,54.3,24.4,54.3,54.3V177.2z"/>
				<path d="M203.9,265.5h-84.4c-38.2,0-69.3,31.1-69.3,69.3v55.5c0,38.2,31.1,69.3,69.3,69.3H175c38.2,0,69.3-31.1,69.3-69.3v-84.4
					C244.3,283.6,226.2,265.5,203.9,265.5L203.9,265.5z M229.3,390.3c0,30-24.4,54.3-54.3,54.3h-55.5c-30,0-54.3-24.4-54.3-54.3v-55.5
					c0-30,24.4-54.3,54.3-54.3h84.4c14,0,25.4,11.4,25.4,25.4L229.3,390.3L229.3,390.3z"/>
				<path d="M364.8,265.9c-13.9,0-27.3,2.9-39.9,8.6c-3.8,1.7-5.4,6.1-3.7,9.9c1.7,3.8,6.2,5.4,9.9,3.7c10.6-4.8,22-7.3,33.7-7.3
					c45,0,81.6,36.6,81.6,81.6s-36.6,81.6-81.6,81.6s-81.6-36.6-81.6-81.6c0-20.9,7.9-40.7,22.1-55.9c2.8-3,2.7-7.8-0.3-10.6
					c-3-2.8-7.8-2.7-10.6,0.3c-16.9,18-26.2,41.5-26.2,66.1c0,53.3,43.3,96.6,96.6,96.6s96.6-43.3,96.6-96.6S418.1,265.9,364.8,265.9
					L364.8,265.9z"/>
			</g>
			</svg>categorías</li></a>

			<a id="services" data-toggle="collapse" href="#serviciosCollapse" role="button" aria-expanded="false" aria-controls="serviciosCollapse"><li><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 478" style="enable-background:new 0 0 500 478;" xml:space="preserve">
			<g>
				<g>
					<path class="st0" d="M119.1,477.2c-7.7,0-15-2.4-21.2-6.9c-11.7-8.5-17.2-23.2-14-37.3l29.1-128l-98.5-86.4
						c-10.9-9.5-15.1-24.6-10.6-38.4c4.5-13.7,16.7-23.5,31.1-24.8l130.4-11.9L216.8,23C222.5,9.6,235.5,1,250,1
						c14.5,0,27.5,8.6,33.2,21.9l51.5,120.6l130.3,11.9c14.4,1.3,26.6,11.1,31.1,24.8c4.5,13.8,0.3,28.9-10.6,38.4L387.1,305l29,128
						c3.2,14.2-2.3,28.8-14.1,37.3c-11.7,8.5-27.3,9.2-39.8,1.7L250,404.9l-112.4,67.2C132,475.5,125.6,477.2,119.1,477.2z M250,22.9
						c-5.7,0-10.8,3.4-13.1,8.6l-56.7,132.6l-143.4,13c-5.6,0.5-10.5,4.4-12.2,9.8c-1.8,5.4-0.1,11.4,4.2,15.1l108.4,95l-31.9,140.7
						c-1.3,5.6,0.9,11.4,5.5,14.7c4.5,3.3,10.8,3.5,15.6,0.7L250,379.4l123.6,73.9c4.9,3,11,2.7,15.6-0.7c4.6-3.3,6.8-9.1,5.5-14.7
						l-31.9-140.7l108.4-95c4.3-3.7,5.9-9.7,4.1-15.1c-1.8-5.4-6.6-9.3-12.2-9.8l-143.3-13L263.1,31.5C260.8,26.3,255.7,22.9,250,22.9z
						"/>
				</g>
			</g>
			</svg>productos<svg class="collapse-sidebar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 500" style="enable-background:new 0 0 310 500;" xml:space="preserve">
			<path class="st0" d="M280.2,308.2L174.1,422.4V22.5c0-10.3-8.3-18.6-18.6-18.6s-18.6,8.3-18.6,18.6v400L30.8,308.2L3.5,333.6
				L155.5,497l152-163.4L280.2,308.2z"/>
			</svg></li></a>
			<div class="collapse" id="serviciosCollapse">
				<a id="vertodos" href="<?php echo base_url() ?>dashboard/see-all"><li>ver todos</li></a>
				<a id="premios" href="<?php echo base_url() ?>dashboard/products"><li>crear producto</li></a>
			</div>

			<a id="clientes" href="<?php echo base_url() ?>dashboard/clients"><li><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 419" style="enable-background:new 0 0 500 419;" xml:space="preserve">
			<g>
				<path class="st0" d="M246.4,329.5c1.3,0.8,2.7,1.2,4.2,1.2c1.4,0,2.9-0.4,4.1-1.2l240-152.6c3.2-2.1,5.2-6.4,5.2-11.3
					c0-4.9-2-9.2-5.2-11.3L254.7,1.8c-2.6-1.7-5.7-1.7-8.3,0L6.4,154.3c-3.2,2.1-5.2,6.4-5.2,11.3c0,4.9,2,9.2,5.3,11.3L246.4,329.5z
					 M32.4,165.6L250.6,26.9l218.1,138.7L250.6,304.3L32.4,165.6z"/>
				<path class="st0" d="M493.3,240.9c-2.3-0.9-4.8-0.7-6.9,0.7l-235.8,150l-235.9-150c-2.1-1.4-4.6-1.6-6.9-0.7
					c-2.9,1.1-5.1,3.9-6.1,7.6c-1.7,6.1,0.4,12.9,4.7,15.6l240,152.6c1.3,0.8,2.7,1.2,4.2,1.2c1.4,0,2.9-0.4,4.1-1.2l240-152.6
					c4.3-2.8,6.3-9.5,4.7-15.6C498.4,244.8,496.2,242.1,493.3,240.9z"/>
			</g>
			</svg>clientes</li></a>


			<a id="marketing" href="<?php echo base_url() ?>dashboard/cards"><li><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<g>
				<g>
					<path d="M505.7,88.8c-4.4-5-10.6-8-17.3-8.4L81.6,55.5C67.8,54.6,55.9,65.2,55.1,79l-5.5,90.2H25.1C11.3,169.2,0,180.4,0,194.3
						v56.4v180.8c0,13.8,11.3,25.1,25.1,25.1h407.6c13.8,0,25.1-11.3,25.1-25.1v-65.1l13.2,0.8c0.5,0,1,0,1.5,0
						c13.1,0,24.2-10.3,25-23.6L512,106.9C512.4,100.2,510.1,93.8,505.7,88.8z M437.7,431.5c0,2.8-2.3,5.1-5.1,5.1H25.1
						c-2.8,0-5.1-2.3-5.1-5.1V260.7h359.6c5.5,0,10-4.5,10-10c0-5.5-4.5-10-10-10H20v-46.4c0-2.8,2.3-5.1,5.1-5.1h407.6
						c2.8,0,5.1,2.3,5.1,5.1V431.5z M490.9,124.2L148,103.4c-5.5-0.3-10.3,3.9-10.6,9.4c-0.3,5.5,3.9,10.3,9.4,10.6l342.9,20.9
						l-12.1,198.3c-0.2,2.8-2.6,4.9-5.4,4.8l-14.4-0.9V194.3c0-13.8-11.3-25.1-25.1-25.1H69.6l5.4-89c0.2-2.8,2.6-4.9,5.4-4.8
						l406.8,24.9c1.8,0.1,3,1.1,3.5,1.7c0.5,0.6,1.4,1.8,1.3,3.7L490.9,124.2z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M369.8,329.9c-10.4,0-19.9,3.3-27.8,8.9c-7.8-5.6-17.4-8.9-27.8-8.9c-26.4,0-47.9,21.5-47.9,47.9s21.5,47.9,47.9,47.9
						c10.4,0,19.9-3.3,27.8-8.9c7.8,5.6,17.4,8.9,27.8,8.9c26.4,0,47.9-21.5,47.9-47.9C417.7,351.4,396.2,329.9,369.8,329.9z
						 M328.4,401.9c-4.2,2.5-9,3.9-14.2,3.9c-15.4,0-27.9-12.5-27.9-27.9s12.5-27.9,27.9-27.9c5.2,0,10,1.4,14.2,3.9
						c-4.1,7.1-6.5,15.3-6.5,24.1S324.2,394.8,328.4,401.9z M369.8,405.7c-15.4,0-27.9-12.5-27.9-27.9s12.5-27.9,27.9-27.9
						s27.9,12.5,27.9,27.9S385.2,405.7,369.8,405.7z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M68.8,379.3c-0.1-0.6-0.3-1.3-0.6-1.9c-0.2-0.6-0.6-1.2-0.9-1.7c-0.4-0.5-0.8-1.1-1.2-1.5c-2.3-2.3-5.8-3.4-9-2.7
						c-0.6,0.1-1.3,0.3-1.9,0.6c-0.6,0.2-1.2,0.6-1.7,0.9c-0.5,0.4-1.1,0.8-1.5,1.2c-0.5,0.5-0.9,1-1.2,1.5c-0.4,0.5-0.7,1.1-0.9,1.7
						c-0.2,0.6-0.4,1.2-0.6,1.9c-0.1,0.6-0.2,1.3-0.2,2s0.1,1.3,0.2,2c0.1,0.6,0.3,1.3,0.6,1.9c0.2,0.6,0.6,1.2,0.9,1.7
						c0.4,0.5,0.8,1.1,1.2,1.5c0.5,0.5,1,0.9,1.5,1.2c0.5,0.4,1.1,0.7,1.7,0.9c0.6,0.2,1.2,0.4,1.9,0.6c0.7,0.1,1.3,0.2,2,0.2
						c2.6,0,5.2-1.1,7.1-2.9c0.5-0.5,0.9-1,1.2-1.5c0.4-0.5,0.7-1.1,0.9-1.7c0.2-0.6,0.4-1.2,0.6-1.9c0.1-0.6,0.2-1.3,0.2-2
						S68.9,380,68.8,379.3z"/>
				</g>
			</g>
			<g>
				<g>
					<path d="M159.1,371.3H99c-5.5,0-10,4.5-10,10s4.5,10,10,10h60.2c5.5,0,10-4.5,10-10S164.7,371.3,159.1,371.3z"/>
				</g>
			</g>
			</svg>tarjetas para compras</li></a>



			<a id="configuracion" href="<?php echo base_url() ?>dashboard/sign_out"><li><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
			<path d="M362,392v40c0,44.1-35.9,80-80,80H81c-44.1,0-80-35.9-80-80V80C1,35.9,36.9,0,81,0h201c44.1,0,80,35.9,80,80v40
				c0,11-9,20-20,20s-20-9-20-20V80c0-22.1-17.9-40-40-40H81c-22.1,0-40,17.9-40,40v352c0,22.1,17.9,40,40,40h201c22.1,0,40-17.9,40-40
				v-40c0-11,9-20,20-20S362,381,362,392z M498.4,221.6l-44.8-44.8c-7.8-7.8-20.5-7.8-28.3,0c-7.8,7.8-7.8,20.5,0,28.3l31.9,31.9H217
				c-11,0-20,9-20,20s9,20,20,20h240.1l-31.9,31.9c-7.8,7.8-7.8,20.5,0,28.3c3.9,3.9,9,5.9,14.1,5.9c5.1,0,10.2-2,14.1-5.9l44.8-44.8
				C517.9,272.9,517.9,241.1,498.4,221.6z"/>
			</svg>Cerrar sesión</li></a>
		</ul>
	</div>
</div>
