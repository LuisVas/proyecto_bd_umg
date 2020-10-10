<?php

class GuestDashboardModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function listUsers(){
		$this->db->select('*')
		->from('LOGIN');
		
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
 
}

 ?>
