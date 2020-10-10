</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Clientes | Dashboard</title>
        
        
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
                                <h1>Clientes</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Historial de usuarios</h1>
                            <div class="services-table">
                                <div class="table-responsive">
                                    <table class="table bill-table" id="userstable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nombre completo</th>
                                                <th scope="col">Correo electrónico</th>
                                                <th scope="col">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                
                                            <tr>
                                                <th>
                                                    <h1>aasdas</h1>
                                                </th>
                                                <td>asdasdsa</td>
                                                <td><a href="#" class="clientModal" data-toggle="modal" data-target="#clientDetail" value="<?php echo $rec->id_usuario;?>" name="<?php echo $rec->nombre; ?>" email="<?php echo $rec->correo; ?>" identificacion="<?php echo $rec->identificacion; ?>" tipo="<?php echo $rec->id_tipo_user; ?>" puntos="<?php echo $rec->puntos; ?>" sellos="<?php echo $rec->sellos; ?>" registro="<?php echo $rec->fecha_registro; ?>" status="<?php echo $rec->status; ?>" id_rol="<?php echo $rec->id_rol; ?>" password="<?php echo $rec->password; ?>">Ver detalle</a></td>
                                            </tr>
                                            
                                        	
                                        	<?php
                                        	}
                                        	?>
                                            <?php endforeach;?>
                                            
                                           
                                        </tbody>
                                        
                                    </table>
                                </div>
                                
                                <div class="add-service">
                                    <button type="button" data-toggle="modal" data-target="#modalAddClient">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M492,236H276V20c0-11-9-20-20-20c-11,0-20,9-20,20v216H20c-11,0-20,9-20,20c0,11,9,20,20,20h216v216c0,11,9,20,20,20 c11,0,20-9,20-20V276h216c11,0,20-9,20-20C512,245,503,236,492,236z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
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


<!-- Modal editar cliente-->
<div class="modal fade modalServicesBody" id="clientDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle del usuario</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                    	<form id="clientForm" method="POST" autocomplete="off">    
	                        <input type="hidden" id="idUser" name="" value="" required>
	                        <h2>Nombre completo</h2>
	                        <div class="input-bills input-client-modal">
	                            <input type="text" id="nameClient" name="" value="" required>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <h2>Puntos acumulados</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="puntosClient" name="" value="" required>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <h2>Sellos acumulados</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="sellosClient" name="" value="" required>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <h2>Correo electrónico</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="email" id="emailClient" name="" value="" required>
	                                </div>
	                                <h2>Identificación</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="idClient" name="" value="" required>
	                                </div>
	                                <h2>Tipo de usuario</h2>
	                                <div class="input-bills input-client-modal">
	                                	<select id="typeClient" required>
	                                		<option id="typeClient1" value="1">Administrativo</option>
	                                		<option id="typeClient2" value="2">Médico</option>
	                                		<option id="typeClient3" value="3">Paciente</option>
	                                		<option id="typeClient4" value="4">Paciente Diabético</option>
	                                	</select>
	                                </div>
	                                <h2>Rol del usuario</h2>
	                                <div class="input-bills input-client-modal">
	                                	<select id="user_rol" required>
	                                		<option id="rol2" value="2">Gerencial</option>
	                                		<option id="rol3" value="3">Tienda</option>
	                                		<option id="rol4" value="4">Cliente</option>
	                                	</select>
	                                </div>
	                                <div class="input-bills input-client-modal" id="adminRol" style="display:none;">
	                                	<select id="user_rol" required>
	                                		<option id="rol1" value="1" selected readonly>Administrador</option>
	                                	</select>
	                                </div>
	                                <h2>Status de cliente</h2>
	                                <div class="input-bills input-client-modal">
	                                	<select id="statusClient" required>
	                                		<option id="statusClient1" value="1">Activo</option>
	                                		<option id="statusClient2" value="2">Desactivado</option>
	                                		<option id="statusClient3" value="3">Solicitando cambio de contraseña</option>
	                                	</select>
	                                </div>
	                                <h2>Fecha de registro</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="date" id="regDate" name="" value="" >
	                                </div>
	                                <h2>Cambiar contraseña</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="password" id="passClient" name="" value="" >
	                                </div>
	                            </div>
	                        </div>
                            <div class="row">
                            	<div class="col-md-6">
			                        <div class="btn-save">
		                                <button class="btn-save-prize" id="updateDataClient">Actualizar</button>
		                            </div>
                            	</div>
                            	<div class="col-md-6">
		                            <div class="btn-delete">
		                                <a class="btn-delete-prize deleteClient" id="deleteClient">Eliminar</a>
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




<!-- Modal agregar cliente-->
<div class="modal fade modalServicesBody" id="modalAddClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle de cliente nuevo</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                    	<form id="NewClientForm" method="POST"> 
	                        <h2>Nombre completo</h2>
	                        <div class="input-bills input-client-modal">
	                            <input type="text" id="" name="nombre">
	                        </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <h2>Puntos acumulados</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="" name="puntos" value="0">
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <h2>Sellos acumulados</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="" name="sellos" value="0">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <h2>Correo electrónico</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="email" id="" name="correo" value="">
	                                </div>
	                                <h2>Identificación</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="number" id="" name="identificacion" value="">
	                                </div>
	                                <h2>Tipo de usuario</h2>
	                                <div class="input-bills input-client-modal">
	                                	<select id="typeClient" name="id_tipo_user">
	                                		<option id="" value="1">Administrativo</option>
	                                		<option id="" value="2">Médico</option>
	                                		<option id="" value="3">Paciente</option>
	                                		<option id="" value="4">Paciente Diabético</option>
	                                	</select>
	                                </div>
	                                <h2>Rol del usuario</h2>
	                                <div class="input-bills input-client-modal">
	                                	<select id="typeClient2" name="id_rol">
	                                		<option id="" value="2">Gerencial</option>
	                                		<option id="" value="3">Tienda</option>
	                                		<option id="" value="4">Cliente</option>
	                                	</select>
	                                </div>
	                                <h2>Contraseña</h2>
	                                <div class="input-bills input-client-modal">
	                                    <input type="password" id="" name="password" value="">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="btn-save">
                                <button class="btn-save-prize" id="CreateDataClient">Crear</button>
                            </div>
	                	</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('#clientes').addClass('active-dashboard');
    //$('#userstable').DataTable();
    $(document).ready( function () {
	    $('#userstable').DataTable();
	});
</script>
</body>
</html>

