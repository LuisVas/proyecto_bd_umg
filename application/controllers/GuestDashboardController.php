<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('GuestDashboardModel');
		validatedashboardsession();
		rol('admin');
		
	}
	
	function index(){
		$data['count_all'] = $this->GuestDashboardModel->countRow();
		$data['count_patient'] = $this->GuestDashboardModel->countPatient();
		$data['count_doctor'] = $this->GuestDashboardModel->countDoctor();
		$data['count_swaps'] = $this->GuestDashboardModel->countSwaps();
		$data['count_swaps_red'] = $this->GuestDashboardModel->countSwapRed();
		$data['count_swaps_not_red'] = $this->GuestDashboardModel->countSwapNotRed();
		$data['suma'] = $this->GuestDashboardModel->countPoints() + $this->GuestDashboardModel->countSellos();
		$data['users'] = $this->GuestDashboardModel->listUsersAnalytics();
		$data['prizes'] = $this->GuestDashboardModel->listPrizesAnalytics();
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		
		
		$data['perPoints'] = ((($this->GuestDashboardModel->countPoints())* 100)/$data['suma']);
		$data['perSellos'] = ((($this->GuestDashboardModel->countSellos())* 100)/$data['suma']);
		
		$data['perMil'] = (($data['suma'] / 1000));
		
		
		
		
		$this->load->view('dashboard/analytics',$data);
		

	}
	
	function seeall(){
		$data['prizes'] = $this->GuestDashboardModel->listPrizes();
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/see-all',$data);		
	}

	function add_instantAward(){

		$data = $this->input->post();
		$data['status_premio'] = 1;
		$data['fecha_creacion'] = date('Y-m-d',strtotime("+1 day"));

		//var_dump($_FILES['photoLoyalty']);

		if($_FILES['photoAward']){

			// Set preference
			$config['upload_path'] = 'images/'; 
			$config['allowed_types'] = '*';
			$config['max_size'] = '7167800'; // max_size in kb
			$config['file_name'] = $_FILES['photoAward']['name'];

			//Load upload library
			$this->load->library('upload',$config); 
				// File upload
			if($this->upload->do_upload('photoAward')){
			// Get data about the file
			$uploadData = $this->upload->data();

			$data['img_premio'] = 'images/'.$uploadData['file_name'];

			}else{
				echo "error";
			}
		}

		

		echo json_encode($this->GuestDashboardModel->add_service($data));
	}


	function awards(){
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/instant-awards',$data);		
	}
	
	function clients(){
		$data['users'] = $this->GuestDashboardModel->listUsers();
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/clients',$data);		
	}
	
	function settings(){
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/settings',$data);		
	}
	
	function swaps(){
		$data['swaps'] = $this->GuestDashboardModel->listSwaps();
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('dashboard/swaps',$data);		
	}
	
	function updateDataDashboard(){
		$data = $this->input->post();
		$data['id_usuario'] = $this->session->userdata('user_id');
		$data['nombre'] = $data['nombre'];
		$data['website'] = $data['website'];
		$data['nombre_contacto'] = $data['nombre_contacto'];
		$data['tel_contacto'] = $data['tel_contacto'];
		$data['puesto_contacto'] = $data['puesto_contacto'];
		$data['nit'] = $data['nit'];
		$data['r_social'] = $data['r_social'];
		$data['direccion'] = $data['direccion'];
		
		

		echo json_encode($this->GuestDashboardModel->updateDataDashboard($data['nombre'],$data['website'],$data['nombre_contacto'],$data['tel_contacto'], $data['puesto_contacto'], $data['nit'], $data['r_social'], $data['direccion'],$data['id_usuario']));

	}
	
		
	function updateDataClient(){
		$data = $this->input->post();
		$data['id_usuario'] = $data['id_usuario'];
		$data['nombre'] = $data['nombre'];
		$data['puntos'] = $data['puntos'];
		$data['sellos'] = $data['sellos'];
		$data['correo'] = $data['correo'];
		$data['identificacion'] = $data['identificacion'];
		$data['id_tipo_user'] = $data['id_tipo_user'];
		$data['status'] = $data['status'];
		$data['id_rol'] = $data['id_rol'];
		$data['password'] = $data['password'];
		
		unset($data['fecha_registro']);
		

		echo json_encode($this->GuestDashboardModel->updateDataClient($data['nombre'],$data['puntos'],$data['sellos'],$data['correo'],$data['identificacion'],$data['id_tipo_user'],$data['id_rol'],$data['status'],$data['password'],$data['id_usuario']));

	}
	
	function deleteClient(){
		$data = $this->input->post();
		$data['id_usuario'] = $data['id_usuario'];
		echo json_encode($this->GuestDashboardModel->deleteClient($data['id_usuario']));
	}
	
	function deletePrize(){
		$data = $this->input->post();
		$data['id_premio'] = $data['id_premio'];
		echo json_encode($this->GuestDashboardModel->deletePrize($data['id_premio']));
	}
	
	function add_register_user(){

		$data = $this->input->post();
		$data['id_rol'] = $data['id_rol'];
		$data['status'] = 1;
		$data['id_tipo_user'] = $this->input->post("id_tipo_user");
		$data['status_ref'] = 0;
		$data['fecha_registro'] = date('Y-m-d');
		$data['website'] = NULL;
		$data['nombre_contacto'] = NULL;
		$data['tel_contacto'] = NULL;
		$data['puesto_contacto'] = NULL;
		$data['nit'] = NULL;
		$data['r_social'] = NULL;
		$data['direccion'] = NULL;
		if($this->GuestDashboardModel->validate_email($data['correo'])){		
			echo json_encode($this->GuestDashboardModel->add_register_user($data));
			//$this->load->view('sendMail');
		}else{
			echo json_encode(201); /*El correo ya existe*/
		}
	}
	
	function updateDataPrize(){
		$data = $this->input->post();
		//$data['id_premio'] = $data['id_premio'];
		//$data['nombre_premio'] = $data['nombre_premio'];
		//$data['desc_premio'] = $data['desc_premio'];
		//$data['valor_puntos'] = $data['valor_puntos'];
		//$data['valor_sellos'] = $data['valor_sellos'];
		//$data['status_premio'] = $data['status_premio'];
		

		if($_FILES['photoAward']){

			// Set preference
			$config['upload_path'] = 'images/'; 
			$config['allowed_types'] = '*';
			$config['max_size'] = '7167800'; // max_size in kb
			$config['file_name'] = $_FILES['photoAward']['name'];

			//Load upload library
			$this->load->library('upload',$config); 
				// File upload
			if($this->upload->do_upload('photoAward')){
				// Get data about the file
				$uploadData = $this->upload->data();
				$data['img_premio'] = 'images/'.$uploadData['file_name'];
			}
		}


		echo json_encode($this->GuestDashboardModel->updateDataPrize($data,$data['id_premio']));

	}
	
	function updateSwap(){
		$data = $this->input->post();
		$data['id_canje'] = $data['id_canje'];
		$data['status_redencion'] = $data['status_redencion'];

		echo json_encode($this->GuestDashboardModel->updateSwap($data['id_canje'],$data['status_redencion']));

	}
	
	function marketing(){
		
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		
		$this->load->view('dashboard/marketing',$data);

	}
 
	function sendMarketing(){
		$data = array();
		$data = $this->input->post();
		
		$data['sending_date'] = date('Y-m-d');
		//$sendingDate = strtotime($data['sending_date']);
		$lastMail=  $this->GuestDashboardModel->lastMail();
		//$lastSending =  ($lastMail); 
		//var_dump($sendingDate);	
		//var_dump($lastSending);	
		
	
		
		//var_dump($_FILES['photoLoyalty']);

		if($_FILES['photoAward']){

			// Set preference
			$config['upload_path'] = 'images/'; 
			$config['allowed_types'] = '*';
			$config['max_size'] = '7167800'; // max_size in kb
			$config['file_name'] = $_FILES['photoAward']['name'];

			//Load upload library
			$this->load->library('upload',$config); 
				// File upload
			if($this->upload->do_upload('photoAward')){
			// Get data about the file
			$uploadData = $this->upload->data();

			$data['path'] = 'images/'.$uploadData['file_name'];

			}
		}
		
	//	$invterval = $sendingDate - $lastSending;
		
		if($data['recipients'] == 'all'){
			$emails = $this->GuestDashboardModel->mailsMarketing();
		}else{
			
		}
		
		if($data['sending_date'] != $lastMail){
			$this->GuestDashboardModel->addMail($data);
			foreach($emails as $rec){
				$this->sendMail($rec['correos'],$data['subject'],$data['body'],(isset($data['path']) ? data['path'] : ''),$data['cta']);
			}
        }else{
            echo json_encode(202);
        }
		
		
		
		
		
		//echo json_encode(true);
	}
 

    function sendMail($recipients,$subject,$body,$path,$cta){
		$this->load->library('email');
		
		$recipients = $recipients;
		
		$body =  '<p>'.$body.'</p>';
		if($path != ''){
			$body .= '<a href="'.$cta.'" target="_blank"><img src="'.base_url().''.$path.'"></a>';
		}

		$this->email->from('no-reply@meykoclub.com', 'Meyko Club');
		$this->email->to($recipients);
		$this->email->subject($subject);
		$this->email->message($body);
		$this->email->set_mailtype('html');
	
		return $this->email->send();
	}
	
	
	
	
}