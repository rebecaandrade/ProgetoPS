<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usuario_model');
		$this->load->model('ps_model');
	}
	public function index(){
		if($this->session->userdata('login_id') != false){
			redirect('usuario/home');
		}
		else{
			redirect('access/login');
		}
		//redirect('usuario/lista');//só enquanto as paradas de login ainda nao estao prontas
		//$this->load->view('user/user_page'); //ignora esses bagaço aki, to testando umas paradas
	}
	public function home(){
		if($this->session->userdata('login_perfil') == 1){
			redirect('usuario/load_home_user');
		}
		elseif($this->session->userdata('login_perfil') == 2){
			redirect('admin/load_home_admin');
		}
		elseif($this->session->userdata('login_perfil') == 3){
			redirect('admin/load_home_superadmin');
		}
		else
			redirect('access/login');
	}
	public function load_home_user(){
		$id_ps = $this->ps_model->current_ps();
		$this->session->set_userdata('current_ps',$id_ps);
		$flag = $this->session->userdata('after_sign_up');
		if(!$this->usuario_model->inscribed_on_current_ps() && $this->session->userdata('post_login')!=1){
			$this->load->view('user/user_postlogin');
		}
		elseif ($flag) {
			redirect('horario/load_user_interview');
		}
		else{
			$this->load_user_page();
		}
	}
	public function load_user_page(){
		$this->session->set_userdata('post_login',1);
		$this->load->view('user/user_page');
	}
	public function list_users(){
		$dados['users'] = $this->usuario_model->retrieve_users();
		$this->load->view('admin/user_list', $dados);
	}
	public function list_all_users(){
		$dados['users'] = $this->usuario_model->retrieve_all_users();
		$this->load->view('admin/user_list', $dados);
	}
	public function past_list_users(){
		$dados['users'] = $this->usuario_model->retrieve_users();
		$this->load->view('admin/past_user_list', $dados);
	}
	public function delete(){
		$this->usuario_model->delete_user($_GET['id']);
		$this->session->set_userdata('mensagem','Usuario excluido com sucesso');
		$this->session->set_userdata('tipo_mensagem','success');
		redirect('usuario/list_users');
	}
	public function delete_account(){
		$this->usuario_model->delete_user($_GET['id']);
		$this->session->sess_destroy();
		redirect('access/login');
	}
	public function create_user(){
		$this->load->view('access/form');

	}
	public function contact_us(){
		$this->load->view('user/user_email');
	}
	public function contact_email(){
		$mensagem = $this->input->post('email');
		$mensagem = trim($mensagem);
		if($mensagem){
			$date = getdate();
			$to      =  'direta@cjr.org.br';
			$subject = '[Processo Seletivo CJR] Fale conosco de '.$this->session->userdata('nome');
			$message = "O usuário ".$this->session->userdata('nome')." disse: \r\n \r\n".$this->input->post('email')."\r\n \r\nEnviado em ".$date['mday']."/".$date['mon']."/".$date['year']." as ".$date['hours'].":".$date['minutes']." \r\n";
			$message = wordwrap($message, 70);
			$headers = 'From: donotreply@cjr.org.br';/* Ver qual email que deve mandar */
			mail($to,$subject,$message,$headers);
			$this->session->set_userdata('mensagem','E-mail enviado com sucesso!');
			$this->session->set_userdata('tipo_mensagem','success');
			redirect('usuario/home');
		}
		else{
			$this->session->set_userdata('mensagem','E-mail não contêm texto');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/contact_us');
		}
	}
	public function insert_new_user(){
		if($_POST['usuario'] == NULL || $_POST['senha'] == NULL || $_POST['novasenha'] == NULL || 
			$_POST['email'] == NULL || $_POST['curso'] == NULL || $_POST['semestre'] == NULL || 
			$_POST['telefone'] == NULL || $_POST['nome'] == NULL){
			$this->session->set_userdata('mensagem','Alguns campos obrigatórios não foram preenchidos');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			$this->session->set_userdata('mensagem','E-mail inválido');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		elseif(strlen($_POST['senha']) < 6){
			$this->session->set_userdata('mensagem','A senha deve ter no mínimo 6 caracteres!');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		elseif($_POST['senha'] != $_POST['novasenha']){
			$this->session->set_userdata('mensagem','Senhas digitadas não são iguais');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		elseif($this->usuario_model->check_existence_of_email($_POST['email'])){
			$this->session->set_userdata('mensagem','Email já cadastrado');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		elseif($this->usuario_model->check_existence_of_user($_POST['usuario'])){
			$this->session->set_userdata('mensagem','Usuario já cadastrado');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/create_user');
		}
		else{
			$_POST['perfil'] = '1';
			$_POST['id_login'] = $this->usuario_model->create_new_user($_POST);
			$id = $_POST['id_login'];
			$config['upload_path'] = $this->base_img_dir();
			$config['allowed_types'] = 'jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$dados = NULL;
			if(isset($_FILES['foto'])){
				$extensao = strrchr($_FILES['foto']['name'],'.');
				$_FILES['foto']['name'] = md5(microtime()).'_'.$id.$extensao;
				$ok = $this->upload->do_upload('foto');
				$picture = $this->upload->data();
				if($ok){
					$old_picture_name = end(explode('/',$this->session->userdata('foto')));
					unlink($this->base_img_dir().'\\'.$old_picture_name);
					$dados['foto'] = base_url().'complemento/user_pictures/'.$picture['file_name'];
					$this->usuario_model->update_user($id,$dados);
					$_POST['foto'] = $dados['foto'];
				}
			}
			$this->create_new_session($_POST);
			redirect('usuario/home');
		}

	}
	public function create_new_session($dados){
		$newdata = array(
				'login_id' => $dados['id_login'],
				'login_perfil' => $dados['perfil'],
				'email' => $dados['email'],
				'nome' => $dados['nome'],
				'usuario' => $dados['usuario'],
				'semestre' => $dados['semestre'],
				'email' => $dados['email'],
				'curso' => $dados['curso'],
				'telefone' => $dados['telefone'],
				'foto' => $dados['foto'],);
		$this->session->set_userdata($newdata);
	}
	public function edit_account(){
		$dados['user'] = $this->usuario_model->search_user($this->session->userdata('login_id'));
		$this->load->view('user/edit_info',$dados);
	}
	public function session_update(){
		$id = $this->session->userdata('login_id');
		$user = $this->usuario_model->search_user($id);
		$newdata = array(
				'curso' => $user->curso,
				'semestre' => $user->semestre,
				'telefone' => $user->telefone,
				'email' => $user->email,
				'nome' => $user->nome,
				'foto' => $user->foto,);
		$this->session->set_userdata($newdata);
	}
	public function update_account(){
		$id = $this->session->userdata('login_id');
		$config['upload_path'] = $this->base_img_dir();
		$config['allowed_types'] = 'jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['semestre'] == NULL ||
			$_POST['curso'] == NULL || $_POST['telefone'] == NULL){
			$this->session->set_userdata('mensagem','Erro ao atualizar cadastro, tente novamente.');
			$this->session->set_userdata('tipo_mensagem','error');
			$this->session->set_userdata('subtitulo_mensagem','Campos obrigatórios não preenchidos.');
			redirect('usuario/edit_account');
		}
		elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			$this->session->set_userdata('mensagem','E-mail inválido');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/edit_account');
		}
		else{
			if(isset($_FILES['foto'])){
				$extensao = strrchr($_FILES['foto']['name'],'.');
				$_FILES['foto']['name'] = md5(microtime()).'_'.$id.$extensao;
				$ok = $this->upload->do_upload('foto');
				$picture = $this->upload->data();
				if($ok){
					$old_picture_name = end(explode('/',$this->session->userdata('foto')));
					unlink($this->base_img_dir().'\\'.$old_picture_name);
					$_POST['foto'] = base_url().'complemento/user_pictures/'.$picture['file_name'];
				}
			}
			$this->usuario_model->update_user($id,$_POST);
			$this->session_update();
			$this->session->set_userdata('mensagem','Cadastro atualizado com sucesso!');
			$this->session->set_userdata('tipo_mensagem','success');
			redirect('usuario/home');
		}
	}
	public function change_password(){
		$this->load->view('user/user_change_password');
	}
	public function set_new_password(){
		if($_POST['senha_old'] == NULL || $_POST['senha'] == NULL || $_POST['novasenha'] == NULL){
			$this->session->set_userdata('mensagem','Erro ao atualizar senha.');
			$this->session->set_userdata('tipo_mensagem','error');
			$this->session->set_userdata('subtitulo_mensagem','Alguns dos campos não foram preenchidos');
			redirect('usuario/change_password');
		}
		elseif(!$this->usuario_model->verify_password($this->session->userdata('login_id'),$_POST['senha_old'])){
			$this->session->set_userdata('mensagem','Erro ao atualizar senha.');
			$this->session->set_userdata('tipo_mensagem','error');
			$this->session->set_userdata('subtitulo_mensagem','Senha Atual incorreta.');
			redirect('usuario/change_password');
		}
		elseif($_POST['senha'] != $_POST['novasenha']){
			$this->session->set_userdata('mensagem','Erro ao atualizar senha.');
			$this->session->set_userdata('tipo_mensagem','error');
			$this->session->set_userdata('subtitulo_mensagem','Novas senhas não são iguais.');
			redirect('usuario/change_password');
		}
		elseif(strlen($_POST['senha']) < 6){
			$this->session->set_userdata('mensagem','Erro ao atualizar senha.');
			$this->session->set_userdata('tipo_mensagem','error');
			$this->session->set_userdata('subtitulo_mensagem','Nova senha é muito pequena');
			redirect('usuario/change_password');
		}
		else{
			$dados['senha'] = $_POST['senha'];
			$this->usuario_model->update_password($this->session->userdata('login_id'),$dados);
			$this->session->set_userdata('mensagem','Senha atualizada com sucesso!');
			$this->session->set_userdata('tipo_mensagem','success');
			redirect('usuario/home');
		}
	}
	public function base_img_dir(){
		return getcwd().'\complemento\user_pictures';
	}
	public function teste_functions_2(){
		$this->load->view('view_teste');
	}
}