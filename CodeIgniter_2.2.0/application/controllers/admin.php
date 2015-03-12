<?php

class Admin extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		$this->load->model('admin_model');
   		$this->load->model('ps_model');
	}
	public function load_home_admin(){
		$this->load->model('ps_model');
		$this->load->model('horario_model');
		$id_ps = $this->ps_model->current_ps();
		$this->session->set_userdata('current_ps',$id_ps);

		if($id_ps){
			$dados = $this->admin_model->get_time_counters($id_ps);
		}
		$dados['horas_palestra'] = $this->horario_model->palestra_hours();
		$dados['horas_dinamica'] = $this->horario_model->dinamica_hours();

		$contador1 = 0;
		$contador2= 0;
		foreach ($dados['palestra'] as $inscrito) {
			if($inscrito->tempo == $dados['horas_palestra']['palestra_1']){
				$contador1++;
			}
			if($inscrito->tempo == $dados['horas_palestra']['palestra_2']){
				$contador2++;
			}
		}
		$dados['palestra_inscritos_1'] = $contador1;
		$dados['palestra_inscritos_2'] = $contador2;

		$contador1 = 0;
		$contador2= 0;
		foreach ($dados['dinamica'] as $inscrito) {
			if($inscrito->tempo == $dados['horas_dinamica']['dinamica_1']){
				$contador1++;
			}
			if($inscrito->tempo == $dados['horas_dinamica']['dinamica_2']){
				$contador2++;
			}
		}
		$dados['dinamica_inscritos_1'] = $contador1;
		$dados['dinamica_inscritos_2'] = $contador2;
		$this->load->view('admin/admin_page',$dados);
	}
	public function check_member(){
		$dados['user'] = $this->admin_model->get_user_information($_GET['id']);
		$this->load->view('admin/user_info',$dados);
	}
	public function load_home_superadmin(){
		$this->load->model('ps_model');
		$this->load->model('horario_model');
		$id_ps = $this->ps_model->current_ps();
		$this->session->set_userdata('current_ps',$id_ps);
		if($id_ps){
			$dados = $this->admin_model->get_time_counters($id_ps);
		}
		$dados['horas_palestra'] = $this->horario_model->palestra_hours();
		$dados['horas_dinamica'] = $this->horario_model->dinamica_hours();
		
		$contador1 = 0;
		$contador2 = 0;
		foreach ($dados['palestra'] as $inscrito) {
			if($inscrito->tempo == $dados['horas_palestra']['palestra_1']){
				$contador1++;
			}
			if($inscrito->tempo == $dados['horas_palestra']['palestra_2']){
				$contador2++;
			}
		}
		$dados['palestra_inscritos_1'] = $contador1;
		$dados['palestra_inscritos_2'] = $contador2;

		$contador1 = 0;
		$contador2 = 0;
		foreach ($dados['dinamica'] as $inscrito) {
			if($inscrito->tempo == $dados['horas_dinamica']['dinamica_1']){
				$contador1++;
			}
			if($inscrito->tempo == $dados['horas_dinamica']['dinamica_2']){
				$contador2++;
			}
		}
		$dados['dinamica_inscritos_1'] = $contador1;
		$dados['dinamica_inscritos_2'] = $contador2;
		$this->load->view('admin/admin_page',$dados);
	}
	public function list_admins(){
		if($this->session->userdata('login_perfil')!=3){
			$this->session->set_userdata('mensagem','Você não tem acesso a esta pagina');
			$this->session->set_userdata('tipo_mensagem','error');
			redirect('usuario/home');
		}
		else{
			$dados['users'] = $this->admin_model->get_admins();
			$this->load->view('admin/admin_list',$dados);
		}
	}
	public function delete(){
		$this->admin_model->delete_admin($_GET['id']);
		redirect('admin/list_admins');
	}
	public function update_admin($id){
		$dados['user'] = $this->admin_model->get_user_information($id);
		$this->load->view('admin/admin_info',$dados);
	}
	public function update_admin_account(){
		if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['telefone'] == NULL){
			$this->session->set_userdata('mensagem','Alguns campos obrigatórios não foram preenchidos');
			$this->update_admin($_POST['id']);
		}
		else {
			$this->admin_model->update_admin($_POST);
			$this->session->set_userdata('mesnsagem','Atualização realizada com sucesso');
			redirect('usuario/home');
		}
	}
	public function create_admin(){
		$this->load->view('admin/admin_create');
	}
	public function insert_new_admin(){
		if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['telefone'] == NULL ||
			$_POST['usuario'] == NULL || $_POST['senha'] == NULL ||  $_POST['confirmasenha'] == NULL){
			$this->session->set_userdata('mensagem','Alguns campos obrigatórios não foram preenchidos');
			redirect('admin/create_admin');
		}
		elseif ($_POST['senha'] != $_POST['confirmasenha']){
			$this->session->set_userdata('mensagem','Senhas digitadas não são iguais');
			redirect('admin/create_admin');
		}
		elseif ($this->admin_model->check_admin($_POST['usuario'])){
			$this->session->set_userdata('mensagem','Usuário já existente');
			redirect('admin/create_admin');
		}
		else{
			$_POST['perfil'] = '2';
			$_POST['senha'] = md5($_POST['senha']);
			$this->admin_model->insert_new_admin($_POST);
			$this->session->set_userdata('mensagem','Admin Cadastrado com sucesso');
			redirect('admin/list_admins');
		}
	}
	/* Apagar depois somente para carregar a pagina de FeedBack  */
	public function admin_feedback(){
		$this->load->view('admin/admin_feedback');
	}
	public function teste_functions(){
		die(var_dump($this->session->userdata));
	}
}