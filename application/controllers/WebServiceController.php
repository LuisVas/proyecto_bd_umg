<?php

class WebServiceController extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET,POST,OPTIONS,PUT,DELETE');
		
		$this->load->model("WebServiceModel");
	}
	
	function addUser(){
		$data = json_decode(file_get_contents('php://input'),true);
		
		if(!empty($data['nombre']) && !empty($data['correo']) && !empty($data['identificacion']) && !empty($data['id_tipo_user']) && !empty($data['password']) && !empty($data['puntos']) && !empty($data['sellos']) && !empty($data['id_rol'])){
			if($data['id_rol']>4){
				echo json_encode(array(
						"success"=>400,
						"message"=>"Rol incorrecto"
					));  /*Id_rol incorrecto*/
			}else{
				if($this->WebServiceModel->validate_email($data['correo']) && $this->WebServiceModel->validate_identify($data['identificacion']) ){
					if($data['id_tipo_user'] <= 4){
						if(strlen($data['identificacion']) == 13){
							echo json_encode(($this->WebServiceModel->addUser($data)));	
						}else {
							echo json_encode(array("success"=>203,"message"=>"Identificacion incorrecta")); /*Identificacion incorrecta*/
						}
					}else{
						echo json_encode(array("success"=>401,"message"=>"Id tipo incorrecto")); /*Id tipo incorrecto*/
					}
				}else{
					echo json_encode(array(
						"success"=>202,
						"message"=>"Usuario ya existe"
					)); /*El usuario ya existe*/
				}
			}	
		}else{
			echo json_encode(false);
		}
	}
	
	
	/*function addPrize(){
		$data = json_decode(file_get_contents('php://input'),true);
		
		
		if(!empty($data['nombre_premio']) && !empty($data['desc_premio']) && !empty($data['img_premio']) && !empty($data['status_premio'])){
			echo json_encode(($this->WebServiceModel->addPrize($data)));
		}else{
			echo json_encode(false);
		}
	}*/
	
	/*function swapCode(){
		echo json_encode($this->WebServiceModel->swapCode($this->input->post('codigo_canje')));
	}*/

	function editSwap(){
		$data = json_decode(file_get_contents('php://input'),true);
		
		
		if(!empty($data['codigo_canje']) && !empty($data['status_redencion']) ){
			if($this->WebServiceModel->swapCode($this->input->post('codigo_canje'))){		
				echo json_encode(array(
						"success"=>202,
						"message"=>"Código de canje no existe"
				));  /*El código no existe*/
			}else{
				echo json_encode(($this->WebServiceModel->editSwap($data)));
				
			}
			
		}else{
			echo json_encode(false);
		}
	}
	


	function editUser(){
		$data = json_decode(file_get_contents('php://input'),true);
		
		
		
		$args = array();
		$user = $this->WebServiceModel->identidad($data['identificacion']);

		if(!empty($data['identificacion'])){
			
			if($user){
				
				if(isset($data['puntos'])){
					$args['puntos'] = intval($user->puntos) + intval($data['puntos']);
				}
		
				if(isset($data['sellos'])){
					$args['sellos'] = intval($user->sellos) + intval($data['sellos']);
				}
				if(isset($data['nombre'])){
					$args['nombre'] = $data['nombre'];
				}
		
				if(isset($data['correo'])){
					$args['correo'] = $data['correo'];
				}
		
				if(isset($data['id_tipo_user'])){
					$args['id_tipo_user'] = $data['id_tipo_user'];
				}
		
				if(isset($data['password'])){
					$args['password'] = $data['password'];
				}
		
				if(isset($data['id_rol'])){
					$args['id_rol'] = $data['id_rol'];
				}
		
		
				echo json_encode($this->WebServiceModel->editUser($data,$args)); /*El usuario si existe*/
				
			}else{
				echo json_encode(array(
						"success"=>202,
						"message"=>"El usuario no existe"
				)); /*El usuario no existe*/
			}
			
		}else{
			echo json_encode(false);
		}
	}
	
}

?>