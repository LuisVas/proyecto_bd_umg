<?php

class SessionModel extends CI_Model{
		function __construct(){
			parent::__construct();
		}

		function validate($data){
			$this->db->select('*')
			->from('LOGIN')
			->where('EMAIL',$data['email'])
			->where('PASS',md5($data['password']));

			$query = $this->db->get()->row();

			if($query){

				$this->session->set_userdata('user',(object)array(
						'user_id'=>$query->ID_USER,
						'username'=>$query->USERNAME,
						'rol'=>$query->ROL,
						'email'=>$query->EMAIL
				));

				return true;

			}else{
				return false;
			}
		}

		function validate_user($data){
			$email = $data['email'];
			$password = md5($data['password']);

			// $query = $this->db->query("SELECT * FROM USU WHERE EMAIL = '$email' AND CONTRASENA = '$password' ");

			$this->db->select('*')
			->from('USU')
			->where('EMAIL',$data['email'])
			->where('CONTRASENA',md5($data['password']));

			$query = $this->db->get();

			if($query->num_rows() > 0){
				$query = $query->row();
				$this->session->set_userdata('user',(object)$query);
				return true;
			}else{
				return false;
			}
		}
}

?>
