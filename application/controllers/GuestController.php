<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('GuestModel');
	}

	function index(){
		$data['productsList'] = $this->GuestModel->productsList();
		$this->load->view('productos',$data);
	}

	function cart(){
		$this->load->view('cart');
	}

	function checkout(){
		$this->load->view('checkout');
	}

	function quickView(){
		$this->load->view('quick-view');
	}

	function store(){
		$this->load->view('tienda/index');
	}

	function get_product(){
		echo json_encode($this->GuestModel->get_product($this->input->post('id')));
	}

	function get_total($list){
		$total = 0;
		foreach($list as $rec){
			$total += floatval($rec['price']) * floatval($rec['qty']);
		}

		return $total;
	}

	function payment(){
		$list = json_decode($this->input->post('list'),true);
		$data = $this->input->post('form');
		$amount = $this->get_total($list);
		$card = $this->GuestModel->verify_tar($amount);

		// Verify TAR
		if($card){
			$this->GuestModel->discount_products($list);
			$this->GuestModel->add_order($amount);
			echo json_encode($this->GuestModel->payment($amount."",$card));
		}else{
			echo json_encode(201); /*Cantidad insuficiente*/
		}
	}
}
