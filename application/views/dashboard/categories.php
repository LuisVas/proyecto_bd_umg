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

                <div class="_content">
                  <br><br><button class="btn btn-success _new" data-toggle="modal" data-target="#new_category">Agregar</button><br><br>
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody id="tbody"></tbody>
                  </table>
                </div>

            </div>
        </div>
    </section>

    <section class="footer-menu">
      <?php include("footer-login.php");?>
    </section>
</div>

<div id="new_category" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5>Nueva categoría</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form id="form_category" class="_form">
	      <div class="modal-body">
	        	<h5>Nombre</h5>
	        	<input type="text" name="name" id="cat_name" placeholder="Ingresar" class="form-control" required>

            <div class="content_sub">
              <p>Asignar sub categorías</p>
              <ul class="ul_sub ul_categories"></ul>
              <div>
                <input type="text" class="new_sub_name" class="form-control">
                <button type="button" id="add_new_sub">Agregar</button>
              </div>
              <!-- <div class="new_sub"></div> -->
            </div>
	      </div>
	      <div class="modal-footer">
          <button type="submit" name="button" class="btn btn-success">Agregar</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	  </form>
    </div>

  </div>
</div>

<div id="edit_category" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form id="form_update_category" class="_form">
	      <div class="modal-body">
	        	<h5>Nombre</h5>
	        	<input type="text" name="name" id="cat_update_name" placeholder="Ingresar" class="form-control" required>
	      </div>
	      <div class="modal-footer">
          <button type="submit" name="button" class="btn btn-success">Actualizar</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	  </form>
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
                                <button class="btn btn-warning _edit" data-toggle="modal" data-target="#edit_category" value="'+item.ID_CAT+'">Editar</button>\
                                <button class="btn btn-danger _delete" value="'+item.ID_CAT+'">Eliminar</button>\
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

      $('._new').click(function(){
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

      function get_sub_categories(){
        var data = [];
        $('.ul_sub li').each(function(){
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
              alertify.alert('Categoría agregada correctamente');
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
                $('#cat_update_name').val(data['NOMBRE']);
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
              id:edit_id
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
          alertify.confirm('¿Está seguro de eliminar este registro?',function(){
              $.ajax({
                  url:base_url()+'dashboard/category/delete',
                  type:'POST',
                  dataType:'JSON',
                  data:{
                    id:edit_id
                  },

                  success:function(data){
                    if(data){
                      alertify.alert('Registro eliminado correctamente');
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
