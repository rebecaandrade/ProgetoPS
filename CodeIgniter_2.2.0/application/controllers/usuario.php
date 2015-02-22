<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
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
			redirect('usuario/load_home_admin');
		}
		else redirect('usuario/load_home_superadmin');
	}
	public function load_home_user(){
		$this->load->view('user/user_page');
	}
	public function list_users(){
        $dados['users'] = $this->usuario_model->retrieve_users();
        $this->load->view('admin/user_list', $dados);
    }
    public function delete(){
    	$this->usuario_model->delete_user($_GET['id']);
    	redirect('usuario/list_users');
    }
    public function create_user(){
    	$this->load->view('access/form');
    }
    public function insert_new_user(){
    	if($_POST['usuario'] == NULL || $_POST['senha'] == NULL || $_POST['novasenha'] == NULL || 
    		$_POST['email'] == NULL || $_POST['curso'] == NULL || $_POST['semestre'] == NULL || 
    		$_POST['telefone'] == NULL){
    		$this->session->set_userdata('mensagem','Alguns campos obrigatórios não foram preenchidos');
    		redirect('usuario/create_user');
    	}
    	elseif($_POST['senha'] != $_POST['novasenha']){
    		$this->session->set_userdata('mensagem','Senhas digitadas não são iguais');
    		redirect('usuario/create_user');
    	}
    	//else
    }
    public function edit_account(){
    	$dados['user'] = $this->usuario_model->search_user($this->session->userdata('login_id'));
    	$this->load->view('user/edit_info',$dados);
    }
    public function session_update($user){
    	$newdata = array(
				'email' => $user['email'],
				'nome' => $user['nome'], 
				);	
		$this->session->set_userdata($newdata);
		
    }
    public function update_account(){
    	$id = $this->session->userdata('login_id');
    	if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['semestre'] == NULL ||
    		$_POST['curso'] == NULL || $_POST['telefone'] == NULL || $_POST['password'] == NULL){
    		$this->session->set_userdata('mensagem','erro ao atualizar cadastro, tente novamente');
    		redirect('usuario/edit_account');
    	}
    	else if($this->usuario_model->verify_password($id,$_POST['password'])){
    		$this->usuario_model->update_user($id,$_POST);
    		$this->session_update($_POST);
    		$this->session->set_userdata('mensagem','cadastro atualizado com sucesso');
    		redirect('usuario/home');
    	}
    }
    
}