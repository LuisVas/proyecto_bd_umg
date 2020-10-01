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
	
	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url() .'dashboard');
	}


	function validate_email(){
		echo json_encode($this->SessionDashboardModel->validate_email($this->input->post('email')));
	}
	function validate_mail(){
		echo json_encode($this->SessionDashboardModel->validate_mail($this->input->post('email')));
		echo json_encode($this->SessionDashboardModel->validate_mail($this->input->post('status')));
		echo json_encode($this->SessionDashboardModel->validate_mail($this->input->post('nombre')));
	}
	



	function verify_account(){
		$token = $this->input->get('token');

		$data['verify'] = $this->SessionDashboardModel->verify_hash($token);

		$this->load->view('dashboard/verify_account',$data);
	}




	function restore_password(){
		$this->load->view('dashboard/restore_password');
	}
	

	function verify_mail(){
		$data = $this->input->post();
		$data['correo'] = $data['correo'];
		$data['hash'] = generateToken();
		if($this->SessionDashboardModel->validate_email($data['correo'])){	
			echo json_encode(204); /*El correo no existe*/
		}else{

			$this->sendPass($data['correo'],$data['hash']);
			echo json_encode($this->SessionDashboardModel->restore_password($data['correo'],$data['hash']));
			//$this->load->view('sendMail');

		}
	}



	function sendPass($correo, $reset_password){
		$this->load->library('email');

		$message = '
			<p>Estimado usuario,</p>
			<p>Has solicitado reestablecer tu contraseña, accede al siguiente link para continuar con el proceso.</p>

			<a href="'.base_url().'resetlink?token='.$reset_password.'" target="_blank">Reestablecer mi contraseña</a>
		';

		$this->email->from('no-reply@frenzybits.com', 'Frenzy');
		$this->email->to($correo);
		$this->email->subject('Restablecimiento de contraseña');
		$this->email->message($message);
		$this->email->set_mailtype('html');

		return $this->email->send();
	}


	function resetlink(){
		$token = $this->input->get('token');
		$data['user'] = $this->SessionDashboardModel->get_user_by_token($token);

		$this->load->view('dashboard/verify_password',$data);			

	}

	function restorePass(){
		$data = $this->input->post();
		$data['password'] = $data['password'];
		$data['status'] = 1;


		echo json_encode($this->SessionDashboardModel->updatePassword($data['password'],$data['id_usuario']));


	}
}