<?php

class SessionController extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
 
	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url() .'login');
	}

	function register(){
		$this->load->view('register');
	}
	
}