<?php

class Horario extends CI_Controller {
  public function __construct() {
       parent::__construct();
       $this->load->model('horario_model');
  }
  //somente para fazer a view, depois apagar
  public function load_user_interview(){
    $this->load->view('user/user_interview');
  }
}
