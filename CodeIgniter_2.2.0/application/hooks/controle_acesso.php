<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controle_access {

	function init() {

		//para utilizar a função date() do php
		if( ! ini_get('date.timezone') )
		{
		   date_default_timezone_set('GMT');
		}

		$permissao = array();

		$permissao['access'] = array();
		$permissao['admin'] = array();
		$permissao['feedback'] = array();
		$permissao['horario'] = array();
		$permissao['ps'] = array();
		$permissao['usuario'] = array();

		$permissao['access']['login'] = array(0);
		$permissao['access']['sign_in'] = array(0, 1, 2,3);
		$permissao['access']['sign_out'] = array(1,2,3);
		$permissao['access']['password_recovery'] = array(0);
		$permissao['access']['recovery'] = array(0);
		$permissao['access']['reset'] = array(0);
		$permissao['access']['reset_password'] = array(0);

		$permissao['admin']['load_home_admin'] = array(2);
		$permissao['admin']['check_member'] = array(2,3);
		$permissao['admin']['past_check_member'] = array(2.3);
		$permissao['admin']['load_home_superadmin'] = array(3);
		$permissao['admin']['list_admins'] = array(3);
		$permissao['admin']['delete'] = array(2,3);
		$permissao['admin']['update_admin'] = array(3);
		$permissao['admin']['update_admin_account'] = array(3);
		$permissao['admin']['create_admin'] = array(3);
		$permissao['admin']['insert_new_admin'] = array(3);
		$permissao['admin']['load_past_ps'] = array(2,3);
		$permissao['admin']['admin_feedback'] = array(2,3);
		$permissao['admin']['change_password'] = array(2,3);
		$permissao['admin']['set_new_password'] = array(2,3);

		$permissao['feedback']['load_feedback'] = array(1);
		$permissao['feedback']['show_feed'] = array(2,3);
		$permissao['feedback']['past_show_feed'] = array(2,3);
		$permissao['feedback']['set_feed'] = array(2,3);

		$permissao['horario']['load_user_interview'] = array(1);
		$permissao['horario']['save_interview_hours'] = array(1);
		$permissao['horario']['load_user_activity'] = array(1);
		$permissao['horario']['save_palestra_dinamica_hours'] = array(1);
		$permissao['horario']['generate_weeks'] = array(1,2,3);
		$permissao['horario']['divide_weeks'] = array(1,2,3);
		$permissao['horario']['jd_exists'] = array(1,2,3);
		$permissao['horario']['biggest_jd'] = array(1,2,3);
		$permissao['horario']['smallest_jd'] = array(1,2,3);
		$permissao['horario']['dayofweek'] = array(1,2,3);

		$permissao['ps']['listar'] = array(2,3);
		$permissao['ps']['cadastrar'] = array(3);
		$permissao['ps']['excluir'] = array(3);
		$permissao['ps']['edit_hours'] = array(3);
		$permissao['ps']['update_hours'] = array(3);
		$permissao['ps']['selecionar'] = array(2,3);
		$permissao['ps']['ps_valid_dates'] = array(3);
		$permissao['ps']['ps_update_valid_dates'] = array(3);
		$permissao['ps']['inscribe_in_current_ps'] = array(1,2,3);
		$permissao['ps']['open_ps'] = array(3);

		$permissao['usuario']['index'] = array(0,1,2,3);
		$permissao['usuario']['home'] = array(1,2,3);
		$permissao['usuario']['load_home_user'] = array(1);
		$permissao['usuario']['load_user_page'] = array(1);
		$permissao['usuario']['list_users'] = array(2,3);
		$permissao['usuario']['list_all_users'] = array(2,3);
		$permissao['usuario']['past_list_users'] = array(2,3);
		$permissao['usuario']['delete'] = array(2,3);
		$permissao['usuario']['create_user'] = array(0);
		$permissao['usuario']['contact_us'] = array(1);
		$permissao['usuario']['contact_email'] = array(1);
		$permissao['usuario']['insert_new_user'] = array(0);
		$permissao['usuario']['create_new_session'] = array(0,1,2,3);
		$permissao['usuario']['edit_account'] = array(1);
		$permissao['usuario']['session_update'] = array(1,2,3);
		$permissao['usuario']['update_account'] = array(1,2,3);
		$permissao['usuario']['change_password'] = array(1,2,3);
		$permissao['usuario']['set_new_password'] = array(1,2,3);
		$permissao['usuario']['base_img_dir'] = array(1,2,3);

		$ci =& get_instance();
		$controller = $ci->router->class;
		$action = $ci->router->method;

		if ($ci->session->userdata('login_perfil') == FALSE) {
			$perfil = 0;
		}
		else {
			$perfil = $ci->session->userdata('login_perfil');
		}

		if($ci->session->userdata('login_id')){
			$ci->load->model('usuario_model');
			if($ci->usuario_model->search_user($ci->session->userdata('login_id'))==false){
				$ci->session->sess_destroy();
				redirect('access/login');
			}
		}

		$v = false;
		foreach ($permissao[$controller][$action] as $opcao) {
			if ($opcao == $perfil) {
				$v = true;
				break;
			}
		}
		if (!$v) {
			redirect('access/login');
		}

	}
}

?>