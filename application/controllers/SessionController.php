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

}
