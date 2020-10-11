<?php

class CategoryModel extends CI_Model{
  function get_categories(){
    $this->db->select('*')
    ->from('CAT');

    $query = $this->db->get();

    return ($query->num_rows() > 0 ? $query->result() : false);
  }

  function add_category($data){
    $id = get_next_id('CAT','ID_CAT');
    $this->db->insert('CAT',array('NOMBRE'=>$data['name'],'ID_CAT'=>$id));
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function update_category($data){
    $this->db->where('ID_CAT',$data['id'])
    ->set('NOMBRE',$data['name'])
    ->update('CAT');

    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function delete_category($id){
    $this->db->where('ID_CAT',$id)->delete('CAT');
    return ($this->db->affected_rows() > 0 ? true : false);
  }
}

 ?>
