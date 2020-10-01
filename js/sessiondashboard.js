$(function(){
	$('#loginFormMeyko').submit(function(){

		$.ajax({
			url:base_url()+'dashboard/validate',
			type:'POST',
			dataType:'JSON',
			data:{
				username_login:$('#loginEmail').val(),
				password_login:$('#loginPassword').val()
			},

			success:function(data){
				if(data == true){
					window.location.href=base_url()+'dashboard';
				}else if(data == 200){
					alertify.error('Ooops! Tu usuario no tiene permisos para accesar en éste dashboard.');
				}else if(data == 202){
					alertify.error('Ooops! Tu cuenta no se encuentra activa, verifica tu correo electrónico.');
				}else if(data == 206){
					alertify.error('Ooops! Has solicitado un cambio de contraseña anteriormente, finaliza con el proceso para poder ingresar a tu cuenta.');
				}else{
					alertify.error('Datos de usuario inválidos, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});


	$('#resetPassForm').submit(function(){

		$.ajax({
			url:base_url()+'dashboard/restorePass',
			type:'POST',
			dataType:'JSON',
			data:{
				password:$('#ResetPassword').val(),
				id_usuario:$('#id_usuario').val()
			},
			success:function(data){
				if(data){
					alertify.alert('¡Cambio de contraseña exitoso!', '¡Se ha cambiado tu contraseña con éxito!', function(){ window.location.href=base_url();});
					$('input[type="password"]').val('');
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		})
		return false;
	})

	$('#sendPassword').click(function(){
		
		var data = new FormData($('#emailForm')[0]);
		
		$.ajax({
			url:base_url()+'dashboard/verify_mail',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data == true){
					alertify.success('Te hemos enviado un correo con el link para reestablecer tu contraseña');
					$('input[type="email"]').val('');
				}else if(data == 204){
					alertify.error('Ooops! El correo que ingresaste no se encuentra registrado.');
				}else if(data == 202){
					alertify.error('Ooops! La cuenta que intentas reestablecer no se encuentra activa.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});

	$('#settingsDashboard').submit(function(){

		$.ajax({
			url:base_url()+'updateDataDashboard',
			type:'POST',
			dataType:'JSON',
			data:{
				nombre:$('#nombre').val(),
				website:$('#website').val(),
				nombre_contacto:$('#nombre_contacto').val(),
				tel_contacto:$('#tel_contacto').val(),
				puesto_contacto:$('#puesto_contacto').val(),
				nit:$('#nit').val(),
				r_social:$('#r_social').val(),
				direccion:$('#direccion').val()	
			},
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado tu información con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'settings';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});
	
		
	$('.clientModal').click(function(){
		var id = $(this).val('');
		var name = $(this).attr('name');
		var email = $(this).attr('email');
		var identificacion = $(this).attr('identificacion');
		var tipo = $(this).attr('tipo');
		var puntos = $(this).attr('puntos');
		var sellos = $(this).attr('sellos');	
		var registro = $(this).attr('registro');
		var status = $(this).attr('status');
		var idUser = $(this).attr('value');
		var rol = $(this).attr('id_rol');
		var password = $(this).attr('password');
		
		$('#idUser').attr('value',idUser);
		$('#nameClient').attr('value',name);
		$('#puntosClient').attr('value',puntos);
		$('#sellosClient').attr('value',sellos);
		$('#emailClient').attr('value',email);
		$('#emailClient').attr('placeholder',email);
		$('#regDate').attr('value',registro);
		$('#regDate').attr('readonly','readonly');
		$('#deleteClient').attr('value',idUser);
		$('#idRol').attr('value',rol);
		//$('#passClient').attr('value',password);
		
		if(tipo == 1){
			$('#typeClient1').attr('selected', 'selected');
			$('#typeClient2').removeAttr('selected', 'selected');
			$('#typeClient3').removeAttr('selected', 'selected');
			$('#typeClient4').removeAttr('selected', 'selected');
		}else if(tipo == 2){
			$('#typeClient2').attr('selected','selected');
			$('#typeClient1').removeAttr('selected', 'selected');
			$('#typeClient3').removeAttr('selected', 'selected');
			$('#typeClient4').removeAttr('selected', 'selected');
		}else if(tipo == 3){
			$('#typeClient3').attr('selected','selected');
			$('#typeClient2').removeAttr('selected', 'selected');
			$('#typeClient1').removeAttr('selected', 'selected');
			$('#typeClient4').removeAttr('selected', 'selected');
		}else if(tipo == 4){
			$('#typeClient4').attr('selected','selected');
			$('#typeClient2').removeAttr('selected', 'selected');
			$('#typeClient3').removeAttr('selected', 'selected');
			$('#typeClient1').removeAttr('selected', 'selected');
		}
		
		if(status == 1){
			$('#statusClient1').attr('selected', 'selected');
			$('#statusClient2').removeAttr('selected');
			$('#statusClient3').removeAttr('selected');
		}else if(status == 2){
			$('#statusClient2').attr('selected','selected');
			$('#statusClient1').removeAttr('selected');
			$('#statusClient3').removeAttr('selected');
		}else if(status == 3){
			$('#statusClient3').attr('selected','selected');
			$('#statusClient2').removeAttr('selected');
			$('#statusClient1').removeAttr('selected');
		}
		
		if(identificacion.length == 0){
			$('#idClient').attr('placeholder','N/A');
			$('#idClient').attr('readonly','readonly');
			$('#idClient').removeAttr('value');
		}else{
			$('#idClient').attr('value',identificacion);
			$('#idClient').removeAttr('readonly');
			$('#idClient').removeAttr('placeholder');
		}
		
		if(rol == 1){
			$('#user_rol').css('display','none');
			$('#adminRol').addClass('displayRol');
		}else if(rol == 2){
			$('#rol2').attr('selected', 'selected');
			$('#rol3').removeAttr('selected', 'selected');
			$('#rol4').removeAttr('selected', 'selected');
		}else if(rol == 3){
			$('#rol3').attr('selected','selected');
			$('#rol2').removeAttr('selected', 'selected');
			$('#rol4').removeAttr('selected', 'selected');
		}else if(rol == 4){
			$('#rol4').attr('selected','selected');
			$('#rol2').removeAttr('selected', 'selected');
			$('#rol3').removeAttr('selected', 'selected');
		}

	
	});

		
	$('#clientForm').submit(function(){

		$.ajax({
			url:base_url()+'updateDataClient',
			type:'POST',
			dataType:'JSON',
			data:{
				id_usuario:$('#idUser').val(),
				nombre:$('#nameClient').val(),
				puntos:$('#puntosClient').val(),
				sellos:$('#sellosClient').val(),
				correo:$('#emailClient').val(),
				identificacion:$('#idClient').val(),
				id_tipo_user:$('#typeClient').val(),
				status:$('#statusClient').val(),
				password:$('#passClient').val(),
				id_rol:$('#user_rol').val()
			},
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado tu información con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'clients';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});


	$('.deleteClient').click(function(){
		var id_usuario = $(this).attr('value');
		
		alertify.confirm('Eliminar usuario','¿Estás seguro de eliminar este registro? Esta acción no se puede revertir.',function(){
			$.ajax({
				url:base_url()+'deleteClient',
				type:'POST',
				data:{
					id_usuario:id_usuario
				},
				success:function(data){
					alertify.alert('Usuario eliminado', 'El usuario se ha eliminado exitosamente.', function(){window.location.href=base_url()+'dashboard/'+'clients';});
				},error:function(error){
					console.log(JSON.stringify(error));
				}
			});
			return false;
		},function(){});
	});

	

	$('#CreateDataClient').click(function(){
		
		var data = new FormData($('#NewClientForm')[0]);
		
		$.ajax({
			url:base_url()+'add_register_user',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data == true){
					alertify.alert('Registro exitoso', 'El usuario se ha creado exitosamente.', function(){window.location.href=base_url()+'dashboard/'+'clients';});
				}else if(data == 201){
					alertify.alert('Usuario ya registrado', 'Ooops! El correo que ingresaste ya se encuentra registrado.');
				}else{
					alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});
	

	
	$('#sendMarketing').submit(function(){
		

		
		var data = new FormData($('#sendMarketing')[0]);
		
		$.ajax({
			url:base_url()+'sendMarketing',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data == true){
					alertify.alert('¡Envío exitoso!', '¡Se ha enviado tu email con éxito!', function(){ window.location.href=base_url()+'dashboard/'+'marketing';});
				}else if(data == 202){
					alertify.alert('¡Ooops!', 'Al parecer ya enviaste un correo en las últimas 24 horas, para evitar el envío de spam, únicamente podrás enviar un correo por día.', function(){ window.location.href=base_url()+'dashboard/'+'marketing';});		
				}else {
					alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});


 	

});

