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
}

 ?>
