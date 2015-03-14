<?php

class Feedback extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('feedback_model');
		$this->load->model('admin_model');
	}
	public function load_feedback($option){
		if($option == 0){
			$dados['feeds'] = $this->feedback_model->get_current_feed();
		}
		else{
			$dados['feeds'] = $this->feedback_model->get_passed_feed($option);
		}
		$dados['dates'] = $this->feedback_model->get_array_of_feeds_and_dates();
		if(isset($dados['dates'])){
			foreach ($dados['dates'] as $date) {
				$text = explode('-',$date);
				if($text[1] < 7 ){
					$semestre[] = "1º/"."$text[0]";
				}
				else{
					$semestre[] = "2º/"."$text[0]";
				}
			}
			$dados['semestres'] = $semestre;
		}
		$this->load->view('user/user_feedback',$dados);
	}
	public function show_feed(){
		$dados['feed'] = $this->feedback_model->get_this_feed($_GET['id']);
		$dados['user'] = $this->admin_model->get_user_information($_GET['id']);
		$this->load->view('admin/admin_feedback',$dados);
	}
	public function past_show_feed(){
		$dados['feed'] = $this->feedback_model->get_this_feed($_GET['id']);
		$dados['user'] = $this->admin_model->get_user_information($_GET['id']);
		$this->load->view('admin/past_admin_feedback',$dados);
	}
	public function set_feed($id){
		if(strlen($_POST['feedback'] >0)){
			$_POST['entrevistado'] = 1;
		}
		if($this->feedback_model->insert_feed($id,$_POST)){
			$this->session->set_userdata('mensagem','Feedback adicionado com sucesso');
			$this->session->set_userdata('tipo_mensagem','success');
		}
		else{
			$this->session->set_userdata('mensagem','Não foi possível adicionar o feed');
			$this->session->set_userdata('tipo_mensagem','error');
		}
		redirect('usuario/list_users');
	}
	public function teste_page(){
	}
}