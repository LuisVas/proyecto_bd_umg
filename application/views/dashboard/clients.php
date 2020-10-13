</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Usuarios de tienda | Dashboard</title>
        
    <?php include ("tags.php");?>


 </head>
  
<body>

<div class="container-dash">
    <section class="dashboard-body">
        <div class="row">
            <div class="col-md-3">
                <?php include("sidebar.php");?>
            </div>
            <div class="col-md-9">
                <div class="dash-content-body">
                    <div class="head-dash">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Clientes Activos</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Historial de clientes</h1>
                            <div class="services-table">
                                <form id="prizeList">
                                    <div class="table-responsive">
                                        <table class="table" id="cardTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Apellido</th>
                                                    <th scope="col">Edad</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <?php 
                                                if(empty($userList)){
                                                ?>
                                                <p>¡Ooops! ¡No tienes usuarios registrados en el sitio :(!</p>
                                                <?php
                                                }else{
                                                ?>
                                                <?php foreach($userList as $rec): ?>
                                                <tr>
                                                    <th><?php echo $rec->NOMBRE; ?></th>
                                                    <td><?php echo $rec->APELLIDO; ?></td>
                                                    <td><?php echo $rec->EDAD; ?></td>
                                                    <td><?php echo $rec->EMAIL; ?></td>
                                                    <td><a href="#" id="edTar" value="<?php echo $rec->ID_USU; ?>" name="<?php echo $rec->NOMBRE; ?>" apellido="<?php echo $rec->APELLIDO; ?>" edad="<?php echo $rec->EDAD; ?>" sexo="<?php echo $rec->SEXO; ?>" email="<?php echo $rec->EMAIL; ?>" codpostal="<?php echo $rec->CODIGO_POSTAL?>" nacionalidad="<?php echo $rec->NACIONALIDAD?>" rol="<?php echo $rec->ROL?>" password="<?php echo $rec->CONTRASENA?>" data-toggle="modal" data-target="#editUser" class="userDetail">Editar</a></td>
                                                </tr>
                                                <?php endforeach;?>

                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-menu">
      <?php include("footer-login.php");?>
    </section>
</div>






<!-- Modal editar premio -->
<div class="modal fade modalServicesBody" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle del cliente</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="usereditForm">
                                <h1>Editar cliente</h1>
                                <input type="hidden" id="idUsu" name="ID_USU" value="">
                                <div class="prize-body">
                                    <h2>Información del cliente</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre</h1>
                                            <input type="text" id="nomUsu" name="NOMBRE" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Apellido</h1>
                                            <input type="text" id="apUsu" name="APELLIDO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Edad</h1>
                                            <input type="number" id="edUsu" min="18" name="EDAD" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Sexo</h1>
                                            <input type="text" id="sexUsu" name="SEXO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Email</h1>
                                            <input type="email"  id="emUsu" name="EMAIL" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Codigo Postal</h1>
                                            <input type="number" min="0" id="codUsu" name="CODIGO_POSTAL" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Nacionalidad</h1>
                                            <input type="text" id="nacUsu" name="NACIONALIDAD" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Contraseña</h1>
                                            <input type="password" id="passUsu" name="CONTRASENA" value="">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-save">
                                        <button class="btn-save-prize" id="saveClientEdit">Guardar</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-delete">
                                        <a class="btn-delete-prize deleteCard" id="deleteCard">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready( function () {
        $('#cardTable').DataTable();
    });
    $('#clientes').addClass('active-dashboard');
</script>
</body>
</html>

