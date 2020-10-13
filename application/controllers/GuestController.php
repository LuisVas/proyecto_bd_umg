<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('GuestModel');
	}

	function index(){
		$this->load->view('productos');
	}

	function cart(){
		$this->load->view('cart');
	}

	function checkout(){
		$this->load->view('checkout');
	}

	function store(){

		$this->load->view('tienda/index');
	}

}
