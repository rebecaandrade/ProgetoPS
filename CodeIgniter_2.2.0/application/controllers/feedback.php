<?php

class Feedback extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('feedback_model');
	}
	public function load_feedback($option){
		if($option == 0){
			$dados['feeds'] = $this->feedback_model->get_current_feed();
		}
		else{
			$dados['feeds'] = $this->feedback_model->get_passed_feed($option);
		}
		$dados['dates'] = $this->feedback_model->get_array_of_feeds_and_dates();
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
		$this->load->view('user/user_feedback',$dados);
	}
}