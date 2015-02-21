<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
	}
	public function index(){
		//redirect('usuario/lista');//só enquanto as paradas de login ainda nao estao prontas
		$this->load->view('user/user_page'); //ignora esses bagaço aki, to testando umas paradas
	}
	public function lista(){
        $dados['users'] = $this->usuario_model->buscar_usuarios();
        $this->load->view('admin/user_list', $dados);
    }
    public function deletar(){
    	$this->usuario_model->deletar_usuario($_GET['id']);
    	redirect('usuario/lista');
    }
    public function cadastra_usuario(){
    	//$this->load->view()
    }
    public function edita_cadastro(){
    	$dados['user'] = $this->usuario_model->pesquisa_usuario($this->session->user_data('login_id'));
    	$this->load->view('edita',$dados);
    }
    public function atualizar_cadastro(){
    	$id = $this->session->user_data('login_id');
    	if($_POST['nome'] == NULL || $_POST['email'] == NULL || $_POST['semestre'] == NULL ||
    		$_POST['curso'] == NULL || $_POST['telefone'] == NULL){
    		$this->session->set_userdata('mensagem','erro ao atualizar cadastro, tente novamente');
    		redirect('usuario/edita_cadastro');
    	}
    	else if($this->usuario_model->verifica_senha($id,$_POST['senha'])){
    		$this->usuario_model->atualiza_usuario($id,$_POST);
    		$this->session->set_userdata('mensagem','cadastro atualizado com sucesso');
    		redirect('usuario/home');
    	}
    }
}