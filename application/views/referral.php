</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Mey-ko Club - Referidos</title>
    
	<?php include("tagscliente.php");?> 
	
	
 </head>
  
<body>

<section class="header-menu header-index">
  <?php include("header-session.php");?>
</section>
<section class="coverindex" id="inicio">
  <div class="cover-session">
    <div class="container-in">
      <div class="referral-cover">
        <h1>¡Hola <?= $user->nombre; ?>!</h1>
        <h2>Este es tu ID</h2>
        <p><img src="images/referido-icon.png"><?= $user->identificacion; ?></p>
        <a href="#" data-toggle="modal" data-target="#shareID"><img src="images/share-icon.png">Comparte tu ID</a>
      </div>
    </div>
  </div>
</section>

<section class="prizes">
  <div class="container-in">
    <div class="referral-content">
      <p>Ingresa el ID de la persona que te refirió</p>
      <form id="send_points">
        <input type="number" id="points_id">
        <button type="submit" class="change-prize">Enviar</button>
      </form>
      <h2>Gana puntos por referir a alguien con nuestro programa.</h2>
    </div>
  </div>
</section>
<script>
    $('#referral').addClass('active');
</script>
<section class="footer-menu">
  <?php include("footer.php");?>
</section>
  <!-- Modal -->
<div class="modal fade modal-canje-premio" id="shareID" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="img-header-modal">
          <img src="images/sharemodal.png">
        </div>
        <div class="img-body-modal">
          <a href="https://api.whatsapp.com/send?text=Regístrate%20en%20Meyko%20Club%20e%20ingresa%20mi%20código'<?= $user->identificacion; ?>'%20y%20gana%205%20puntos,%20visítanos%20en%20https://meykoclub.com" target="_blank"><img src="<?php base_url()?>images/whatsapp.png">Compartir por Whatsapp</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="change-prize" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>

