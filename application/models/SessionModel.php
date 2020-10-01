<?php

class SessionModel extends CI_Model{
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
			if($status == 1 && $id_tipo_user != 1){

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
			}else if($id_tipo_user == 1){
				return 200; /*Usuario no admitido*/
			}else if($status == 3){
				return 206; /*Usuario con proceso de cambio de contraseña*/
			}else if($id_tipo_user != 1 && $status == 4){
			    return 207; /*Sistema obligando a usuario a cambiar de password*/
			}else{
				return 202; /*Usuario no está verificado*/
			}
		}else{
			return false;
		}
	}

	function add_register($data){

		$data['password'] = md5($data['password']);
		$this->db->insert('usuarios',$data);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function updatePassword($password,$id){
		$password = md5($password);

		$this->db->set(array('password'=>$password,'status'=>'1'));
		$this->db->where('id_usuario',$id);
		$this->db->update('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function restore_password($correo,$hash){
		$usuario = $this->db->select('*')
		->from('usuarios')
		->where('correo',$correo)
		->get()
		->row();

		// UPDATE usuario SET password=123 WHERE correo = 'vasquez.fernando'

		$time = date('H:i:s');
		$date = date('Y-m-d',strtotime("+1 day")).' '.$time;


		$this->db->set(array('status'=>'3','reg_time'=>$date,'hash'=>$hash));
		$this->db->where('correo',$usuario->correo);
		$this->db->update('usuarios');

		// UPDATE usuario SET reset_password = hash  WHERE correo = 'vasquez.fernando' 

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}



	function validate_email($email){
		$this->db->select('*')
		->from('usuarios')
		->where('correo',$email);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}



	function verify_hash($hash){
		$this->db->select('*')
		->from('usuarios')
		->where('status','2')
		->where('hash',$hash);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			$user = $query->row();

			// UPDATE TABLE SET VALOR = 1 WHERE ID = 6;

			$this->db->set(array('status'=>'1'))
			->where('id_usuario',$user->id_usuario)
			->update('usuarios');

			return true;

		}else{
			return false;
		}
	}

	function get_user_by_token($token){

		$date = date('Y-m-d H:i:s');

		$this->db->select('*')
		->from('usuarios')
		->where('hash',$token)
		->where('status','3')
		->where('reg_time >',$date);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}




}

 ?>
