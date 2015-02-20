<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
	}
	public function index(){
		redirect('usuario/listar');
	}
	public function listar(){
        $dados['users'] = $this->usuario_model->buscar_usuarios();
        $this->load->view('admin/user_list', $dados);
    }
}