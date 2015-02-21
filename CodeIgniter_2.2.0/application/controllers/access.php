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
	public function password_recovery(){
		$this->load->view('recovery_password');
	}
	public function recovery(){

		$email = $this->input->post('email-recovery');
		$user = $this->access_model->get_email($email);

		if($user){
			$password = random_string('alnum', 9);
			$this->access_model->update_password($user->usuario,md5($password));
			
			$to      =  $user->email;
			$subject = '[Processo Seletivo CJR] Alteração de senha';
			$message = "Olá, $user->nome! \r\n \r\nSeu acesso foi alterado para: \r\n \r\n $password \r\n";
			$message = wordwrap($message, 70);
			$headers = 'From: donotreply@cjr.org.br';/* Ver qual email que deve mandar */
			mail($to,$subject,$message,$headers);
			/*setar mensagem de sucesso"Um email foi enviado com sua nova senha"*/
			redirect('access/login');
		}
		else{
			/*mensagem de fracasso "Email não cadastrado"*/
			redirect('access/password_recovery');
		}
	}
}