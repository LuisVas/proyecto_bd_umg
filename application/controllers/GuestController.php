<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->database(); 
	}
	
	function index(){ 
		$this->load->view('session');
	}

 

	function referral(){
		$this->load->view('referral');
	}
	
	function settings(){

		$this->load->view('profile');
	}
 
	
	function store(){

		$this->load->view('tienda/index');
	}
 
}