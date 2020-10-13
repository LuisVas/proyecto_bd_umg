<?php

class SessionDashboardController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('SessionDashboardModel');
	}

	function index(){

		//var_dump($this->session->all_userdata());

		if($this->session->userdata('user_id') == NULL){
			$this->load->view('dashboard/login');
		}else{
			header('Location: '.base_url().'dashboard');
			$data['user'] = get_user_by_id($this->session->userdata('user_id'));
			$this->load->view('dashboard/orders',$data);
		}
	}
	function validate(){
		$record = array(
			'username_login'=>$this->input->post('username_login'),
			'password_login'=>$this->input->post('password_login')
		);
		echo json_encode($this->SessionDashboardModel->validate($record));
	}
	
 
	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url().'dashboard/login');
	}
}
