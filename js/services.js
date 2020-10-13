$(function(){
	
	$('#saveProduct').click(function(){
		
		var data = new FormData($('#productForm')[0]);
		
		$.ajax({
			url:base_url()+'dashboard/addProduct',
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
		
		alertify.confirm('¡Alto ahí vaquero!','¿Estás seguro de eliminar este registro? Esta acción no se puede revertir.',function(){
			$.ajax({
				url:base_url()+'deleteProduct',
				type:'POST',
				data:{
					ID_PROD:$('#idPrize').val()
				},
				success:function(data){
					alertify.alert('Producto eliminado', 'El producto se ha eliminado exitosamente.', function(){window.location.href=base_url()+'dashboard/'+'see-all';});
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
	

	
	$('.cardDetail').click(function(){
		var id = $(this).val();
		var idCard = $(this).attr('value');
		var tarName = $(this).attr('name');
		var tarNumber = $(this).attr('num');
		var tarVenc = $(this).attr('venc');
		var tarCvv = $(this).attr('cvv');
		var tarSaldo = $(this).attr('saldo');

		
		$('#idCard').attr('value', idCard);
		$('#tarName').attr('value', tarName);
		$('#tarNumber').attr('value', tarNumber);
		$('#tarVenc').attr('value', tarVenc);
		$('#tarCvv').attr('value', tarCvv);
		$('#tarSaldo').attr('value', tarSaldo);
		
	});	

	$('#cardForm').submit(function(){
		var data = new FormData($('#cardForm')[0]);
		$.ajax({
			url:base_url()+'updateDataCard',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado la información de la tarjeta con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'cards';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});
	$('#addCard').click(function(){
		
		var data = new FormData($('#NewCardForm')[0]);
		
		$.ajax({
			url:base_url()+'dashboard/addCard',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data){
					alertify.success('Tarjeta agregada exitosamente!');
					$('input[type="text"]').val('');
					$('input[type="number"]').val('');
				}else {
					alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});
	$('.deleteCard').click(function(){
		
		alertify.confirm('¡Alto ahí vaquero!','¿Estás seguro de eliminar este registro? Esta acción no se puede revertir.',function(){
			$.ajax({
				url:base_url()+'deleteCard',
				type:'POST',
				data:{
					ID_TAR:$('#idCard').val()
				},
				success:function(data){
					alertify.alert('Tarjeta eliminada', 'La tarjeta se ha eliminado exitosamente.', function(){window.location.href=base_url()+'dashboard/'+'cards';});
				},error:function(error){
					console.log(JSON.stringify(error));
				}
			});
			return false;
		},function(){});
	});

	$('.userDetail').click(function(){
		var id = $(this).val();
		var idUsu = $(this).attr('value');
		var nomUsu = $(this).attr('name');
		var apUsu = $(this).attr('apellido');
		var edUsu = $(this).attr('edad');
		var sexUsu = $(this).attr('sexo');
		var emUsu = $(this).attr('email');
		var codUsu = $(this).attr('codpostal');
		var nacUsu = $(this).attr('nacionalidad');
		var passUsu = $(this).attr('password');

		
		$('#idUsu').attr('value', idUsu);
		$('#nomUsu').attr('value', nomUsu);
		$('#apUsu').attr('value', apUsu);
		$('#edUsu').attr('value', edUsu);
		$('#sexUsu').attr('value', sexUsu);
		$('#emUsu').attr('value', emUsu);
		$('#codUsu').attr('value', codUsu);
		$('#nacUsu').attr('value', nacUsu);
		$('#passUsu').attr('value', passUsu);
		
	});	

	$('#usereditForm').submit(function(){
		var data = new FormData($('#usereditForm')[0]);
		$.ajax({
			url:base_url()+'updateDataUser',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado la información del usuario con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'clients';});
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