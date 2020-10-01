</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Soporte técnico | Dashboard</title>
        

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">   
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
 </head>
  
<body>
<div class="container-in">
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
                                <h1>Soporte</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body marketingBody">
                            <h1>Contáctanos</h1>
                            <p>Asunto del correo:</p>
                            <input type="text" name="supportSubject">
                            <p>Tipo del problema:</p>
                            <select>
                                <option value="facturacion">Facturación</option>
                                <option value="usuarios">Usuarios</option>
                                <option value="otro">Otro</option>
                            </select>
                            <p>Descripción del problema</p>
                            <textarea placeholder="Cuerpo del mensaje"></textarea>
                        </div>
                        <div class="btn-save">
                            <button class="btn-save-prize">Enviar</button>
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
    $('#soporte').addClass('active-dashboard');
</script>
</body>
</html>

