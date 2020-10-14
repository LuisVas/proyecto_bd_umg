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

}
