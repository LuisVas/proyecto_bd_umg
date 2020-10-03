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
                                                                    <h1>100</h1>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>Puntos</p> 
                                                                    <h2>10%</h2>
                                                                    <p>Sellos</p> 
                                                                    <h2>90%</h2>
                                                                    
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-2">
                                                                            <h1>Médicos</h1> 
		                                                                    <p>10></p> 
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <h1>Pacientes</h1> 
		                                                                    <p>10</p> 
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
                                                                    <h1>3</h1>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>Redimidos</p>
                                                                    <h2>3</h2>
                                                                    <p>No redimidos</p>
                                                                    <h2>3</h2>
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
                                                                        <h1>20</h1> 
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
                                                                                <div class="col-md-8">
                                                                                    <p>test</p>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <p class="top-3">100</p>
                                                                                </div> 
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
                                                                                <div class="col-md-4">
                                                                                    <p>test</p>
                                                                                </div>
                                                                                <div class="col-md-3"> 
							                                                    	<p>10 puntos</p> 
                                                                                </div>
                                                                                <div class="col-md-3"> 
							                                                    	<p>Activo</p> 
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

