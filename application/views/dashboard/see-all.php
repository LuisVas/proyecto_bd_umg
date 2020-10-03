</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Ver todos los premios | Dashboard</title>
        
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
                                <h1>Premios</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Todos los premios</h1>
                            <div class="services-table">
                                <form id="prizeList">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Descripción</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <tr>
                                                    <th>test</th>
                                                    <td>test</td>
                                                    <td>Activo</td> 
                                                    <td><a href="#" id="editPrize" data-toggle="modal" data-target="#prizeDetail" class="prizeDetail">Editar</a></td>
                                                </tr> 
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
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalCenterTitle">Nuevo premio</h1>
        <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
            </svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="NewServices">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo base_url();?>dashboard/awards">
                        <div class="NewServiceBody">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 975.6 975.6" style="enable-background:new 0 0 975.6 975.6;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M792,618.4l-120.1-24.9l80.2-87.7V0H223.4v505.8l80.2,87.7l-120.1,24.9l138.5,152.4l-22.3,204.8l188-84.5l188,84.5
                                        l-22.3-204.8L792,618.4z M265.5,489.6V42.1h444.6v447.5l-86.4,93.8l-33.3-7.1L487.8,397.7L385.2,576.3l-33.3,7.1L265.5,489.6z
                                         M487.8,845.2l-138.2,62.1l16.5-150.5L264.5,644.6l147.9-31.1l75.4-131.4l75.4,131.4l147.9,31.1L609.5,756.9L626,907.3
                                        L487.8,845.2z"/>
                                </g>
                            </g>
                            </svg>

                            <h1>Crear nuevo premio</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>






<!-- Modal editar premio -->
<div class="modal fade modalServicesBody" id="prizeDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle del premio</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="iAwardProgramEdit">
                                <h1>Editar premio</h1>
                                <input type="hidden" id="idPrize" name="id_premio" value="">
                                <h2>Imagen del premio</h2>
                                <div class="prize-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="prize-img">
                                                <img class="picture awardPictureEdit" id="awardPicPrevEdit" src="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="upload-logo">
                                                <input type="file" id="awardPic" name="photoAward" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Información del premio</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre del premio</h1>
                                            <input type="text"id="prizeName" name="nombre_premio" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Valor en puntos</h1>
                                            <input type="number" id="prizePoints" name="valor_puntos" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Valor en sellos</h1>
                                            <input type="number" id="prizeSellos" name="valor_sellos" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Status</h1>
                                            <select id="Status_Prize" name="status_premio">
                                            	<option value="1" id="statusPrize1">Activado</option>
                                            	<option value="2" id="statusPrize2">Desactivado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h2>Descripción</h2>
                                    <textarea id="Desc" name="desc_premio" value=""></textarea>
                                </div>
                            <div class="row">
                            	<div class="col-md-6">
		                            <div class="btn-save">
		                                <button class="btn-save-prize" id="saveAwardEdit">Guardar</button>
		                            </div>
                            	</div>
                            	<div class="col-md-6">
		                            <div class="btn-delete">
		                                <a class="btn-delete-prize deletePrize" id="deletePrize">Eliminar</a>
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
    $('#services').addClass('active-dashboard');
    $('#vertodos').addClass('active-dashboard');
</script>
</body>
</html>

