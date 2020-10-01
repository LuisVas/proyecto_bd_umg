<?php

class SessionController extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('SessionModel');
	}

	function index(){
		if($this->session->userdata('user_id') == NULL){
			$this->load->view('login');	
		}else{
			header('Location: '.base_url());
		}
	}

	function validate(){
		$record = array(
			'username_login'=>$this->input->post('username_login'),
			'password_login'=>$this->input->post('password_login')
		);
		echo json_encode($this->SessionModel->validate($record));
	}
	
	function sign_out(){
		$this->session->sess_destroy();
		header('Location: '.base_url() .'login');
	}

	function register(){
		$this->load->view('register');
	}

	function validate_email(){
		echo json_encode($this->SessionModel->validate_email($this->input->post('email')));
	}
	function validate_mail(){
		echo json_encode($this->SessionModel->validate_mail($this->input->post('email')));
		echo json_encode($this->SessionModel->validate_mail($this->input->post('status')));
		echo json_encode($this->SessionModel->validate_mail($this->input->post('nombre')));
	}
	function add_register(){

		$data = $this->input->post();
		$data['id_rol'] = 4;
		$data['status'] = 2;
		$data['id_tipo_user'] = $this->input->post("id_tipo_user");
		$data['puntos'] = 0;
		$data['sellos'] = 0;
		$data['status_ref'] = 0;
		$data['fecha_registro'] = date('Y-m-d');
		$data['website'] = NULL;
		$data['nombre_contacto'] = NULL;
		$data['tel_contacto'] = NULL;
		$data['puesto_contacto'] = NULL;
		$data['nit'] = NULL;
		$data['r_social'] = NULL;
		$data['direccion'] = NULL;
		$data['hash'] = generateToken();
		
		$data['identificacion'] = $data['identificacion'];
		
		if(strlen($data['identificacion']) < 13){
			if($this->SessionModel->validate_email($data['correo'])){		

			$this->sendMail($data['correo'],$data['hash']);
			echo json_encode($this->SessionModel->add_register($data));
			//$this->load->view('sendMail');


			}else{
				echo json_encode(201); /*El correo ya existe*/
			}
		}else{
			echo json_encode(202); /*Número de identificación inválido*/
		} 
		
	}

	function sendMail($correo, $hash){
		$this->load->library('email');

		$message = '
			<p>Bienvenido al programa de lealtad de Meyko Club, tu registro ha sido exitoso.</p>

			<p>¡Ya casi terminas!. Accede al siguiente link para activar tu cuenta.</p>

			<a href="'.base_url().'verify_account?token='.$hash.'" target="_blank">Verificar cuenta</a>
		';

		$this->email->from('no-reply@meykoclub.com', 'Meyko Club');
		$this->email->to($correo);
		$this->email->subject('Activación de cuenta');
		$this->email->message($message);
		$this->email->set_mailtype('html');

		return $this->email->send();
	}

	function verify_account(){
		$token = $this->input->get('token');

		$data['verify'] = $this->SessionModel->verify_hash($token);

		$this->load->view('verify_account',$data);
	}




	function restore_password(){
		$this->load->view('restore_password');
	}
	

	function verify_mail(){
		$data = $this->input->post();
		$data['correo'] = $data['correo'];
		$data['hash'] = generateToken();
		if($this->SessionModel->validate_email($data['correo'])){	
			echo json_encode(204); /*El correo no existe*/
		}else{

			$this->sendPass($data['correo'],$data['hash']);
			echo json_encode($this->SessionModel->restore_password($data['correo'],$data['hash']));
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

		$this->email->from('no-reply@meykoclub.com', 'Meyko Club');
		$this->email->to($correo);
		$this->email->subject('Restablecimiento de contraseña');
		$this->email->message($message);
		$this->email->set_mailtype('html');

		return $this->email->send();
	}


	function resetlink(){
		$token = $this->input->get('token');
		$data['user'] = $this->SessionModel->get_user_by_token($token);

		$this->load->view('verify_password',$data);			

	}

	function restorePass(){
		$data = $this->input->post();
		$data['password'] = $data['password'];
		$data['status'] = 1;


		echo json_encode($this->SessionModel->updatePassword($data['password'],$data['id_usuario']));


	}
}