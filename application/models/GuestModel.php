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

	function verify_tar($amount){
		$tar = get_register_tars($this->session->userdata('user')->ID_TAR);
		if($amount < floatval($tar->SALDO)){
			return $tar;
		}else{
			return false;
		}
	}

	function remove_stock($data,$product){
		foreach($data as $rec){
			if($rec['ID_PROD'] == $product['id']){
				$c = intval($rec['EXISTENCIA']) - intval($product['qty']);
				return ($c < 0 ? 0 : $c);
			}
		}

		return 0;
	}

	function discount_products($list){

		$data = array();
		$products = $this->db->select('*')->from('PROD')->get()->result_array();

		foreach($list as $rec){
			array_push($data,array(
				'ID_PROD'=>$rec['id'],
				'EXISTENCIA'=>$this->remove_stock($products,$rec).""
			));
		}

		$this->db->update_batch('PROD',$data,'ID_PROD');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function payment($amount,$card){

		$c = ($card->SALDO - $amount)."";

		$this->db->set(array('SALDO'=>$c))
		->where('ID_TAR',$card->ID_TAR)
		->update('TAR');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function add_order($amount){
		$user_id = $this->session->userdata('user')->ID_USU ?? 0;
		$this->db->insert('TRANS',array(
			'ID_TRANS'=>get_next_id('TRANS','ID_TRANS'),
			'ESTATUS'=>'Pagado',
			'TOTAL'=>$amount,
			'USU_ID_USU'=>$user_id
		));

		return ($this->db->affected_rows() > 0 ? true : false);
	}
}
?>
