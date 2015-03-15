<?php

class Access extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		$this->load->model('access_model');
   		$this->load->model('usuario_model');
   		$this->load->model('ps_model');
	}
	public function login(){
		$this->load->view('access/login');
	}
	public function sign_in(){
		$login = $this->input->post('login');
		$password = md5($this->input->post('password'));
		$user = $this->usuario_model->get_user($login,$password);
		if(!$user){
			$mensagem = array(
							'mensagem' =>'Usuário ou senha inválidos.',
							'tipo_mensagem' => 'error'
						);
			$this->session->set_userdata($mensagem);
			redirect('access/login');
		}
		else{
			$newdata = array(
				'login_id' => $user->id_login,
				'login_perfil' => $user->perfil,
				'email' => $user->email,
				'nome' => $user->nome,
				'usuario' => $user->usuario,
				'semestre' => $user->semestre,
				'curso' => $user->curso,
				'telefone' => $user->telefone,
				'foto' => $user->foto 
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
		$this->load->view('access/recovery_password');
	}
	public function recovery(){
		$email = $this->input->post('email-recovery');
		$user = $this->access_model->get_email($email);
		if($user){
			$time = time() + (24 * 60 * 60);
			$encrypt = $this->access_model->generate_encryption($user->id_login,$time);
			$to      = $user->email;
			$url     = base_url()."index.php/access/reset?encrypt=".$encrypt;
			$subject = '[Processo Seletivo CJR] Link de recuperação de senha!';
			$message = "Olá, $user->nome! \r\n \r\nPara alterar sua senha entre no link em até 24 horas: \r\n \r\n	$url \r\n";
			$message = wordwrap($message, 70);
			$headers = 'From: donotreply@cjr.org.br';
			mail($to,$subject,$message,$headers);
			$this->session->set_userdata('mensagem','Email enviado com sucesso!');
			$this->session->set_userdata('subtitulo_mensagem','');
			$this->session->set_userdata('tipo_mensagem','success');		
			redirect('access/login');
		}
		else{
			$this->session->set_userdata('mensagem','Email não cadastrado!');
			$this->session->set_userdata('subtitulo_mensagem','');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('access/password_recovery');
		}
	}
	public function reset(){
		if(isset($_GET['encrypt'])){
			$dados['encrypt'] = $this->access_model->check_encryption($_GET['encrypt']);
			$dados['time'] = $this->access_model->check_time($_GET['encrypt']);
			$this->load->view('access/reset',$dados);
		}
		else{
		$this->load->view('access/reset');
		}
	}
	public function reset_password(){
		$pass = $this->input->post('senha');
		$new_pass = $this->input->post('novasenha');
		$encrypt = $this->input->post('encrypt');
		if(strlen($pass) > 5){
			if($pass == $new_pass){
				$this->access_model->recover_password($encrypt,md5($pass));
				$this->session->set_userdata('mensagem','Senha alterada com sucesso!');
				$this->session->set_userdata('tipo_mensagem','success');
				redirect('access/login');
			} 
			else {
				$this->session->set_userdata('mensagem','Senha e confirmação de senha não são iguais');
				$this->session->set_userdata('tipo_mensagem','error');
				redirect('access/reset?encrypt='.$encrypt);
			}
		} 
		else {
			$this->session->set_userdata('mensagem','Senha deve possuir mais de 6 caracteres');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('access/reset?encrypt='.$encrypt);
		}
	}
}