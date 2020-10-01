<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('GuestModel');
		validate_session();
		rol('guest');
	}
	
	function index(){
		$data['prizes'] = $this->GuestModel->listPrizes();
		$data['swaps'] = $this->GuestModel->listSwapsClient();
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('session',$data);
	}

	function add_referral(){

		$data = $this->input->post();
		$data['id_type'] = 2;
		$data['imagen_premio'] = NULL;

		//var_dump($_FILES['photoLoyalty']);

		echo json_encode($this->GuestModel->add_service($data));
	}

	function referral(){
		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('referral',$data);
	}
	
	function settings(){

		$data['user'] = get_user_by_id($this->session->userdata('user_id'));
		$this->load->view('profile',$data);
	}

	function updateData(){
		$data = $this->input->post();
		$data['id_usuario'] = $this->session->userdata('user_id');
		$data['nombre'] = $data['nombre'];
		
		unset($data['correo']);
		unset($data['identificacion']);

		echo json_encode($this->GuestModel->updateData($data['nombre'],$data['id_usuario']));

	}
	
	// Esta función sirve para agrear los puntos a un usuario que refirió a otro
	function add_points(){
		$user = get_user_by_identify($this->input->post('points'));
		$id_user = get_user_by_id($this->session->userdata('user_id'));
		if($user){
			if($id_user->status_ref == 0){
				$points = intval($user->puntos) + 5;
				echo json_encode($this->GuestModel->add_points($points,$user,$id_user));
			}else{
				echo json_encode(201);
			}
		}else{
			echo json_encode(202);
		}
	}
	
	// Esta función para canjear un premio
	function change_prize(){
		$data = $this->input->post();
		$data['id_usuario'] = $this->session->userdata('user_id');
		$data['puntos'] = $data['puntos'];
		$data['sellos'] = $data['sellos'];
		$data['codigo_canje'] = tokenPrize();
		$data['fecha_canje'] = date('Y-m-d');
		$data['status_redencion'] = 1;
		$data['id_premio'] = $data['id_premio'];
		$data['valPrizes'] = $data['valPrizes'];
		
		$data['totalPuntos']= $data['puntos']*$data['valPrizes'];
		$data['totalSellos']= $data['sellos']*$data['valPrizes'];
		
		$user = get_user_by_id($data['id_usuario']);
		
		
		if(intval($user->puntos) >= intval($data['totalPuntos']) && intval($user->sellos) >= intval($data['totalSellos'])){
			
			//var_dump($data['sellos']);
			
			$args = array(
				'id_premio'=>$data['id_premio'], 
				'codigo_canje'=>$data['codigo_canje'], 
				'fecha_canje'=>$data['fecha_canje'], 
				'status_redencion'=>$data['status_redencion'],
				'cantidad_premios'=>$data['valPrizes']
			);
			
			
			$this->GuestModel->changePrize(($user->puntos - $data['totalPuntos']),($user->sellos - $data['totalSellos']),$data['id_usuario']);
			echo json_encode($this->GuestModel->addChangedPrize($args));
		}else{
			echo json_encode(206);
		}
	}
}