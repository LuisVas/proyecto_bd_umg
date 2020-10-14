<?php

class GuestModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function productsList(){
		$this->db->select('*')
		->from('PROD');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function get_product($id){
		$this->db->select('*')
		->from('PROD')
		->where('ID_PROD',$id);

		$query = $this->db->get();
		return ($query->num_rows() > 0 ? $query->row() : false);
	}

}

 ?>
