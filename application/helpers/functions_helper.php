<?php 

function validate_session(){
	$ci = get_instance();
	
	if($ci->session->userdata('user_id') == null){
		header('Location: login');
	}
}

function is_login(){
	$ci = get_instance();
	if($ci->session->userdata('user_id') == null){
	   header('Location: '.base_url().'login');
	}
}

function rol($type){
	$ci = get_instance();
	
	
	if($type == 'admin'){
		if( $ci->session->userdata('role_id') == 4){
			header('Location: '.base_url());
		}
	}
	
	if($type == 'guest'){
		if($ci->session->userdata('role_id') == 1 || $ci->session->userdata('role_id') == 2 || $ci->session->userdata('role_id') == 3){
			
			if($ci->session->userdata('role_id') == 3){
				header('Location: '.base_url().'dashboard/see-all');
			}else{
				header('Location: '.base_url().'dashboard');
			}
		}
	}
}


function validatedashboardsession(){
	$ci = get_instance();
	
	if($ci->session->userdata('user_id') == null){
		header('Location: '.base_url().'dashboard/login');
	}
}

function dashboardislogin(){
	$ci = get_instance();
	if($ci->session->userdata('user_id') == null){
	   header('Location: '.base_url().'dashboard/login');
	}
}


function load_lang(){
	$ci = get_instance();
	if($ci->session->userdata('lang') != null){
		$lang = $ci->session->userdata('lang');
		$ci->lang->load('content',$lang);
	}else{
		$ci->lang->load('content','spanish');
	}
}

function get_user_by_id($id){
    $ci = get_instance();
    $ci->db->select('*')->from('usuarios')->where('id_usuario',$id);



    $query = $ci->db->get();

    if($query->num_rows() > 0){
        return $query->row();
    }else{
        return false;
    }
}

function get_swaps_by_id($id){
    $ci = get_instance();
    $ci->db->select('*')->from('canjes')->where('id_usuario',$id);

    $query = $ci->db->get();

    if($query->num_rows() > 0){
        return $query->row();
    }else{
        return false;
    }
}

function get_user_by_identify($id){
	$ci = get_instance();
	
	$ci->db->select('*')
	->from('usuarios')
	->where('identificacion',$id);
	
	$query = $ci->db->get();
	
	if($query->num_rows() > 0){
		return $query->row();
	}else{
		return false;
	}
}

function get_user_by_name($email){
    $ci = get_instance();
    $ci->db->select('*')->from('usuarios')->where('correo',$email);



    $query = $ci->db->get();

    if($query->num_rows() > 0){
        return $query->row();
    }else{
        return false;
    }
}

function get_logo_white(){
	return base_url().'src/logo.png';
}

function get_logo_blue(){
	return base_url().'assets/media/logos/logo-blue.png';
}

function get_current_date(){
	return date('Y-m-d');
}


function generateToken(){
	$ci = get_instance();
	$complement = strtotime('now');
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i <= 15; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $key = $complement.implode($pass); //turn the array into a string
    return $key;
}



function tokenPrize(){
	$ci = get_instance();
	$number = '0123456789';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($number) - 1; //put the length -1 in cache
    for ($i = 0; $i <= 5; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $number[$n];
    }
    $key = implode($pass); //turn the array into a string
    return $key;
}


function call_datatable(){

  // $script = '
  //     	<script type="text/javascript" src="'.base_url().'DataTable/media/js/jquery.dataTables.min.js"></script>
  //   	<script type="text/javascript" src="'.base_url().'DataTable/media/js/dataTables.bootstrap.js"></script>
	 //    <link rel="stylesheet" type="text/css" href="'.base_url().'DataTable/media/css/dataTables.bootstrap.css">
  // ';

// $script = '
// 	<script type="text/javascript" src="'.base_url().'"assets/vendors/custom/datatables/datatables.bundle.min.js"></script>
// ';

//<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>

$script = '
	<script src="'.base_url().'js/jquery.dataTables.min.js"></script>
	<script src="'.base_url().'js/dataTables.bootstrap4.min.js"></script>
';

// $script = '
	
// 	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
// 	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>
// ';

  return $script;
}

function get_users(){
	$ci = get_instance();
	
	global $users;
	
	if(empty($users)){
		$ci->db->select('*')
		->from('users')
		->where('role_id',2)
		->or_where('role_id',3)
		->or_where('role_id',4)
		->or_where('role_id',5);
		
		$query = $ci->db->get();
		
		if($query->num_rows() > 0){
			$users = $query->result();
		}else{
			$users = null;
		}
	}
	
	return $users;
}

function get_collaborators(){
	$ci = get_instance();
	
	global $collaborators;
		
	if(empty($collaborators)){
		$ci->db->select('*')
		->from('users')
		->where('role_id',5);
		
		$query = $ci->db->get();
		
		if($query->num_rows() > 0){
			$collaborators = $query->result();
		}else{
			$collaborators = null;
		}
	}
	
	return $collaborators;
}


function newFormatDate($date){
    $dayNum = strtolower(date("d",strtotime($date)));
    $time=strtotime($date);
    $year=date("Y",$time);
    $dayOfWeek = getDayWeek($date);
    $month = getMonthYear($date);
    $format =  $dayOfWeek  .', ' . $dayNum .  ' de '.  $month . ' ' . $year;
    return $format;
}
function getMonthYear($date){
    $time=strtotime($date);
    $month=date("F",$time);
    switch ($month){
        case 'January':
            $month = 'Enero';
            break;
        case 'February':
            $month = 'Febrero';
            break;
        case 'March':
            $month = 'Marzo';
            break;
        case 'April':
            $month = 'Abril';
            break;
        case 'May':
            $month = 'Mayo';
            break;
        case 'June':
            $month = 'Junio';
            break;
        case 'July':
            $month = 'Julio';
            break;
        case 'August':
            $month = 'Agosto';
            break;
        case 'September':
            $month = 'Septiembre';
            break;
        case 'October':
            $month = 'Octubre';
            break;
        case 'November':
            $month = 'Noviembre';
            break;
        case 'December':
            $month = 'Diciembre';
            break;
    }
    return $month;
}
function getDayWeek($date){
    $dayOfWeek = date("l", strtotime($date));
    switch ($dayOfWeek){
        case 'Monday':
            $dayOfWeek = 'Lunes';
            break;
        case 'Tuesday':
            $dayOfWeek = 'Martes';
            break;
        case 'Wednesday':
            $dayOfWeek = 'Miercoles';
            break;
        case 'Thursday':
            $dayOfWeek = 'Jueves';
            break;
        case 'Friday':
            $dayOfWeek = 'Viernes';
            break;
        case 'Saturday':
            $dayOfWeek = 'Sabado';
            break;
        case 'Sunday':
            $dayOfWeek = 'Domingo';
            break;
    }
    return $dayOfWeek;
}


 

?>