<?php

class CategoryModel extends CI_Model{
  function get_categories(){
    $this->db->select('*')
    ->from('CAT')
    ->order_by('ID_CAT','ASC');

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
    $id = get_next_id('DETALLE_CAT_SUB');
    foreach($data as $rec){
      array_push($args,array(
        'ID'=>$id,
        'CAT_ID'=>$cat_id,
        'SUB_ID'=>$rec['value']
      ));

      $id++;
    }

    $this->db->insert_batch('DETALLE_CAT_SUB',$args);
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function unassign_sub_categories($cat_id){
    $this->db->where('CAT_ID',$cat_id)->delete('DETALLE_CAT_SUB');
    return ($this->db->affected_rows() > 0 ? true : false);
  }

  function get_assign_categories($id){
    $this->db->select('*')
    ->from('CAT')
    ->where('ID_CAT',$id);

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

  function get_sub_categories($sub){
    if(!$sub) return false;

    $this->db->select('SUB_ID,CAT_ID,ID_SUBCAT,NOMBRE')
    ->from('DETALLE_CAT_SUB')
    ->join('SUBCAT','SUBCAT.ID_SUBCAT = DETALLE_CAT_SUB.SUB_ID')
    ->where("CAT_ID IN (".$sub.")",NULL, false);

    $query = $this->db->get();

    if($query->num_rows() > 0){
      $args = array();
      foreach($query->result_array() as $rec){
        if(!is_in_array($args,'SUB_ID',$rec['SUB_ID'])){
          array_push($args,$rec);
        }
      }

      return $args;

    }else{
      return false;
    }
  }

  function list_sub_categories(){
    $this->db->select('*')
    ->from('SUBCAT')
    ->order_by('ID_SUBCAT','DESC');

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

  function get_assign_sub_categories($cat_id){

    $sub_categories = $this->db->select('*')->from('SUBCAT')->get()->result();

    $this->db->select('*')
    ->from('DETALLE_CAT_SUB')
    ->where('CAT_ID',$cat_id);

    $query = $this->db->get();

    $data = array();
    foreach($sub_categories as $rec){
      array_push($data,array(
          'id_subcat'=>$rec->ID_SUBCAT,
          'nombre'=>$rec->NOMBRE,
          'selected'=>(is_in_array($query->result_array(),'SUB_ID',$rec->ID_SUBCAT))
      ));
    }

    return $data;
  }
}

 ?>
