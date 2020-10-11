<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();
		is_admin_login();
		$this->load->model('GuestDashboardModel');
	}

	function index(){
		$this->load->view('dashboard/analytics');
	}

	function seeall(){
		$data['productsList'] = $this->GuestDashboardModel->products();
		$this->load->view('dashboard/see-all',$data);
	}
	function updateDataProduct(){
		//$id_nuevo = $this->GuestDashboardModel->id_prod() + 1;
		$data = $this->input->post();
		$data['ID_PROD'] = $data['ID_PROD'];
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



		echo json_encode($this->GuestDashboardModel->updateDataProduct($data,$data['ID_PROD']));
	}

	function products(){
		$this->load->view('dashboard/products');
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
