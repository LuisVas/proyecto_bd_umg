</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Crear producto | Dashboard</title>

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
                        <form id="productForm" >
                            <div class="loyalty-content">
                                <h1>Crear producto</h1>
                                <h2>Imagen del producto</h2>
                                <div class="prize-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="prize-img">
                                                <img class="picture" id="awardPicPrev" src="<?php echo base_url() ?>images/uploadimage.png">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="upload-logo">
                                                <input type="file" id="awardPic" name="IMAGEN">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Información del producto</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h1>Nombre</h1>
                                            <input type="text" name="NOMBRE" placeholder="Ej. Camisa Polo">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Proveedor</h1>
                                            <input type="text" name="PROVEEDOR" placeholder="Ej. Polo Ralf Lauren">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Precio en GTQ.</h1>
                                            <input type="number" min="0" name="PRECIO">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Existencias</h1>
                                            <input type="number" min="0" name="EXISTENCIA">
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Categorías</h1>
                                            <?php $categories = get_the_categories(); ?>
                                            <?php if($categories){ ?>
                                              <ul class="ul_categories">
                                                <?php foreach($categories as $rec){ ?>
                                                  <li>
                                                    <label class="block w100 pointer">
                                                      <input type="checkbox" class="select_category" value="<?= $rec->ID_CAT; ?>" name="<?= $rec->NOMBRE; ?>">
                                                      <span><?= $rec->NOMBRE; ?></span>
                                                    </label>
                                                  </li>
                                                <?php } ?>
                                              </ul>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-4">
                                            <h1>Subcategorías</h1>
                                            <!-- <input type="text" name="ID_SUBCAT" placeholder="Ej. 1,2,3"> -->
                                            <div>
                                              <ul class="ul_sub"></ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Temporada</h1>
                                            <input type="number" name="ID_TEMP" placeholder="Ej. 1,2,3">
                                        </div>
                                        <div class="col-md-12">
                                            <h2>Descripción</h2>
                                            <textarea id="descTA" name="DESCRIPCION"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-save">
                                <button class="btn-save-prize" id="saveProduct">Guardar</button>
                            </div>
                        </form>
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
    $('#services').addClass('active-dashboard');
    $('#premios').addClass('active-dashboard');
</script>

<script type="text/javascript">
  $(document).ready(function(){

      function get_sub_categories(edit = false){
        var data = "";
        var count = 0;
        $('.ul_categories li').each(function(){
          if($(this).find('input').is(':checked')){
            data += (count > 0 ? "," : "") + $(this).find('input').val();
            count++;
          }
        });

        return data;
      }

      $('body').on('click','.select_category',function(){
           var id = $(this).val();

           $.ajax({
              url:base_url()+'dashboard/category/get_sub_categories',
              type:'POST',
              dataType:'JSON',
              data:{
                sub:get_sub_categories()

              },success:function(data){
                if(data){
                  var html = '';
                  $.each(data,function(i,item){
                    html += '\
                      <li>\
                        <label class="block w100 pointer">\
                          <input type="checkbox" class="select_sub_category" value="'+item.ID_SUBCAT+'" name="'+item.NOMBRE+'">\
                          <span>'+item.NOMBRE+'</span>\
                        </label>\
                      </li>\
                    ';
                  });

                  $('.ul_sub').html(html);
                }else{
                  $('.ul_sub').html('');
                }
              },error:function(error){

              }
           });
      });
  });
</script>

<style media="screen">
  .ul_sub{padding: 0px;margin:0px;}
  .ul_sub li{list-style: none;width:100%;}
  .ul_sub li label{display: flex;width:100%;align-items: center;}
  .ul_sub li label input{max-width: 10px;margin-right: 10px;}
</style>

</body>
</html>
