<?php

class GuestDashboardModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function updateDataProduct($data,$ID_PROD){
		$this->db->set($data)
		->where('ID_PROD',$ID_PROD);
		$this->db->update('PROD');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	function deleteProduct($ID_PROD){
    	$this->db->where('ID_PROD', $ID_PROD);
    	$this->db->delete('PROD');

		return true;
	}

	function id_prod(){
		$this->db->select('*')
		->from('PROD')
		->order_by('ID_PROD','DESC');
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else {
		 	return false;
		}
	}


	function products(){
		$this->db->select('*')
		->from('PROD');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function addProduct($data){
		$this->db->insert('PROD',$data);
		return ($this->db->affected_rows() > 0 ? true : false);
	}

	function cardsList(){
		$this->db->select('*')
		->from('TAR');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function updateDataCard($data,$ID_TAR){
		$this->db->set($data)
		->where('ID_TAR',$ID_TAR);
		$this->db->update('TAR');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function addCard($data){

		$this->db->insert('TAR',$data);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function deleteCard($ID_TAR){
    	$this->db->where('ID_TAR', $ID_TAR);
    	$this->db->delete('TAR');

		return true;
	}

	function userList(){
		$this->db->select('*')
		->from('USU');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function updateDataUser($data,$ID_USU){
		$data['CONTRASENA'] = md5($data['CONTRASENA']);
		$this->db->set($data)
		->where('ID_USU',$ID_USU);
		$this->db->update('USU');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function ordersList(){
		$this->db->select('*')
		->from('TRANS');
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}

 ?>
