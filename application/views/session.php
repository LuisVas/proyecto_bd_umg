</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Mey-ko Club - Inicio</title>

	<?php include("tagscliente.php");?>    

 </head>
  
<body>

<section class="header-menu header-index">
  <?php include("header-session.php");?>
</section>
<section class="coverindex" id="inicio">
  <div class="cover-session">
    <div class="container-in">
      <div class="row">
        <div class="col-md-6">
          <div class="points">
            <h1>Mis puntos</h1>
            <div class="points-detail">
              <p>Puntos acumulados: <span><?= $user->puntos; ?></span></p>
              <p>Sellos acumulados: <span><?= $user->sellos; ?></span></p>
            </div>
            <div class="tags">
              <div class="row">
                <div class="col-md-4">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
                  <style type="text/css">
                    .st0{clip-path:url(#SVGID_2_);fill:#89898a;}
                    .st1{clip-path:url(#SVGID_4_);fill:#89898a;}
                    .st2{clip-path:url(#SVGID_6_);fill:#89898a;}
                  </style>
                  <g>
                    <g>
                      <defs>
                        <rect id="SVGID_1_" x="109.5" y="12.2" width="194.1" height="194.1"/>
                      </defs>
                      <clipPath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                      </clipPath>
                      <path class="st0" d="M265,206.4c-0.8,0-1.7-0.2-2.5-0.5l-56-24.9l-56,24.9c-2.1,0.9-4.5,0.6-6.3-0.8c-1.8-1.4-2.6-3.7-2.2-5.9
                        l12.4-61.9l-43.2-43.3c-1.6-1.6-2.2-3.9-1.5-6.1c0.6-2.1,2.4-3.8,4.6-4.2l61.9-12.4L201,15.5c2-4.4,9.1-4.4,11.1,0l24.7,55.7
                        l61.9,12.4c2.2,0.4,4,2.1,4.6,4.2c0.6,2.1,0.1,4.5-1.5,6.1l-43.2,43.3l12.4,61.9c0.4,2.2-0.4,4.5-2.2,5.9
                        C267.7,205.9,266.4,206.4,265,206.4L265,206.4z M206.5,168.2c0.8,0,1.7,0.2,2.5,0.5l47.8,21.3l-10.7-53.6c-0.4-2,0.2-4.1,1.7-5.5
                        l37.5-37.5l-53.9-10.8c-1.9-0.4-3.6-1.7-4.4-3.5L206.5,33l-20.5,46.1c-0.8,1.8-2.4,3.1-4.4,3.5l-53.9,10.8l37.5,37.5
                        c1.4,1.4,2.1,3.5,1.7,5.5L156.3,190l47.8-21.3C204.9,168.3,205.7,168.2,206.5,168.2L206.5,168.2z M206.5,168.2"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <rect id="SVGID_3_" x="16.1" y="97.8" width="111.6" height="111.6"/>
                      </defs>
                      <clipPath id="SVGID_4_">
                        <use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
                      </clipPath>
                      <path class="st1" d="M105.5,209.4c-0.5,0-1-0.1-1.4-0.3l-32.2-14.3l-32.2,14.3c-1.2,0.5-2.6,0.3-3.6-0.5c-1-0.8-1.5-2.1-1.2-3.4
                        l7.1-35.6l-24.8-24.9c-0.9-0.9-1.2-2.2-0.9-3.5c0.4-1.2,1.4-2.2,2.7-2.4l35.6-7.1l14.2-32c1.1-2.5,5.2-2.5,6.4,0l14.2,32l35.6,7.1
                        c1.3,0.3,2.3,1.2,2.7,2.4c0.4,1.2,0,2.6-0.9,3.5l-24.8,24.9l7.1,35.6c0.3,1.3-0.2,2.6-1.2,3.4C107,209.1,106.3,209.4,105.5,209.4
                        L105.5,209.4z M71.9,187.4c0.5,0,1,0.1,1.4,0.3l27.5,12.2l-6.1-30.8c-0.2-1.1,0.1-2.3,1-3.2l21.5-21.6l-31-6.2c-1.1-0.2-2-1-2.5-2
                        l-11.8-26.5l-11.8,26.5c-0.5,1-1.4,1.8-2.5,2l-31,6.2L48.2,166c0.8,0.8,1.2,2,1,3.2L43,199.9l27.5-12.2
                        C70.9,187.5,71.4,187.4,71.9,187.4L71.9,187.4z M71.9,187.4"/>
                    </g>
                  </g>
                  <g>
                    <g>
                      <defs>
                        <rect id="SVGID_5_" x="288.5" y="97.8" width="111.6" height="111.6"/>
                      </defs>
                      <clipPath id="SVGID_6_">
                        <use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
                      </clipPath>
                      <path class="st2" d="M377.9,209.4c-0.5,0-1-0.1-1.4-0.3l-32.2-14.3l-32.2,14.3c-1.2,0.5-2.6,0.3-3.6-0.5c-1-0.8-1.5-2.1-1.2-3.4
                        l7.1-35.6l-24.8-24.9c-0.9-0.9-1.2-2.2-0.9-3.5c0.4-1.2,1.4-2.2,2.7-2.4l35.6-7.1l14.2-32c1.1-2.5,5.2-2.5,6.4,0l14.2,32l35.6,7.1
                        c1.3,0.3,2.3,1.2,2.7,2.4c0.4,1.2,0,2.6-0.9,3.5l-24.8,24.9l7.1,35.6c0.3,1.3-0.2,2.6-1.2,3.4
                        C379.5,209.1,378.7,209.4,377.9,209.4L377.9,209.4z M344.3,187.4c0.5,0,1,0.1,1.4,0.3l27.5,12.2l-6.1-30.8c-0.2-1.1,0.1-2.3,1-3.2
                        l21.5-21.6l-31-6.2c-1.1-0.2-2-1-2.5-2l-11.8-26.5l-11.8,26.5c-0.5,1-1.4,1.8-2.5,2l-31,6.2l21.5,21.6c0.8,0.8,1.2,2,1,3.2
                        l-6.1,30.8l27.5-12.2C343.3,187.5,343.8,187.4,344.3,187.4L344.3,187.4z M344.3,187.4"/>
                    </g>
                  </g>
                  </svg>



                  <h1>Sistema de puntos</h1>
                </div>
                <div class="col-md-4">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
                  <style type="text/css">
                    .st0{clip-path:url(#SVGID_2_);fill:#89898a;}
                  </style>
                  <g>
                    <g>
                      <defs>
                        <rect id="SVGID_1_" x="117" y="37.6" width="174.8" height="174.8"/>
                      </defs>
                      <clipPath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                      </clipPath>
                      <path class="st0" d="M277.2,78.3h-37c4.8-4.3,7.9-10.5,7.9-17.4c0-19.5-22.6-30.3-37.7-18.3c-1.3,1-1.5,2.8-0.5,4.1
                        c1,1.3,2.8,1.5,4.1,0.5c11.4-9,28.3-0.9,28.3,13.7c0,9.2-7.2,16.8-16.3,17.4h-18.7V60.9c0-12.9-10.5-23.3-23.3-23.3
                        c-12.9,0-23.3,10.5-23.3,23.3c0,6.9,3,13.2,7.9,17.4h-37c-8,0-14.6,6.5-14.6,14.6v15c0,7.3,5.4,13.3,12.4,14.4v75.5
                        c0,8,6.5,14.6,14.6,14.6h120.9c8,0,14.6-6.5,14.6-14.6v-62.7c0-1.6-1.3-2.9-2.9-2.9c-1.6,0-2.9,1.3-2.9,2.9v62.7
                        c0,4.8-3.9,8.7-8.7,8.7h-70.6v-84.1h20.4v73.6c0,1.6,1.3,2.9,2.9,2.9c1.6,0,2.9-1.3,2.9-2.9v-73.6h32.4c1.6,0,2.9-1.3,2.9-2.9
                        c0-1.6-1.3-2.9-2.9-2.9h-19.3V84.2h43.7c4.8,0,8.7,3.9,8.7,8.7v15c0,4.8-3.9,8.7-8.7,8.7h-5.6c-1.6,0-2.9,1.3-2.9,2.9
                        c0,1.6,1.3,2.9,2.9,2.9h5.6c8,0,14.6-6.5,14.6-14.6v-15C291.8,84.9,285.3,78.3,277.2,78.3L277.2,78.3z M166.5,60.9
                        c0-9.6,7.8-17.5,17.5-17.5c9.6,0,17.5,7.8,17.5,17.5v17.4h-18.7C173.7,77.7,166.5,70.1,166.5,60.9L166.5,60.9z M188.4,206.6H144
                        c-4.8,0-8.7-3.9-8.7-8.7v-75.4h53.2V206.6z M227.7,116.7h-96.1c-4.8,0-8.7-3.9-8.7-8.7v-15c0-4.8,3.9-8.7,8.7-8.7h43.7v23.3
                        c0,1.6,1.3,2.9,2.9,2.9c1.6,0,2.9-1.3,2.9-2.9V84.2h46.6V116.7z M227.7,116.7"/>
                    </g>
                  </g>
                  </svg>
                  <h1>Premios y beneficios</h1>
                </div>
                <div class="col-md-4">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 408.8 250" style="enable-background:new 0 0 408.8 250;" xml:space="preserve">
                  <style type="text/css">
                    .st0{clip-path:url(#SVGID_2_);fill:#89898a;}
                  </style>
                  <g>
                    <g>
                      <defs>
                        <rect id="SVGID_1_" x="151.7" y="47.2" width="105.4" height="155.7"/>
                      </defs>
                      <clipPath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                      </clipPath>
                      <path class="st0" d="M256.9,184.9v15.3c0,1.4-1.2,2.6-2.6,2.6c-1.4,0-2.6-1.2-2.6-2.6v-15.3c0-11.9-9.7-21.6-21.6-21.6
                        c-5.6,0-10.8-2.9-13.7-7.7c-0.7-1.2-0.4-2.8,0.9-3.6c1.2-0.7,2.8-0.4,3.6,0.9c2,3.3,5.5,5.2,9.3,5.2
                        C245,158.1,256.9,170.1,256.9,184.9L256.9,184.9z M208.6,156.9c-5.4,1.2-10.9,0-15.3-3c0.7-1.7,1.2-3.4,1.4-5.3
                        c22.2,6.5,44.5-10.2,44.5-33.3c0-22,0-21.7-0.1-22.6c-0.3-3.6-5.5-3.1-5.2,0.5c0.1,0.6,0,1.1,0,22c0,16.3-13.2,29.5-29.5,29.5
                        s-29.5-13.2-29.5-29.5c0-5.8-0.1-10.4-0.1-13.8c-0.1-8.5,7.8-15,16.3-12.9c12,2.9,16.9,10.4,32.3,9.7c1.4-0.1,2.5-1.3,2.5-2.7
                        c-0.1-1.4-1.3-2.5-2.7-2.5c-13.9,0.7-17.7-6.4-30.8-9.5c-11.8-2.8-22.8,6.2-22.7,18c0,2.8,0.1,5.8,0.1,9.5
                        c-1.7-0.9-2.9-2.7-2.9-4.7c0-0.1,0-13.5,0-13.5c-0.1-5.9,0.7-20.7,11.3-30.8c11.8-11.4,30.3-11.4,44.6-6.4l-2.1,0.9
                        c-2.5,1-2,4.7,0.7,5l4.6,0.5c8.8,0.9,16.5,5.5,21.5,12.6c-3.3,4-5,8.9-5,14.1v17.7c0,1.4,1.2,2.6,2.6,2.6s2.6-1.2,2.6-2.6V88.7
                        c0-4.5,1.7-8.8,4.9-12c0.9-0.9,1-2.3,0.4-3.3c-5.2-8.3-12.9-13.6-21.7-15.8c1.4-1.2,1.1-3.5-0.5-4.3c-7.5-3.8-18.3-6.5-28.5-6.1
                        c-25.9,1-41.1,20.3-40.5,45.7v13.4c0,5,3.5,9.1,8.1,10.3c0.5,13.2,8.4,24.6,19.8,30v0.7c0,6-4.8,10.8-10.8,10.8
                        c-14.8,0-26.8,12-26.8,26.8v15.3c0,1.4,1.2,2.6,2.6,2.6c1.4,0,2.6-1.2,2.6-2.6v-15.3c0-11.9,9.7-21.6,21.6-21.6
                        c4.4,0,8.6-1.8,11.7-5.1c5.5,3.8,12.5,5.3,19.3,3.8c1.4-0.3,2.3-1.7,2-3.1S210,156.6,208.6,156.9L208.6,156.9z M230.7,189.5h-7.8
                        c-1.4,0-2.6,1.2-2.6,2.6c0,1.4,1.2,2.6,2.6,2.6h7.8c1.4,0,2.6-1.2,2.6-2.6C233.3,190.7,232.1,189.5,230.7,189.5L230.7,189.5z
                         M230.7,189.5"/>
                    </g>
                  </g>
                  </svg>

                  <h1>Programa de referidos</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="gift-img">
            <img src="images/gifthome.png">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="prizes">
  <div class="container-in">
    <h1>Premios</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Disponibles</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Canjeados</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="disponibles">
          <div class="row">
          	<?php foreach($prizes as $rec): ?>
	            <div class="col-md-4">
	              <div class="back-prize">
                      	<?php if($rec->status_premio == 2){?>
                        <div class="disabled-prize">
                        	<img src="images/lock.png">
                        	<h1>Premio bloqueado</h1>
                        	<p>El premio ha sido bloqueado o desactivado por Meykoclub, contacta a servicio al cliente para mayor información.</p>
                        </div>
                        <?php }else{?>
                        <div class="disabled-prize" style="display:none"></div>
						<?php }?>
	                <div class="img-prize">
	                  <img src="<?php echo $rec->img_premio; ?>">
	                </div>
	                <div class="prize-info">
	                  <h1><?php echo $rec->nombre_premio; ?></h1>
	                  <p><?php echo $rec->desc_premio; ?></p>
	                  <div class="val-prize">
	                    <div class="row">
	                      <div class="col-md-4">
	                        <button class="change-prize" points="<?php echo $rec->valor_puntos; ?>" sellos="<?php echo $rec->valor_sellos; ?>" name="<?php echo $rec->nombre_premio; ?>" value="<?php echo $rec->id_premio; ?>" data-toggle="modal" data-target="#canjePremio">Canjear</button>
	                      </div>
	                      <div class="col-md-8">
	                        <img src="images/icon-prize.png">
	                        <?php if($rec->valor_puntos == 0){?>
								<p>x <span><?php echo $rec->valor_sellos; ?> sellos</span>
							<?php }else{?>
								<p>x <span><?php echo $rec->valor_puntos; ?> puntos</span>
							<?php }?>
							 <?php if($rec->valor_sellos !== 0){?>
							    </p>
							 <?php } ?>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	         <?php endforeach;?>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="disponibles">
          <div class="row">
          	<?php 
          	if(empty($swaps)){
          	?>
      		<p>¡Ooops! ¡No tienes ningún premio canjeado!</p>
      		<?php
      		}else{
      		?>
      		<?php foreach($swaps as $rec): ?>
          		<div class="col-md-4">
	              <div class="back-prize">
	                <div class="img-prize">
	                  <img src="<?php echo $rec->img_premio; ?>">
	                </div>
	                <div class="prize-info">
	                  <h1><?php echo $rec->nombre_premio; ?></h1>
	                  <p>Cantidad de premios canjeados: <span><?php echo $rec->cantidad_premios; ?></span></p>
	                  <p>Código de la transacción: <span><?php echo $rec->codigo_canje; ?></span></p>
	                  <div class="val-prize">
	                    <div class="row">
	                      <div class="col-md-12">
	                        <img src="images/icon-prize.png">
	                        <?php
	                        if($rec->status_redencion == 1){
	                        ?>
	                        <p>Premio no canjeado</p>
	                        <?php
	                        }else{
	                        ?>
	                        <p>Premio canjeado</p>
	                        <?php
	                        }
	                        ?>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	         <?php endforeach;?>
            <?php
      		}
            ?>
          </div>
        </div>
        <div class="how-change">
          <h1>¿Cómo canjear mis premios?</h1>
          <div class="change-steps">
            <div class="row">
              <div class="col-md-4">
                <div class="back-step">
                  <img src="images/interface.png">
                  <h1>Selecciona tu premio</h1>
                  <p>Elige el premio que deseas canjear con tus puntos acumulados.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="back-step">
                  <img src="images/plane.png">
                  <h1>Código de confirmación</h1>
                  <p>En la pestaña de canjeados recibirás un código de canje para reclamarlo en nuestra tienda central Mey-ko.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="back-step">
                  <img src="images/online.png">
                  <h1>Reclama tu premio</h1>
                  <p>Dirígete a nuestra tienda central: 1 calle, San Pedro Sula 21102, Honduras, para recoger tu premio.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
    $('#mySession').addClass('active');
</script>
<section class="footer-menu">
  <?php include("footer.php");?>
</section>
 <!-- Modal -->
 
<div class="modal fade modal-canje-premio" id="canjePremio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form id="changePrizeForm" method="POST">
	    <div class="modal-content">
	      <div class="modal-body">
	        <img src="images/icon-prize.png">
	        <h1>¿Deseas canjear <span id="valpremio"></span> por este premio?</h1>
	        <input type="hidden" id="id_premio" value="">
	        <input type="hidden" id="sellosInput" value="">
	        <input type="hidden" id="puntosInput" value="">
	        <p id="nombrepremio"></p>
	        <p>¿Cuántos premios deseas canjear?</p>
	        <input type="number" id="valPrizes" min="1" value="1">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="cancelar-canje" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="change-prize" id="changePrizeButton">Canjear</button>
	      </div>
	    </div>
	 </form>
  </div>
</div>


</body>
</html>

