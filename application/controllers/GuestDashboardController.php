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
		$data = $this->input->post();

		if($_FILES['photoAward']){

				$config['upload_path'] = 'images/';
				$config['allowed_types'] = '*';
				$config['max_size'] = '7167800'; // max_size in kb
				$config['file_name'] = $_FILES['photoAward']['name'];

				$this->load->library('upload',$config);
				if($this->upload->do_upload('photoAward')){
					$uploadData = $this->upload->data();

					$data['IMAGEN'] = 'images/'.$uploadData['file_name'];

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
		$data['ID_PROD'] = get_next_id('PROD','ID_PROD');

		if($_FILES['photoAward']){

			$config['upload_path'] = 'images/';
			$config['allowed_types'] = '*';
			$config['max_size'] = '7167800';
			$config['file_name'] = $_FILES['photoAward']['name'];

			$this->load->library('upload',$config);
			if($this->upload->do_upload('photoAward')){
				$uploadData = $this->upload->data();
				$data['IMAGEN'] = 'images/'.$uploadData['file_name'];
			}
		}

		echo json_encode($this->GuestDashboardModel->addProduct($data));
	}



	function products(){
		$lastId = $this->GuestDashboardModel->id_prod();
		//var_dump($lastId);
		$this->load->view('dashboard/products');
	}

	function clients(){
		$data['userList'] = $this->GuestDashboardModel->userList();
		$this->load->view('dashboard/clients',$data);
	}

	function settings(){
		$this->load->view('dashboard/settings');
	}

	function orders(){
		$data['orderList'] = $this->GuestDashboardModel->ordersList();
		$this->load->view('dashboard/orders',$data);
	}

	function seeCards(){
		$data['cardsList'] = $this->GuestDashboardModel->cardsList();
		$this->load->view('dashboard/cards',$data);
	}

	function updateDataCard(){
		$data = $this->input->post();

		echo json_encode($this->GuestDashboardModel->updateDataCard($data,$data['ID_TAR']));
	}

	function addCard(){

		$data = $this->input->post();
		$data['ID_TAR'] = get_next_id('TAR','ID_TAR');
		echo json_encode($this->GuestDashboardModel->addCard($data));
	}

	function deleteCard(){
		$data = $this->input->post();
		$data['ID_TAR'] = $data['ID_TAR'];
		echo json_encode($this->GuestDashboardModel->deleteCard($data['ID_TAR']));
	}

	function updateDataUser(){
		$data = $this->input->post();

		echo json_encode($this->GuestDashboardModel->updateDataUser($data,$data['ID_USU']));
	}



}
