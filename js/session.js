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
					window.location.href=base_url()+'/dashboard/orders';
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





});
