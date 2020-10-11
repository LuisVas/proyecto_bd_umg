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
				return $this->db->last_query();
			}
		}
}

?>
