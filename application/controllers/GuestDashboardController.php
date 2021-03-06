<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDashboardController extends CI_Controller {
	function __construct(){
		parent::__construct();
		is_admin_login();
		$this->load->model('GuestDashboardModel');
	}

	function index(){
		$this->load->view('dashboard/orders');
	}

	function seeall(){
		$data['productsList'] = $this->GuestDashboardModel->products();
		$this->load->view('dashboard/see-all',$data);
	}
	function updateDataProduct(){
		//$id_nuevo = $this->GuestDashboardModel->id_prod() + 1;
		$data = $this->input->post();
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

			$data['IMAGEN'] = 'images/'.$uploadData['file_name'];

			}else{
				//echo "error";
			}
		}

		

		echo json_encode($this->GuestDashboardModel->updateDataProduct($data,$data['ID_PROD']));
	}


	function deleteProduct(){
		$data = $this->input->post();
		$data['ID_PROD'] = $data['ID_PROD'];
		echo json_encode($this->GuestDashboardModel->deleteProduct($data['ID_PROD']));
	}

	function addProduct(){

		$data = $this->input->post();
		$lastId = $this->GuestDashboardModel->id_prod();
		//var_dump($lastId);
		$data['ID_PROD'] = $lastId + 1;

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



	function products(){ 
		$lastId = $this->GuestDashboardModel->id_prod();
		//var_dump($lastId);
		$this->load->view('dashboard/products');		
	}

	function clients(){
		$this->load->view('dashboard/clients');
	}

	function settings(){
		$this->load->view('dashboard/settings');
	}

	function orders(){
		$this->load->view('dashboard/orders');
	}


	function marketing(){
		$this->load->view('dashboard/marketing');
	}



}
