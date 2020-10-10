<?php

class SessionDashboardModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
function validate($data){
		$this->db->select('*')
		->from('usuarios')
		->where('correo',$data['username_login'])
		->where('password',md5($data['password_login']));

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$status = $query->row()->status;
			$id_tipo_user = $query->row()->id_tipo_user; 
			if($status == 1 && $id_tipo_user == 1){

				$args = array();

				foreach($query->result() as $rec){
					$args = array(
						'user_id'=>$rec->id_usuario,
						'role_id'=>$rec->id_rol,
						'status'=>$rec->status
					);
				}

				$this->session->set_userdata($args);

				return true;
			}else if($id_tipo_user != 1){
				return 200; /*Usuario no admitido*/
			}else if($status == 3){
				return 206; /*Usuario con proceso de cambio de contraseña*/
			}else{
				return 202; /*Usuario no está verificado*/
			}
		}else{
			return false;
		}
	}
	 

}

 ?>
