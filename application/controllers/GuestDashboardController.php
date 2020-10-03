<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('dashboard/analytics');	
	}
	
	function seeall(){
		$this->load->view('dashboard/see-all');		
	}

	function awards(){ 
		$this->load->view('dashboard/instant-awards');		
	}
	
	function clients(){
		$this->load->view('dashboard/clients');		
	}
	
	function settings(){ 
		$this->load->view('dashboard/settings');		
	}
	
	function swaps(){
		$this->load->view('dashboard/swaps');		
	}
    
	
	function marketing(){
		$this->load->view('dashboard/marketing');
	} 
	
	
	
}