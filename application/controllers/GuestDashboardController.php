<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('GuestDashboardModel');
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
		$data['users'] = $this->GuestDashboardModel->listUsers();
		var_dump($data['users']);
		//$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/clients',$data);		
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