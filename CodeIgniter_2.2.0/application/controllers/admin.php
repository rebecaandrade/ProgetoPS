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
	public function update_admin(){
		$dados['user'] = $this->admin_model->get_user_information($_GET['id']);
		$this->load->view('admin/admin_info');
	}
	/* Apagar depois somente para carregar a pagina de FeedBack  */
	public function admin_feedback(){
		$this->load->view('admin/admin_feedback');
	}
}
