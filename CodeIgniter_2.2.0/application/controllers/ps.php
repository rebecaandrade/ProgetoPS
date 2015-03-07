<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PS extends CI_Controller {

    public function __construct() {
            parent::__construct();
            $this->load->model('ps_model');
        }

/// Carregando páginas
    public function listar(){
        $this->load->model('ps_model');
        $dados['tb_PS'] = $this->ps_model->search_ps(); 
        $this->load->view('admin/ps_page', $dados);
    }
/// Serviços
    public function cadastrar(){
        $this->load->model('ps_model');
        if($this->ps_model->current_ps()){
            $dados = array(
                'nome' => $this->input->post('nome'),
                'data_abertura' => $this->input->post('data_abertura'), 
                'data_dinamica' => $this->input->post('data_dinamica'),
                'data_apresentacao' => $this->input->post('data_apresentacao'),
                'primeiro_horario_dinamica' => $this->input->post('primeiro_horario_dinamica'),
                'segundo_horario_dinamica' => $this->input->post('segundo_horario_dinamica'),
                'primeiro_horario_apresentacao' => $this->input->post('primeiro_horario_apresentacao'),
                'segundo_horario_apresentacao' => $this->input->post('segundo_horario_apresentacao'),
                );
            redirect('admin/user_list');
        }
    }

    public function excluir($id){
        $this->load->model('ps_model');
        try{
            $this->ps_model->close_ps($id);
        } catch(Exception $e){
            $this->session->set_userdata('mensagem', $e->getMessage());
        }
        redirect('admin/user_list');
    }

    public function selecionar($id){
        $this->load->model('ps_model');
        try{
            $this->ps_model->show_ps($id);
        } catch(Exception $e){
            $this->session->set_userdata('mensagem', $e->getMessage());
        }
    }

    public function adicionar_data_valida(){
        
    }
    public function inscribe_in_current_ps(){
        $dados = array('tb_login_id_login' => $this->session->userdata('login_id'),
                'status_feed' => '2',
                'entrevistado' => '0');
        $this->ps_model->inscribe_user_in_current_ps($dados);
        $this->session->set_userdata('mensagem','Você foi inscrito com sucesso');
        redirect('usuario/home');
    }
}