$(function(){
	
	$('#saveAward').click(function(){
		
		var data = new FormData($('#iAwardProgram')[0]);
		
		$.ajax({
			url:base_url()+'dashboard/add_instantAward',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data){
					alertify.success('¡Premio agregado exitosamente!');
					$('input[type="text"]').val('');
					$('#awardPicPrev').attr('src','../images/uploadimage.png');
					$('#awardPic').val('');
					$('input[type="number"]').val('');
					$('#descTA').val('');
				}else {
					alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});

	$('#awardPic').change(function(e){
		var doom = $(this);
		var imagenes = [];
		var files = e.target.files;
		var _URL = window.URL || window.webkitURL;

		var file, img;
		if ((file = this.files[0])) {
			 img = new Image();
			 img.onload = function () {					 	

				 for (var i = 0, f; f = files[i]; i++) {
					 if (!f.type.match('image.*')) {
						 continue;
					 }
 					
 					var reader = new FileReader();
					reader.onload = (function(theFile) {
						
					return function(e) {
						
						if(img.naturalWidth > 768 || img.naturalHeight > 2432){
							alertify.alert('Uuups', 'La imagen que intentas subir excede los límites permitidos, te sugerimos que la misma tenga las siguientes dimensiones: 768 x 2432 píxeles.');
							return;
						}else{
							console.log("La imagen tiene los parámetros solicitados")
						}

						// Show Preview
						$('.picture').attr('src',e.target.result);

					 };
					 })(f);
					 reader.readAsDataURL(f);
				 }
			 };
			 img.src = _URL.createObjectURL(file);
		}
	});
	
	$('.prizeDetail').click(function(){
		var id = $(this).val();
		var idPrize = $(this).attr('value');
		var img = $(this).attr('img');
		var nombre = $(this).attr('name');
		var desc = $(this).attr('desc');
		var proveedor = $(this).attr('proveedor');
		var precio = $(this).attr('precio');
		var existencia = $(this).attr('existencia');
		var categorias = $(this).attr('categorias');
		var subcategorias = $(this).attr('subcategorias');
		var temporada = $(this).attr('temporada');

		
		$('#idPrize').attr('value', idPrize);
		$('#awardPicPrevEdit').attr('src', '../'+img);
		$('#awardPic').attr('value', '../'+img);
		$('#prizeName').attr('value', nombre);
		$('#proveedor').attr('value', proveedor);
		$('#price').attr('value', precio);
		$('#existencias').attr('value', existencia);
		$('#categorias').attr('value', categorias);
		$('#subcategorias').attr('value', subcategorias);
		$('#temporada').attr('value',temporada);
		$('#Desc').val(desc);

		
	});
	
	$('.deletePrize').click(function(){
		var id_premio = $(this).attr('value');
		
		alertify.confirm('Eliminar premio','¿Estás seguro de eliminar este registro? Esta acción no se puede revertir.',function(){
			$.ajax({
				url:base_url()+'deletePrize',
				type:'POST',
				data:{
					id_premio:id_premio
				},
				success:function(data){
					alertify.alert('Premio eliminado', 'El premio se ha eliminado exitosamente.', function(){window.location.href=base_url()+'dashboard/'+'see-all';});
				},error:function(error){
					console.log(JSON.stringify(error));
				}
			});
			return false;
		},function(){});
	});


	$('#productForm').submit(function(){
		var data = new FormData($('#productForm')[0]);
		$.ajax({
			url:base_url()+'updateDataProduct',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado tu información del premio con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'see-all';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});
	
	$('.swapDetail').click(function(){
		var id = $(this).val();
		var id_canje = $(this).attr('value');
		var date = $(this).attr('date');
		var name = $(this).attr('name');
		var identificacion = $(this).attr('identificacion');
		var codigo_canje = $(this).attr('codigo_canje');
		var cantidad_premios = $(this).attr('cantidad_premios');
		var nombre_premio = $(this).attr('nameprize');
		var status_redencion =$(this).attr('status_canjeo');
		
		
		$('#idCanje').attr('value', id_canje);
		$('#nameCanje').attr('value', name);
		$('#idCliente').attr('value', identificacion);
		$('#namePremio').attr('value', nombre_premio);
		$('#cantPremios').attr('value', cantidad_premios);
		$('#codCanje').attr('value', codigo_canje);
		$('#dateCanje').attr('value', date);
		$('#prizeStatus').attr('value', status_redencion);
		
		if(status_redencion == 1 ){
			$('#prizeNotChange').attr('selected', 'selected');
			$('#prizeChanged').removeAttr('selected');
		}else{
			$('#prizeNotChange').removeAttr('selected');
			$('#prizeChanged').attr('selected', 'selected');
		}
		
	});
	

	$('#canjeFormEdit').submit(function(){

		$.ajax({
			url:base_url()+'updateSwap',
			type:'POST',
			dataType:'JSON',
			data:{
				id_canje:$('#idCanje').val(),
				status_redencion:$('#prizeStatus').val()
			},
			success:function(data){
				if(data){
					alertify.alert('¡Premio redimido!', '¡El premio se ha redimido exitosamente!', function(){ window.location.href=base_url()+'dashboard/'+'swaps';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});
	
})