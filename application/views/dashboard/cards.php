</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Tarjetas para compras | Dashboard</title>
        
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
                                <h1>Tarjetas de crédito</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Todas las tarjetas disponibles</h1>
                            <div class="services-table">
                                <form id="prizeList">
                                    <div class="table-responsive">
                                        <table class="table" id="cardTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Número</th>
                                                    <th scope="col">Caducidad</th>
                                                    <th scope="col">CVV</th>
                                                    <th scope="col">Saldo</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <?php 
                                                if(empty($cardsList)){
                                                ?>
                                                <p>¡Ooops! ¡No tienes tarjetas registradas!</p>
                                                <?php
                                                }else{
                                                ?>
                                                <?php foreach($cardsList as $rec): ?>
                                                <tr>
                                                    <th><?php echo $rec->NOMBRE_TAR; ?></th>
                                                    <td><?php echo $rec->NUMERO; ?></td>
                                                    <td><?php echo $rec->FECHA_VENCIMIENTO; ?></td>
                                                    <td><?php echo $rec->CVV; ?></td>
                                                    <td>Q.<?php echo $rec->SALDO; ?></td>
                                                    <td><a href="#" id="edTar" value="<?php echo $rec->ID_TAR; ?>" name="<?php echo $rec->NOMBRE_TAR; ?>" num="<?php echo $rec->NUMERO; ?>" venc="<?php echo $rec->FECHA_VENCIMIENTO; ?>" cvv="<?php echo $rec->CVV; ?>" saldo="<?php echo $rec->SALDO; ?>"  data-toggle="modal" data-target="#editCard" class="cardDetail">Editar</a></td>
                                                </tr>
                                                <?php endforeach;?>

                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                                <div class="add-service">
                                    <button type="button" data-toggle="modal" data-target="#modalServices">
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



<!-- Modal -->
<div class="modal fade modalServicesBody" id="modalServices" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Crear nueva tarjeta</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="NewCardForm">
                                <div class="prize-body">
                                    <h2>Información de tarjeta</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre</h1>
                                            <input type="text" id="" name="NOMBRE_TAR" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Número</h1>
                                            <input type="number" id="" name="NUMERO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Vencimiento</h1>
                                            <input type="number" id="" min="1020" name="FECHA_VENCIMIENTO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>CVV</h1>
                                            <input type="number" min="111" id="" name="CVV" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Saldo</h1>
                                            <input type="number" min="0" id="" name="SALDO" value="">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-save">
                                        <button class="btn-save-prize" id="addCard">Crear</button>
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






<!-- Modal editar premio -->
<div class="modal fade modalServicesBody" id="editCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle de la tarjeta</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="cardForm">
                                <h1>Editar tarjeta</h1>
                                <input type="hidden" id="idCard" name="ID_TAR" value="">
                                <div class="prize-body">
                                    <h2>Información de tarjeta</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre</h1>
                                            <input type="text" id="tarName" name="NOMBRE_TAR" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Número</h1>
                                            <input type="number" id="tarNumber" name="NUMERO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Vencimiento</h1>
                                            <input type="number" id="tarVenc" min="1020" name="FECHA_VENCIMIENTO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>CVV</h1>
                                            <input type="number" min="111" id="tarCvv" name="CVV" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Saldo</h1>
                                            <input type="number" min="0" id="tarSaldo" name="SALDO" value="">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-save">
                                        <button class="btn-save-prize" id="saveCardEdit">Guardar</button>
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
    $('#marketing').addClass('active-dashboard');
</script>
</body>
</html>

