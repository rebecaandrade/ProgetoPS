<?php

class PL_Danilo extends CI_Controller{
  public function user_activity(){
    $this->load->view('user/user_activity');
  }

  public function user_email(){
    $this->load->view('user/user_email');
  }

  public function user_feedback(){
    $this->load->view('user/user_feedback');
  }

  public function user_interview(){
    $this->load->view('user/user_interview');
  }

  public function user_postlogin(){
    $this->load->view('user/user_postlogin');
  }

  public function edit_info(){
    $this->load->view('user/edit_info');
  }

  public function admin_feedback(){
    $this->load->view('admin/admin_feedback');
  }

  public function admin_info(){
    $this->load->view('admin/admin_info');
  }

  public function admin_list(){
    $this->load->view('admin/admin_list');
  }

  public function admin_page(){
    $this->load->view('admin_page');
  }

  public function ps_page(){
    $this->load->view('admin/ps_page');
  }

  public function user_info(){
    $this->load->view('admin/user_info');
  }

  public function user_list(){
    $this->load->view('admin/user_list');
  }

  public function admin_create(){
    $this->load->view('admin/admin_create');
  }

  public function form_ps(){
    $this->load->view('admin/form_ps');
  }

  public function avaliable_dates(){
    $this->load->view('admin/avaliable_dates');
  }

  public function boot(){
    $this->load->view('boot');
  }
}

 ?>
