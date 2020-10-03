<?php

class SessionDashboardController extends CI_Controller{
	function __construct(){
		parent::__construct(); 
		
	}

	function verify_account(){
		$this->load->view('dashboard/verify_account');
	}

	function restore_password(){
		$this->load->view('dashboard/restore_password');
	}
	
	function resetlink(){
		$this->load->view('dashboard/verify_password');			
	}
}