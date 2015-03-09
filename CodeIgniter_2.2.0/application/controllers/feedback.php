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
	public function set_feed(){
		
	}
}