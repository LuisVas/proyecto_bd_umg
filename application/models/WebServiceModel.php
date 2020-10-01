<?php

class WebServiceModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	
	function validate_email($email){
		$this->db->select('*')
		->from('usuarios')
		->where('correo',$email);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}
	
	function validate_identify($identificacion){
		$this->db->select('*')
		->from('usuarios')
		->where('identificacion',$identificacion);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}
	function addUser($data){

		$data['password'] = md5($data['password']);
		$data['status_ref'] = 0;
		$data['status'] = 1;
		$data['fecha_registro'] = date('Y-m-d');
		$data['website'] = NULL;
		$data['nombre_contacto'] = NULL;
		$data['tel_contacto'] = NULL;
		$data['puesto_contacto'] = NULL;
		$data['nit'] = NULL;
		$data['r_social'] = NULL;
		$data['direccion'] = NULL;
		$this->db->insert('usuarios',$data);

		if($this->db->affected_rows() > 0){
			return array(
	           "success" => 200,
	           "message" => "Usuario agregado exitosamente"
	        );
		}else{
			return false;
		}
	}
	
	function addPrize($data){
		
		if(empty($data['valor_puntos'])){
			$data['valor_puntos'] = 0;
		}else{
			$data['valor_puntos'] = $data['valor_puntos'];
		}
		
		
		if(empty($data['valor_sellos'])){
			$data['valor_sellos'] = 0;
		}else{
			$data['valor_sellos'] = $data['valor_sellos'];
		}
		
		$data['id_usuario'] = 1;
		$data['fecha_creacion'] = date('Y-m-d');
		$this->db->insert('premios',$data);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	
	
	
	function swapCode($codigo_canje){
		$this->db->select('*')
		->from('canjes')
		->where('codigo_canje',$codigo_canje);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}



	function editSwap($data){

		unset($data['id_canje']);
		unset($data['id_premio']);
		unset($data['id_usuario']);
		unset($data['cantidad_premios']);
		unset($data['fecha_canje']);
		$this->db->set(array('codigo_canje'=>$data['codigo_canje'], 'status_redencion' => $data['status_redencion']));
		$this->db->where('codigo_canje',$data['codigo_canje']);
		$this->db->update('canjes',$data);

		if($this->db->affected_rows() > 0){
			return array(
	           "success" => 200,
	           "message" => "Estatus de premio cambiado"
	        );
		}else{
			return array(
	           "success" => 203,
	           "message" => "No se realizo ningun cambio"
	        );
		}
	}

	
	function identidad($identificacion){
		$this->db->select('*')
		->from('usuarios')
		->where('identificacion',$identificacion);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
	
	function puntos($identificacion, $puntos){
		$this->db->select('*')
		->from('usuarios')
		->where('puntos',$puntos);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	function sellos($sellos){
		$this->db->select('*')
		->from('usuarios')
		->where('sellos',$sellos);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function editUser($data,$args){
		
		/*unset($data['status_ref']);
		$data['status'] = 1;
		unset($data['fecha_registro']);
		unset($data['website']);
		unset($data['nombre_contacto']);
		unset($data['tel_contacto']);
		unset($data['puesto_contacto']);
		unset($data['nit']);
		unset($data['r_social']);
		unset($data['direccion']);*/
		
		if(!empty($args['password'])){
			$args['password'] = md5($args['password']);	
			
			$this->db->set($args);
			$this->db->where('identificacion',$data['identificacion']);
			$this->db->update('usuarios');
		}else{
			$this->db->set($args);
			$this->db->where('identificacion',$data['identificacion']);
			$this->db->update('usuarios');	
		}
		

		if($this->db->affected_rows() > 0){
			return array(
	           "success" => 200,
	           "message" => "Actualizacion exitosa"
	        );
		}else{
			return array(
	           "success" => 203,
	           "message" => "No se realizo ningun cambio"
	        );
		}
	}

}

?>