<?php

class SessionController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('SessionModel');
	}

	function index(){
		$this->load->view('login');
	}

	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url() .'login');
	}

	function register(){
		$this->load->view('register');
	}

	function validate(){
		echo json_encode($this->SessionModel->validate($this->input->post()));
	}

	function validate_user(){
		echo json_encode($this->SessionModel->validate_user($this->input->post()));
	}

	function add_register(){
		$data = $this->input->post();
		$data['CONTRASENA'] = md5($data['CONTRASENA']);
		$data['ID_USU'] = get_next_id('USU','ID_USU');
		$data['ID_TAR'] = 1;
		$data['NOMBRE'] = $data['NOMBRE'];

		echo json_encode($this->SessionModel->addRegister($data));

	}

}
