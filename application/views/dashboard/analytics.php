</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Analytics | Dashboard</title>
        
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
                <div class="dash-content">
                    <div class="head-dash">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Analytics</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="frame">
                            <div class="center">
                                <div class="tabs">
                                    <input type="radio" id="tab-1" name="rd" checked="checked"/>
                                    <label class="tab" for="tab-1">Premios</label>
                                    
                                    
                                    <div class="content">
                                        <div class="box" id="box-1">
                                            <div class="analytics-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h1>Puntos ingresados</h1>
                                                        <div class="data-analytics">
                                                            <p>Total</p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <?php
                                                                    if ($suma > 1000){
                                                                	?>
                                                                    	<h1>+<?php echo round($perMil, 1, PHP_ROUND_HALF_UP); ?>k</h1>
                                                                    <?php 
                                                                    }else{
                                                                    ?>
																		<h1><?php echo $suma; ?></h1>
																	<?php 
                                                                    }
                                                                    ?>	
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>Puntos</p>
                                                                    <?php 
                                                                	?>
                                                                    <h2><?php echo number_format((float)$perPoints, 2, '.', ''); ?>%</h2>
                                                                    <?php 
                                                                    ?>
                                                                    <p>Sellos</p>
                                                                    <?php 
                                                                	?>
                                                                    <h2><?php echo number_format((float)$perSellos, 2, '.', ''); ?>%</h2>
                                                                    <?php 
                                                                    ?>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h1>Médicos</h1>
                                                                            <?php 
		                                                                	?>
		                                                                    <p><?php echo $count_doctor; ?></p>
		                                                                    <?php 
		                                                                    ?>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <h1>Pacientes</h1>
                                                                            <?php 
		                                                                	?>
		                                                                    <p><?php echo $count_patient; ?></p>
		                                                                    <?php 
		                                                                    ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h1>Premios redimidos</h1>
                                                        <div class="data-analytics">
                                                            <p>Total</p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h1><?php echo $count_swaps;?></h1>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>Redimidos</p>
                                                                    <h2><?php echo $count_swaps_red;?></h2>
                                                                    <p>No redimidos</p>
                                                                    <h2><?php echo $count_swaps_not_red;?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h1>Total de usuarios</h1>
                                                        <div class="data-analytics">
                                                            <p>Total</p>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="users-points">
                                                                    	<?php 
                                                                    	?>
                                                                        <h1><?php echo $count_all; ?></h1>
                                                                        <?php 
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="users-points-detail">
                                                                        <p>Usuarios que ganaron puntos</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="top-users-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="top-users">
                                                                        <h1>Top de usuarios</h1>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-8">
                                                                                    <p>Nombre</p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p>Puntos</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                            	<?php foreach($users as $rec): ?>
                                                                            	<?php if($rec->id_usuario !== 1){?>
	                                                                                <div class="col-md-8">
	                                                                                    <p><?php echo $rec->nombre; ?></p>
	                                                                                </div>
	                                                                                <div class="col-md-4">
	                                                                                    <p class="top-3"><?php echo $rec->puntos; ?></p>
	                                                                                </div>
	                                                                            <?php }else{?>
	                                                                            <?php }?>
																				 <?php if($rec->id_usuario !== 1){?>
																				 <?php } ?>
                                            									<?php endforeach;?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="top-users">
                                                                        <h1>Premios publicados</h1>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <p>Premio</p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p>Valor</p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <p>Status</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                            	<?php foreach($prizes as $rec): ?>
                                                                                <div class="col-md-4">
                                                                                    <p><?php echo $rec->nombre_premio; ?></p>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                            	<?php if($rec->valor_sellos > 0){?>
							                                                    	<p><?php echo $rec->valor_sellos; ?> sellos</p>
							                                                    <?php }else{?>
							                                                    	<p><?php echo $rec->valor_puntos; ?> puntos</p>
							                                                    <?php }?>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                            	<?php if($rec->status_premio == 1){?>
							                                                    	<p>Activo</p>
							                                                    <?php }else{?>
							                                                    	<p>Desactivado</p>
							                                                    <?php }?>
                                                                                </div>
								                                                <?php endforeach;?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    $('#analytics').addClass('active-dashboard');
</script>
</body>
</html>

