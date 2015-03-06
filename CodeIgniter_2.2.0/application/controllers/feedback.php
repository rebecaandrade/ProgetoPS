<?php

class Feedback extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		$this->load->model('feedback_model');
	}
	public function load_feedback(){
        $dados['feeds'] = $this->feedback_model->get_current_feed();
        $this->feedback_model->get_array_of_feeds_and_dates();

        $this->load->view('user/user_feedback',$dados);
    }
}