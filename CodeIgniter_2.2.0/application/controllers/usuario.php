<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
	}
	public function index(){
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
}