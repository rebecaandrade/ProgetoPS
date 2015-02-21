<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
	}
	public function index(){
<<<<<<< HEAD
		redirect('usuario/listar');//só enquanto as paradas de login ainda nao estao prontas
		//$this->load->view('login'); ignora esses bagaço aki, to testando umas paradas
	}
	public function listar(){
        $dados['users'] = $this->usuario_model->buscar_usuarios();
        $this->load->view('admin/user_list', $dados);
    }
    public function deletar(){
    	$this->usuario_model->deletar_usuario($_GET['id']);
    	redirect('usuario/listar');
    }
    public function cadastrar_usuario(){
    	//$this->load->view()
    }
=======
		if($this->session->userdata('login_id') != false){
			redirect('usuario/home');
		}
		else{
			redirect('usuario/login');
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
	public function login(){
		$this->load->view('login');
	}
	public function logar(){
		$login = $_POST['login'];
		$password = md5($_POST['password']);
		$user = $this->usuario_model->get_user($login,$password);
		if(!$user){
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
	public function deslogar(){
		$this->session->sess_destroy();
		redirect('usuario/login');
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
    	//$this->load->view()
    }
    public function edit_account(){
    	$dados['user'] = $this->usuario_model->search_user($this->session->userdata('login_id'));
    	$this->load->view('user/edit_info',$dados);
    }
    public function update_account(){
    	$id = $this->session->user_data('login_id');
    	if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['semestre'] == NULL ||
    		$_POST['curso'] == NULL || $_POST['telefone'] == NULL){
    		$this->session->set_userdata('mensagem','erro ao atualizar cadastro, tente novamente');
    		redirect('usuario/edit_account');
    	}
    	else if($this->usuario_model->verify_password($id,$_POST['password'])){
    		$this->usuario_model->update_user($id,$_POST);
    		$this->session->set_userdata('mensagem','cadastro atualizado com sucesso');
    		redirect('usuario/home');
    	}
    }
>>>>>>> 339209d339e2ff9a27e3f8a8d847a08bd5d47d00
}