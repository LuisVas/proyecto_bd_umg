<?php

class GuestModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function listPrizes(){
		$this->db->select('*')
		->from('premios')
		->group_by('premios.id_premio')
		->order_by('premios.id_premio','ASC');
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function add_service($data){

		$data['id_usuario'] = $this->session->userdata('user_id');
		// var_dump($data);

		$this->db->insert('servicios',$data);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function updateData($nombre,$id){
		$nombre = $nombre;

		$this->db->set(array('nombre'=>$nombre));
		$this->db->where('id_usuario',$id);
		$this->db->update('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function add_points($points,$user,$id_user){
		$this->db->set('puntos',$points)
		->where('identificacion',$user->identificacion)
		->update('usuarios');
		
		if($this->db->affected_rows() > 0){
			$this->db->set(array('status_ref'=>'1'))->where('id_usuario',$id_user->id_usuario)->update('usuarios');
			return true;
		}else{
			return false;
		}
	}


	function changePrize($puntos,$sellos,$id){
		$this->db->set(array('puntos'=>$puntos,'sellos'=>$sellos))
		->where('id_usuario',$id)
		->update('usuarios');
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function addChangedPrize($data){
		$data['id_usuario'] = $this->session->userdata('user_id');
		
		$this->db->insert('canjes',$data);
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
		
	}
	
	function listSwapsClient(){
		
		
		$this->db->select('
			canjes.*,
			premios.nombre_premio,premios.desc_premio,premios.img_premio
		');
	    $this->db->from('premios');
	    $this->db->join('canjes', 'premios.id_premio = canjes.id_premio');
	    $this->db->where('canjes.id_usuario',$this->session->userdata('user_id'));
	 
	    $query = $this->db->get();
	
	  	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

}

 ?>
