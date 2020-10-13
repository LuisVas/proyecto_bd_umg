<?php

class CategoryController extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('CategoryModel');
  }

  function index(){
    $this->load->view('dashboard/categories');
  }

  // Categories ----------------------------------------------------------------

  function list(){
    echo json_encode($this->CategoryModel->get_categories());
  }

  function get(){

    $cat_id = $this->input->post('id');
    $args = array(
      'data'=>$this->CategoryModel->get_assign_categories($cat_id),
      'sub'=>$this->CategoryModel->get_assign_sub_categories($cat_id)
    );

    echo json_encode($args);
  }

  function add(){
    $cat_id = $this->CategoryModel->add_category($this->input->post('name'));
    echo json_encode($cat_id ? $this->input->post('sub') ? $this->CategoryModel->assign_sub_categories($this->input->post('sub'),$cat_id) : true : false);
  }

  function update(){
    if($this->CategoryModel->update_category($this->input->post())){
      $this->CategoryModel->unassign_sub_categories($this->input->post('id'));
      echo json_encode($this->CategoryModel->assign_sub_categories($this->input->post('sub'),$this->input->post('id')));
  }else{
      echo json_encode(false);
    }
  }

  function delete(){
    echo json_encode($this->CategoryModel->delete_category($this->input->post()));
  }

  // SubCategories -------------------------------------------------------------

  function get_sub_categories(){
    echo json_encode($this->CategoryModel->get_sub_categories($this->input->post('sub')));
  }

  function list_sub_categories(){
    echo json_encode($this->CategoryModel->list_sub_categories($this->input->post()));
  }

  function add_sub_categories(){
    echo json_encode($this->CategoryModel->add_sub_categories($this->input->post()));
  }

  function update_sub_categories(){
    echo json_encode($this->CategoryModel->update_sub_categories($this->input->post()));
  }
}

 ?>
