<?php

class Admin extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		$this->load->model('admin_model');
	}
	public function load_home_admin(){
		$this->load->view('admin/admin_page');
	}
	public function check_member(){
		$dados['user'] = $this->admin_model->get_user_information($_GET['id']);
		$this->load->view('admin/user_info',$dados);
	}
	public function load_home_superadmin(){
		$this->load->view('admin/admin_page');
	}
	public function list_admins(){
		if($this->session->userdata('login_perfil')!=3){
			$this->session->set_userdata('mensagem','Você não tem acesso a esta pagina');
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
			$this->session->set_userdata('mensagem','alguns campos obrigatórios não foram preenchidos');
			$this->update_admin($_POST['id']);
		}
		else die;
	}
	public function create_admin(){
		$this->load->view('admin/admin_create');
	}
	public function insert_new_admin(){
		if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['telefone'] == NULL ||
			$_POST['usuario'] == NULL || $_POST['senha'] == NULL ||  $_POST['confirmasenha'] == NULL){
			$this->set_userdata('mensagem','alguns campos obrigatórios não foram preenchidos');
		redirect('admin/create_admin');
		}
	}
	/* Apagar depois somente para carregar a pagina de FeedBack  */
	public function admin_feedback(){
		$this->load->view('admin/admin_feedback');
	}
}