<?php

class Admin extends CI_Controller {
	public function __construct() {
   		parent::__construct();
   		//$this->load->model('admin_model');
	}
	public function load_home_admin(){
		$this->load->view('admin/admin_page');
	}
	public function load_home_superadmin(){
		//não tem a view ainda;
	}
}