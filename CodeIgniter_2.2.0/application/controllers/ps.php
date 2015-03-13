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
        var_dump($_POST);
        if($_POST['name-ps'] == NULL || $_POST['date-ps-dinamica'] == NULL || $_POST['date-ps-palestra'] == NULL 
            || $_POST['ps-dinamica-hour-1'] == NULL || $_POST['ps-dinamica-hour-2'] == NULL 
            || $_POST['ps-palestra-hour-1'] == NULL || $_POST['ps-palestra-hour-2'] == NULL){

            $this->session->set_userdata('mensagem','Um campo não foi preenchido');
            $this->session->set_userdata('tipo_mensagem','error');
            redirect('ps/open_ps');
        }
        else{
            $start = $this->input->post('interview-date-start');
            $end = $this->input->post('interview-date-end');
            if(!$start || !$end){
                $this->session->set_userdata('mensagem','Insira datas de início e término do period de entrevistas');
                $this->session->set_userdata('tipo_mensagem','error');
                redirect('ps/open_ps');
            }
            else{
                $start = explode("-",$start);
                $end = explode("-",$end);
                var_dump($start);
                var_dump($end);

                $start_jd = GregorianToJD($start[1], $start[2], $start[0]);
                $end_jd = GregorianToJD($end[1], $end[2], $end[0]);
                var_dump($start_jd);
                var_dump($end_jd);
                if($end_jd < $start_jd){
                    $this->session->set_userdata('mensagem','Término do periodo de entrevistas deve ocorrer depois do início');
                    $this->session->set_userdata('tipo_mensagem','error');
                    redirect('ps/open_ps');
                }
            }
            die;
            $date = getdate();
            $dados = array(
                'nome' => $this->input->post('name-ps'),
                'data_abertura' => $date['year'].'-'.$date['mon'].'-'.$date['mday'],
                'data_dinamica' => $this->input->post('date-ps-dinamica'),
                'data_apresentacao' => $this->input->post('date-ps-palestra'),
                'primeiro_horario_dinamica' => $this->input->post('ps-dinamica-hour-1'),
                'segundo_horario_dinamica' => $this->input->post('ps-dinamica-hour-2'),
                'primeiro_horario_apresentacao' => $this->input->post('ps-palestra-hour-1'),
                'segundo_horario_apresentacao' => $this->input->post('ps-palestra-hour-2'),
                'status_ps' => TRUE
                );
            var_dump($dados);
            die;
            //$this->ps_model->new_ps($dados);
            redirect('ps/listar');
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
        $this->session->set_userdata('tipo_mensagem','success');
        redirect('usuario/home');
    }
    public function open_ps(){
        $this->load->view('admin/form_ps');
    }
}