<?php

class Usuario extends CI_Controller {

	public function __construct() {
   		parent::__construct();
   		$this->load->model('usuario_model');
	}

	public function listar(){
        $dados = $this->usuario_model->buscar_usuarios();
        $this->load->view('usuario/lista_participante', $dados);
    }