</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Ver todos los productos | Dashboard</title>

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
                                <h1>Productos</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Todos los productos</h1>
                            <div class="services-table">
                                <form id="prizeList">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Descripción</th>
                                                    <th scope="col">Existencias</th>
                                                    <th scope="col">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(empty($productsList)){
                                                ?>
                                                <p>¡Ooops! ¡Tus tienda no tiene productos registrados!</p>
                                                <?php
                                                }else{
                                                ?>
                                                <?php foreach($productsList as $rec): ?>
                                                <tr>
                                                    <th><?php echo $rec->NOMBRE; ?></th>
                                                    <td><?php echo $rec->DESCRIPCION; ?></td>
                                                    <td><?php echo $rec->EXISTENCIA; ?></td>
                                                    <td><a href="#" id="edProduct" value="<?php echo $rec->ID_PROD; ?>" name="<?php echo $rec->NOMBRE; ?>" desc="<?php echo $rec->DESCRIPCION; ?>" proveedor="<?php echo $rec->PROVEEDOR; ?>" precio="<?php echo $rec->PRECIO; ?>" existencia="<?php echo $rec->EXISTENCIA; ?>" img="<?php echo $rec->IMAGEN; ?>"  categorias="<?php echo $rec->ID_CAT; ?>" subcategorias="<?php echo $rec->ID_SUBCAT; ?>" temporada="<?php echo $rec->ID_TEMP; ?>" data-toggle="modal" data-target="#editProduct" class="prizeDetail">Editar</a></td>
                                                </tr>
                                                <?php endforeach;?>

                                                <?php
                                                }
                                                ?>
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
        <h1 class="modal-title" id="exampleModalCenterTitle">Nuevo producto</h1>
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
                    <a href="<?php echo base_url();?>dashboard/products">
                        <div class="NewServiceBody">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 478" style="enable-background:new 0 0 500 478;" xml:space="preserve">
                            <g>
                                <g>
                                    <path class="st0" d="M119.1,477.2c-7.7,0-15-2.4-21.2-6.9c-11.7-8.5-17.2-23.2-14-37.3l29.1-128l-98.5-86.4
                                        c-10.9-9.5-15.1-24.6-10.6-38.4c4.5-13.7,16.7-23.5,31.1-24.8l130.4-11.9L216.8,23C222.5,9.6,235.5,1,250,1
                                        c14.5,0,27.5,8.6,33.2,21.9l51.5,120.6l130.3,11.9c14.4,1.3,26.6,11.1,31.1,24.8c4.5,13.8,0.3,28.9-10.6,38.4L387.1,305l29,128
                                        c3.2,14.2-2.3,28.8-14.1,37.3c-11.7,8.5-27.3,9.2-39.8,1.7L250,404.9l-112.4,67.2C132,475.5,125.6,477.2,119.1,477.2z M250,22.9
                                        c-5.7,0-10.8,3.4-13.1,8.6l-56.7,132.6l-143.4,13c-5.6,0.5-10.5,4.4-12.2,9.8c-1.8,5.4-0.1,11.4,4.2,15.1l108.4,95l-31.9,140.7
                                        c-1.3,5.6,0.9,11.4,5.5,14.7c4.5,3.3,10.8,3.5,15.6,0.7L250,379.4l123.6,73.9c4.9,3,11,2.7,15.6-0.7c4.6-3.3,6.8-9.1,5.5-14.7
                                        l-31.9-140.7l108.4-95c4.3-3.7,5.9-9.7,4.1-15.1c-1.8-5.4-6.6-9.3-12.2-9.8l-143.3-13L263.1,31.5C260.8,26.3,255.7,22.9,250,22.9z
                                        "/>
                                </g>
                            </g>
                            </svg>

                            <h1>Crear nuevo producto</h1>
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
<div class="modal fade modalServicesBody" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title" id="exampleModalCenterTitle">Detalle del producto</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="form_update_product">
                                <h1>Editar producto</h1>
                                <input type="hidden" id="idPrize" name="ID_PROD" value="">
                                <h2>Imagen del producto</h2>
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
                                    <h2>Información del producto</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre</h1>
                                            <input type="text" id="prizeName" name="NOMBRE" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Descripción</h1>
                                            <textarea id="Desc" name="DESCRIPCION" value=""></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Proveedor</h1>
                                            <input type="text" id="proveedor" name="PROVEEDOR" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Precio</h1>
                                            <input type="number" min="0" id="price" name="PRECIO" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Existencias</h1>
                                            <input type="number" min="0" id="existencias" name="EXISTENCIA" value="">
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Categorías</h1>
                                            <input type="text" id="categorias" name="ID_CAT" value="">
                                            <p style="font-size: 10px;">*Las categorías se ingresan por número. Si son más de una, separarlas con ","</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Subcategorías</h1>
                                            <input type="text" id="subcategorias" name="ID_SUBCAT" value="">
                                            <p style="font-size: 10px;">*Las subcategorías se ingresan por número. Si son más de una, separarlas con ","</p>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Temporadas</h1>
                                            <input type="text" id="temporada" name="ID_TEMP" value="">
                                            <p style="font-size: 10px;">*Las temporadas se ingresan por número. Si son más de una, separarlas con ","</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                            	<div class="col-md-6">
		                            <div class="btn-save">
		                                <button class="btn-save-prize" id="saveProductEdit">Guardar</button>
		                            </div>
                            	</div>
                            	<div class="col-md-6">
		                            <div class="btn-delete">
		                                <a class="btn-delete-prize deletePrize" id="deleteProd">Eliminar</a>
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
