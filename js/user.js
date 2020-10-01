	
$(document).ready(function(){
	$('#profile').submit(function(){

		$.ajax({
			url:base_url()+'updateData',
			type:'POST',
			dataType:'JSON',
			data:{
				nombre:$('#nombre').val()
			},
			success:function(data){
				if(data){
					alertify.alert('¡Actualización de información!', '¡Se ha cambiado tu información con éxito!', function(){ window.location.href=base_url()+'profile';});
				}else{
					alertify.error('Ha ocurrido un error, intenta de nuevo');
				}
			},error:function(error){
				console.log(JSON.stringify(error));
			}
		});

		return false;
	});
	
	$('#send_points').submit(function(){
		
		$.ajax({
			url:base_url()+'add_points',
			type:'POST',
			dataType:'JSON',
			data:{
				points:$('#points_id').val()
			},
			
			success:function(data){
				if(data === true){
					alertify.alert('¡Urra!', '¡Se han acreditado los puntos exitosamente al perfil que te ha referido!', function(){ window.location.href=base_url()+'referral';});
				}else if (data == 201){
					alertify.alert('¡Ooops!', '¡Ya has ingresado un perfil anteriormente!', function(){ window.location.href=base_url()+'referral';});
				}else if (data == 202){
					alertify.alert('¡Usuario no existe!', '¡El número de identificación que ingresaste no existe, intenta de nuevo!', function(){ window.location.href=base_url()+'referral';});
				}
			},error:function(error){
				
			}
		});
		
		return false;	
	});
	
	
	
	$('.change-prize').click(function(){
		var id = $(this).val();
		var points = $(this).attr('points');
		var name = $(this).attr('name');
		var sellos = $(this).attr('sellos');
		var id_premio = $(this).attr('value');
		
		$('#id_premio').attr('value',id_premio);
		$('#puntosInput').attr('value', points);
		$('#sellosInput').attr('value', sellos);
		
		
		if(sellos == 0){
		  $('#valpremio').text(points+' puntos');
		}else{
		  $('#valpremio').text(sellos+' sellos');
		}
		$('#nombrepremio').text(name);	
	
	});
	

	
	$('#changePrizeForm').submit(function(){
		$('#canjePremio').css('display','none');
		$.ajax({
			url:base_url()+'change_prize',
			type:'POST',
			dataType:'JSON',
			data:{
				valPrizes:$('#valPrizes').val(),
				id_premio:$('#id_premio').val(),
				puntos:$('#puntosInput').val(),
				sellos:$('#sellosInput').val()
			},
			success:function(data){
				if(data === true){
					alertify.alert('¡Urra!', '¡Has canjeado exitosamente el premio, revisa el código en la pestaña de premios canjeados!', function(){ window.location.href=base_url();});
				}else if (data === 206){
					alertify.alert('¡Ooops!', '¡No tienes los puntos/sellos suficientes para canjear este premio!', function(){ window.location.href=base_url();});
				}
			},error:function(error){
				
			}
		});
		
		return false;	
	
	});
	

	
	
	
	
});