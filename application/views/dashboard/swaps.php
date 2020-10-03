</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Canjes | Dashboard</title>
        
        
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
                                <h1>Canjes</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Historial de canjes</h1>
                            <div class="services-table">
                                <div class="table-responsive">
                                    <table class="table bill-table" id="swapsTable">
                                        <thead>
                                            <tr>
                                            	<th scope="col">Nombre de premio</th>
                                                <th scope="col">Identificación de cliente</th>
                                                <th scope="col">Código canje</th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Detalle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr>
                                                <th>
                                                    <h1>test 1</h1>
                                                </th>
                                                <td>123123</td>
                                                <td>123123123</td>
                                                <td>1</td>
                                                <td>No redimido</td>
                                                <td><a href="#" class="swapDetail" data-toggle="modal" data-target="#swapDetail" >Ver más</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<div class="modal fade modalServicesBody" id="swapDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle del premio canjeado</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                    	<form id="canjeFormEdit" method="POST">    
	                        <input type="hidden" id="idCanje" name="" value="">
	                        <h2>Nombre completo</h2>
	                        <div class="input-bills input-client-modal">
	                            <input type="text" id="nameCanje" name="" value="" readonly>
	                        </div>
                            <h2>Identificación del cliente</h2>
                            <div class="input-bills input-client-modal">
                                <input type="number" id="idCliente" name="" value="" readonly>
                            </div>
                            <h2>Premio canjeado</h2>
                            <div class="input-bills input-client-modal">
                                <input type="text" id="namePremio" name="" value="" readonly>
                            </div>
                            <h2>Cantidad canjeada</h2>
                            <div class="input-bills input-client-modal">
                                <input type="number" id="cantPremios" name="" value="" readonly>
                            </div>
                            <h2>Código de transacción</h2>
                            <div class="input-bills input-client-modal">
                                <input type="number" id="codCanje" name="" value="" readonly>
                            </div>
                            <h2>Fecha de transacción</h2>
                            <div class="input-bills input-client-modal">
                                <input type="date" id="dateCanje" name="" value="" readonly>
                            </div>
	                                
                            <h2>Status de canje</h2>
                            <div class="input-bills input-client-modal">
                            	<select value="status_redencion" id="prizeStatus">
                            		<option id="prizeNotChange" value="1">Premio no redimido</option>
                            		<option id="prizeChanged" value="2">Premio redimido</option>
                            	</select>
                            </div>
	                                
                            <div class="row">
                            	<div class="col-md-12">
			                        <div class="btn-save">
		                                <button class="btn-save-prize" id="updateDataClient" value=" ">Actualizar</button>
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
    $('#canjes').addClass('active-dashboard');
	$(document).ready( function () {
	    $('#swapsTable').DataTable();
	});
</script>
</body>
</html>

