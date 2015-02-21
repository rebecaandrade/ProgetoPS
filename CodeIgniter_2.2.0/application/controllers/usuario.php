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
    public function cadastrar_usuario(){
    	//$this->load->view()
    }
    public function edita_cadastro(){
    	$dados['user'] = $this->usuario_model->pesquisa_usuario($_GET['id']);
    	$this->load->view('edita',$dados);
    }
}