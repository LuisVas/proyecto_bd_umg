</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Mey-ko Club - Mi perfil</title>
    
	<?php include("tagscliente.php");?> 

 </head>
  
<body>

<section class="header-menu header-index">
  <?php include("header-session.php");?>
</section>

<section class="profile">
  <div class="container-in">
    <div class="profile-content">
      <h1>MI PERFIL</h1>
      <form id="profile" method="POST">
        <input type="hidden" id="id_usuario" value="<?= $user->id_usuario; ?>">
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="<?= $user->nombre; ?>">
        <label>Correo electrónico</label>
        <input type="text" name="correo" placeholder="<?= $user->correo; ?>" disabled>
        <label>No. de identidad</label>
        <input type="number" name="identificacion" id="identificacion" placeholder="<?= $user->identificacion; ?>" disabled>
        <button type="submit" class="change-prize" id="updateInfo">Actualizar</button>
      </form>
    </div>
  </div>
</section>
<script>
    $('#myUser').addClass('active');
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
          <a href="https://api.whatsapp.com/send?text=Regístrate%20en%20Meyko%20Club%20e%20ingresa%20mi%20código%2012345678%20y%20gana%205%20puntos,%20visítanos%20en%20https://meykoclub.com" target="_blank"><img src="images/whatsapp.png">Compartir por Whatsapp</a>
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

