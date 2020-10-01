<?php

class GuestDashboardModel extends CI_Model{
	function __construct(){
		parent::__construct();
	}


	function listPrizes(){
		$this->db->select('*')
		->from('premios')
		->group_by('premios.id_premio')
		->order_by('premios.id_premio','ASC');
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	function listPrizesAnalytics(){
		$this->db->select('*')
		->from('premios')
		->group_by('premios.id_premio')
		->order_by('premios.id_premio','ASC');
		$this->db->limit(5);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function listUsers(){
		$this->db->select('*')
		->from('usuarios')
		->group_by('usuarios.id_usuario')
		->order_by('usuarios.id_usuario','DESC');
		
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function listUsersAnalytics(){
		$this->db->select('*')
		->from('usuarios')
		->group_by('usuarios.id_usuario')
		->order_by('usuarios.puntos','DESC');
		$this->db->limit(5);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function add_service($data){

		$data['id_usuario'] = $this->session->userdata('user_id');
		// var_dump($data);

		$this->db->insert('premios',$data);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function countRow(){
		$this->db->select('*')
		->from('usuarios');

		$query = $this->db->get();
				
		return $query->num_rows();
	}
	function countSwaps(){
		$this->db->select('*')
		->from('canjes');

		$query = $this->db->get();
				
		return $query->num_rows();
	}
	function countPoints(){
		$query = $this->db->select_sum('puntos', 'totalpuntos');
	    $query = $this->db->get('usuarios');
	    $result = $query->result();
	    return $result[0]->totalpuntos;

	}
	
	function countSellos(){
			    
	    $query = $this->db->select_sum('sellos', 'totalsellos');
	    $query = $this->db->get('usuarios');
	    $result = $query->result();
	
	    return $result[0]->totalsellos;
	}

	function countPatient(){
		$this->db->select('*')
		->from('usuarios')
		->where('id_tipo_user > 2');
		
		$query = $this->db->get();
				
		return $query->num_rows();
	}
	
	function countDoctor(){
		$this->db->select('*')
		->from('usuarios')
		->where('id_tipo_user = 2');

		$query = $this->db->get();
				
		return $query->num_rows();
	}
	
	function countSwapRed(){
		$this->db->select('*')
		->from('canjes')
		->where('status_redencion = 2');
		
		$query = $this->db->get();
				
		return $query->num_rows();
	}
	
	function countSwapNotRed(){
		$this->db->select('*')
		->from('canjes')
		->where('status_redencion = 1');
		
		$query = $this->db->get();
				
		return $query->num_rows();
	}
	
	function updateDataDashboard($nombre,$website,$nombre_contacto,$tel_contacto,$puesto_contacto,$nit,$r_social,$direccion,$id_rol,$id){
		$nombre = $nombre;
		$website = $website;
		$nombre_contacto = $nombre_contacto;
		$tel_contacto = $tel_contacto;
		$puesto_contacto = $puesto_contacto;
		$nit = $nit;
		$r_social = $r_social;
		$direccion = $direccion;
		$id_rol = $id_rol;

		$this->db->set(array('nombre'=>$nombre, 'website'=>$website, 'nombre_contacto' =>$nombre_contacto, 'tel_contacto'=>$tel_contacto, 'puesto_contacto'=>$puesto_contacto, 'nit'=>$nit,'r_social'=>$r_social, 'direccion'=>$direccion));
		$this->db->where('id_usuario',$id);
		$this->db->update('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	
	
	function updateDataClient($nombre,$puntos,$sellos,$correo,$identificacion,$id_tipo_user,$id_rol,$status,$password,$id_usuario){
		$nombre = $nombre;
		$puntos = $puntos;
		$sellos = $sellos;
		$correo = $correo;
		$identificacion = $identificacion;
		$id_tipo_user = $id_tipo_user;
		$id_rol = $id_rol;
		$status = $status;
		$password = md5($password);

		$this->db->set(array('nombre'=>$nombre, 'puntos'=>$puntos, 'sellos' =>$sellos, 'correo'=>$correo, 'identificacion'=>$identificacion, 'id_tipo_user'=>$id_tipo_user,'status'=>$status,'id_rol'=>$id_rol,'password'=>$password));
		$this->db->where('id_usuario',$id_usuario);
		$this->db->update('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function deleteClient($id_usuario){
    	$this->db->where('id_usuario', $id_usuario);
    	$this->db->delete('usuarios');
		
		return true;
	}
	
	function add_register_user($data){

		$data['password'] = md5($data['password']);
		$this->db->insert('usuarios',$data);

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
	

	
	function deletePrize($id_premio){
    	$this->db->where('id_premio', $id_premio);
    	$this->db->delete('premios');
		
		return true;
	}	
	function updateDataPrize($data,$id_premio){
		//$nombre_premio = $nombre_premio;
		//$desc_premio = $desc_premio;
		//$valor_puntos = $valor_puntos;
		//$valor_sellos = $valor_sellos;
		//$status_premio = $status_premio;

		$this->db->set($data);
		$this->db->where('id_premio',$id_premio);
		$this->db->update('premios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	
	function listSwaps(){
		$this->db->select('*');
	    $this->db->from('usuarios');
	    $this->db->join('canjes', 'usuarios.id_usuario = canjes.id_usuario');
	    $this->db->join('premios','canjes.id_premio = premios.id_premio');
	    $query = $this->db->get();
	
	  	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	function updateSwap($id_canje,$status_redencion){
		$status_redencion = $status_redencion;
		$id_canje = $id_canje;

		$this->db->set(array('id_canje'=>$id_canje, 'status_redencion'=>$status_redencion));
		$this->db->where('id_canje',$id_canje);
		$this->db->update('canjes');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function addMail($data){
		$this->db->insert('mails',$data);
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	

	function mailsMarketing(){
		$this->db->select('correo')->from('usuarios');
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
		    return $query->result_array();
		}else{
		    return false;
		}
	}
	
	function lastMail(){
		$this->db->select('sending_date')
		->from('mails')
		->order_by('id_mail','DESC');
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		return $query->row()->sending_date;
	}



}

 ?>
