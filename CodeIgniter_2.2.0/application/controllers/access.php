<?php

class Access extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		$this->load->model('access_model');
   		$this->load->model('usuario_model');
	}
	public function login(){
		$this->load->view('login');
	}
	public function sign_in(){
		$login = $this->input->post('login');
		$password = md5($this->input->post('password'));
		$user = $this->usuario_model->get_user($login,$password);
		
		if(!$user){
			/* setar msg do jeito certo*/
			$mensagem = array(
							'mensagem' =>'Usuário ou senha inválidos.'
						);
			$this->session->set_userdata($mensagem);
			redirect('usuario/login');
		}
		else{
			$newdata = array(
				'login_id' => $user->id_login,
				'login_perfil' => $user->perfil,
				'email' => $user->email,
				'nome' => $user->nome,
				'usuario' => $user->usuario, 
				);
			
			$this->session->set_userdata($newdata);
			redirect('usuario/home');
		}
	}
	public function sign_out(){
		$this->session->sess_destroy();
		redirect('access/login');
	}
}