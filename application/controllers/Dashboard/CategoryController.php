<?php

class CategoryController extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('CategoryModel');
  }

  function index(){
    $this->load->view('dashboard/categories');
  }

  function list(){
    echo json_encode($this->CategoryModel->get_categories());
  }

  function get(){
    echo json_encode($this->CategoryModel->get($this->input->post()));
  }

  function add(){
    echo json_encode($this->CategoryModel->add_category($this->input->post()));
  }

  function update(){
    echo json_encode($this->CategoryModel->update_category($this->input->post()));
  }

  function delete(){
    echo json_encode($this->CategoryModel->delete_category($this->input->post()));
  }
}

 ?>
