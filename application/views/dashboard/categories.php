</!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>Categorías | Dashboard</title>

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
                                <h1>Categorías</h1>
                            </div>
                            <div class="col-md-6">
                                <?php include("head-dashboard.php");?>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-content">
                        <div class="seeall-body">
                            <h1>Todas las categorías disponibles</h1>
                            <div class="services-table">
                                <form id="prizeList">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Nombre</th>
                                                  <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody"></tbody>
                                        </table>
                                    </div>
                                </form>
                                <div class="add-service">
                                    <button type="button" class="_new" data-toggle="modal" data-target="#new_category">
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
<div id="new_category" class="modal fade modalServicesBody" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title">Crear nueva categoría</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="form_category" class="_form">
                          <div class="prize-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <h2>Nombre</h2>
                                  <input type="text" name="name" id="cat_name" placeholder="Ingresar" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                  <h2>Asignar sub categorías</h2>
                                  <ul class="ul_sub ul_categories"></ul>
                                </div>
                                <div class="col-md-12">
                                  <input type="text" class="new_sub_name" class="form-control">
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="btn-save">
                                          <button class="btn-save-prize" id="add_new_sub">Agregar</button>
                                      </div>
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


 
<!-- Modal -->
<div  id="edit_category" class="modal fade modalServicesBody" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bills">
                <h1 class="modal-title">Editar categoría</h1>
                <button type="button" class="closeModal" data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path d="M512,60.3L451.7,0L256,195.7L60.3,0L0,60.3L195.7,256L0,451.7L60.3,512L256,316.3L451.7,512l60.3-60.3L316.3,256L512,60.3z"/>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="NewServices">
                    <div class="bills-body">
                        <form id="form_update_category" class="_form">
                                <div class="prize-body">
                                    <h2>Información de categoría</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>Nombre</h1>
                                            <input type="text" name="name" id="cat_update_name" placeholder="Ingresar" class="form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Asignar subcategorías existentes</h1>
                                            <ul class="ul_sub ul_categories update"></ul>
                                        </div>
                                        <div class="col-md-12">
                                            <h1>Añadir subcategoría nueva</h1>
                                            <input type="text" class="new_sub_name2" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                          <div class="btn-save">
                                            <button type="button" class="btn-save-prize" id="add_new_sub2">Agregar</button>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="btn-save">
                                        <button type="submit" class="btn-save-prize">Actualizar</button>
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
  $('#categories').addClass('active-dashboard');
  $(document).ready(function(){

    var edit_id = 0;

      function list(){

        $('.tr').remove();

        $.ajax({
            url:base_url()+'dashboard/category/list',
            type:'GET',
            dataType:'JSON',

            success:function(data){

              var html = '';

              if(data){
                $.each(data,function(i,item){
                    html += '<tr class="tr">';
                      html += '<td>'+item.ID_CAT+'</td>';
                      html += '<td>'+item.NOMBRE+'</td>';
                      html += '<td>\
                                <button type="button" class="btnsCat _edit" data-toggle="modal" data-target="#edit_category" value="'+item.ID_CAT+'">Editar</button>\
                                <button type="button" class="btnsCat _delete" value="'+item.ID_CAT+'">Eliminar</button>\
                              </td>';
                    html += '</tr>';
                });
              }else{
                html += '<tr class="tr">';
                  html += '<td colspan="3" align="center">No hay categorías agregadas</td>';
                html += '</tr>';
              }

              $('#tbody').html(html);

            },error:function(error){

            }
        });
      }

      function list_sub_categories(){
        $.ajax({
            url:base_url()+'dashboard/category/list_sub_categories',
            type:'GET',
            dataType:'JSON',
            success:function(data){

              if(data){
                var html = '';
                $.each(data,function(i,item){
                    html += '<li><label><input type="checkbox" value="'+item.ID_SUBCAT+'" class="" > <span>'+item.NOMBRE+'</span></label></li>';
                });

                $('.ul_sub').html(html);
              }

            },error:function(error){

            }
        });
      }

      $('body').on('click','._new',function(){
          list_sub_categories();
      });

      function add_new_sub(){
        var value = $('.new_sub_name').val();
        $.ajax({
            url:base_url()+'dashboard/category/add_sub_categories',
            type:'POST',
            dataType:'JSON',
            data:{
              name:value
            },

            success:function(data){
              if(data){
                list_sub_categories();
                $('.new_sub_name').val('');
              }
            },error:function(error){

            }
        });
      }

      $('.new_sub_name').keypress(function(e){
          var key = e.which;
          if(key == 13){
            add_new_sub();
            return false;
          }
      });
      $('#add_new_sub').click(function(){
          add_new_sub();
      });

      function add_new_sub2(){
        var value = $('.new_sub_name2').val();
        $.ajax({
            url:base_url()+'dashboard/category/add_sub_categories',
            type:'POST',
            dataType:'JSON',
            data:{
              name:value
            },

            success:function(data){
              if(data){
                list_sub_categories();
                $('.new_sub_name2').val('');
              }
            },error:function(error){

            }
        });
      }

      $('.new_sub_name2').keypress(function(e){
          var key = e.which;
          if(key == 13){
            add_new_sub2();
            return false;
          }
      });
      $('#add_new_sub2').click(function(){
          add_new_sub2();
      });

      function get_sub_categories(edit = false){
        var data = [];
        var doom = ".ul_sub"+(edit ? '.update' : '')+" li";
        $(doom).each(function(){
          if($(this).find('input').is(':checked')){
            data.push({value:$(this).find('input').val()})
          }
        });

        return data;
      }

      $('#form_category').submit(function(){
        $.ajax({
            url:base_url()+'dashboard/category/add',
            type:'POST',
            dataType:'JSON',
            data:{
              name:$('#cat_name').val(),
              sub:get_sub_categories()
            },

            success:function(data){
              $('#new_category').modal('toggle');
              alertify.alert('¡Urra!','Categoría agregada correctamente');
              list();
            },error:function(){
              alertify.alert('Ocurrió un error, intente más tarde');
            }
        });

        return false;
      });

      $('body').on('click','._edit',function(){
          edit_id = $(this).val();

          $.ajax({
            url:base_url()+'dashboard/category/get',
            type:'POST',
            dataType:'JSON',
            data:{
              id:edit_id
            },

            success(data){
              if(data){
                $('#cat_update_name').val(data['data']['NOMBRE']);
                if(data['sub']){
                  var html = '';
                  $.each(data['sub'],function(i,item){
                      html += '<li><label><input type="checkbox" '+(item.selected ? 'checked' : '')+' value="'+item.id_subcat+'"> <span>'+item.nombre+'</span></label></li>';
                  });

                  $('.ul_sub').html(html);
                }
              }
            },error:function(error){

            }
          });
      });

      $('#form_update_category').submit(function(){

        $.ajax({
            url:base_url()+'dashboard/category/update',
            type:'POST',
            dataType:'JSON',
            data:{
              name:$('#cat_update_name').val(),
              id:edit_id,
              sub:get_sub_categories(true)
            },

            success:function(data){
              alertify.alert('Registro eliminado correctamente');
              $('#edit_category').modal('toggle');
              list();
            },error:function(error){
              alertify.success('Ocurrió un error, intente más tarde');
            }
        });

        return false;
      });

      $('body').on('click','._delete',function(){
          edit_id = $(this).val();
          alertify.confirm('¡Alto ahí vaquero!','¿Está seguro de eliminar este registro?',function(){
              $.ajax({
                  url:base_url()+'dashboard/category/delete',
                  type:'POST',
                  dataType:'JSON',
                  data:{
                    id:edit_id
                  },

                  success:function(data){
                    if(data){
                      alertify.alert('¡Categoría eliminada!','La categoría se ha eliminado exitosamente.');
                      list();
                    }
                  },error:function(error){
                    alertify.success('Ocurrió un error, intente más tarde');
                  }
              });
          },function(){});
      });

      list();
  });
</script>

</body>
</html>
