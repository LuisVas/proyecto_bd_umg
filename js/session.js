$(function(){
	$('#form_login').submit(function(){

		var formData = new FormData($('#form_login')[0]);

		$.ajax({
			url:base_url()+'validate',
			type:'POST',
			dataType:'JSON',
			data:formData,
			cache:false,
			processData:false,
			contentType:false,

			success:function(data){
				if(data == true){
					window.location.href=base_url()+'proveedores';
				}else if(data == 200){
					alertify.error('Ooops! Tu usuario no tiene permisos para accesar en éste dashboard.');
				}else if(data == 202){
					alertify.error('Ooops! Tu cuenta no se encuentra activa, verifica tu correo electrónico.');
				}else if(data == 206){
					alertify.error('Ooops! Has solicitado un cambio de contraseña anteriormente, finaliza con el proceso para poder ingresar a tu cuenta.');
				}else if(data == 207){
					alertify.alert('¡Cambia tu contraseña!', 'Por seguridad, te solicitamos que actualices tu contraseña, para asistencia o consultas, comunícate a 800- 2222-4444.', function(){window.location.href=base_url()+'restore_password';});
				}else{
					alertify.error('Datos de usuario inválidos, intenta de nuevo o solicita tu cambio de contraseña');
				}
			},error:function(error){}
		});

		return false;
	});

	$('#register_button').click(function(){

		var data = new FormData($('#register-meyko')[0]);

		$.ajax({
			url:base_url()+'add_register',
			type:'POST',
			dataType:'JSON',
			data:data,
			cache: false,
			processData: false,
			contentType: false,

			success:function(data){
				if(data == true){
					alertify.alert('Registro exitoso', 'Te hemos enviado un correo de confirmación para tu nueva cuenta.', function(){window.location.href=base_url();});
				}else if(data == 201){
					alertify.alert('Usuario ya registrado', 'Ooops! El correo que ingresaste ya se encuentra registrado.');
				}else if(data == 202){
					alertify.alert('Número de identificación inválido', 'Ooops! El de identificación que ingresaste no es válido.');
				}else{
					alertify.error('Ooops! Ha ocurrido un error, intenta de nuevo.');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});
		return false;
	});

	$('#resetPassForm').submit(function(){

		$.ajax({
			url:base_url()+'restorePass',
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
			url:base_url()+'verify_mail',
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




});
