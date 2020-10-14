</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Órdenes | Dashboard</title>
        
        
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
                                <h1>Órdenes</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Historial de compras</h1>
                            <div class="services-table">
                                <div class="table-responsive">
                                    <table class="table bill-table" id="swapsTable">
                                        <thead>
                                            <tr>
                                            	<th scope="col">Id de transacción</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Nombre del usuario</th>
                                                <th scope="col">Detalle de compra</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            <tr>
                                                <?php 
                                                if(empty($orderList)){
                                                ?>
                                                <p>¡Ooops! ¡Aún no has generado ninguna venta!</p>
                                                <?php
                                                }else{
                                                ?>
                                                <?php foreach($orderList as $rec): ?>
                                                <td><?php echo $rec->ID_TRANS;?></td>
                                                <td><?php echo $rec->ESTATUS;?></td>
                                                <td><?php echo $rec->USU_ID_USU;?></td>
                                                <td><?php echo $rec->ID_PRODUCTOS;?></td>
                                                <td>Q.<?php echo $rec->TOTAL;?></td>
                                                <?php endforeach;?>

                                                <?php
                                                }
                                                ?>
                                                
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


<script>
    $('#canjes').addClass('active-dashboard');
	$(document).ready( function () {
	    $('#swapsTable').DataTable();
	});
</script>
</body>
</html>

