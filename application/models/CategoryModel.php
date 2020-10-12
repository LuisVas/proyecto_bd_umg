<?php

class CategoryModel extends CI_Model{
  function get_categories(){
    $this->db->select('*')
    ->from('CAT');

    $query = $this->db->get();

    return ($query->num_rows() > 0 ? $query->result() : false);
  }

  function add_category($name){
    $id = get_next_id('CAT','ID_CAT');
    $this->db->insert('CAT',array('NOMBRE'=>$name,'ID_CAT'=>$id));
    return ($this->db->affected_rows() > 0 ? $id : false);
  }

  function assign_sub_categories($data,$cat_id){
    $args = array();
    foreach($data as $rec){
      array_push($args,array(
        'SUBCAT_ID_SUBCAT'=>$rec['value'],
        'SUBCAT_ID_SUBCAT1'=>$cat_id
      ));
    }

    $this->db->insert_batch('SUBCATSUB',$args);
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function get($data){
    $this->db->select('*')
    ->from('CAT')
    ->where('ID_CAT',$data['id']);

    $query = $this->db->get();

    return ($query->num_rows() > 0 ? $query->row() : false);
  }

  function update_category($data){
    $this->db->where('ID_CAT',$data['id'])
    ->set('NOMBRE',$data['name'])
    ->update('CAT');

    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function delete_category($data){
    $this->db->where('ID_CAT',$data['id'])->delete('CAT');
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function get_sub_categories($id){
    $this->db->select('*')
    ->from('SUBCATSUB')
    ->where('SUBCAT_ID_SUBCAT1',$id);

    $query = $this->db->get();
    return ($query->num_rows() > 0 ? $query->result() : false);
  }

  function list_sub_categories(){
    $this->db->select('*')
    ->from('SUBCAT');

    $query = $this->db->get();
    return ($query->num_rows() > 0 ? $query->result() : false);
  }

  function add_sub_categories($data){
    $this->db->insert('SUBCAT',array(
        'ID_SUBCAT'=>get_next_id('SUBCAT','ID_SUBCAT'),
        'NOMBRE'=>$data['name']
    ));

    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function update_sub_categories($data){
    $this->db->set(array('NOMBRE'=>$data['name']))->where('ID_SUBCAT',$data['id'])->update('SUBCAT');
    return ($this->db->affected_rows() > 0 ? true : false);
  }
}

 ?>
