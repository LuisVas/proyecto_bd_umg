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
			$this->load->view('dashboard/analytics',$data);
		}
	}
	function validate(){
		$record = array(
			'username_login'=>$this->input->post('username_login'),
			'password_login'=>$this->input->post('password_login')
		);
		echo json_encode($this->SessionDashboardModel->validate($record));
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

	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url().'dashboard/login');
	}
}
