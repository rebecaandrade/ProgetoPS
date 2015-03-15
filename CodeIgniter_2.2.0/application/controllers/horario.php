<?php

class Horario extends CI_Controller {
  public function __construct() {
       parent::__construct();
       $this->load->model('horario_model');
  }
  public function load_user_interview(){
  	
  	$dates = $this->horario_model->dates_interviews();
  	$hours = $this->horario_model->marked_hours($this->session->userdata('login_id'),3);
  	$times = array();
  	
  	foreach ($dates as $date) {
        $id = $date->id_data; 
  		$date = explode("-",$date->data);
  		$day = $date[2] + 0;
        $month = $date[1] + 0;
        $year = $date[0] + 0;

        $jd = GregorianToJD($month, $day, $year);
        $week_day = JDDayOfWeek($jd,0);
        $marked = array();
        if(isset($hours)){
	        foreach ($hours as $hour) {
	        	if($hour->tb_datas_validas_id_data == $id){
	        		$tempo = explode(":",$hour->tempo);
	        		$marked[$tempo[0]] = 1;
	        	}
	        }
	    }
        $time = array( 
                'jd' => $jd,
                'week_day' => $week_day,
                'hours' => $marked,
                'id_date' => $id
        		);

        array_push($times,$time);
  	}
  	$data['weeks'] = $this->generate_weeks($times);

    $this->load->view('user/user_interview',$data);
  }
  public function save_interview_hours(){
  	$results = $this->input->post('result');
  	
  	$interviews = array();

  	foreach ($results as $result) {
  		$interview = explode("/",$result);
  		array_push($interviews, $interview);
  	}
  	$this->horario_model->save_hours($interviews);
    $this->session->set_userdata('mensagem','Horário salvo com sucesso!');
    $this->session->set_userdata('tipo_mensagem','success');
  	redirect('usuario/home');
  }
  public function load_user_activity(){
    $data['palestra'] = $this->horario_model->dates_palestras()[0];
    $data['palestra_hours'] = $this->horario_model->palestra_hours();
    $data['palestra_marked'] = $this->horario_model->marked_hours($this->session->userdata('login_id'),1);

    $data['dinamica'] = $this->horario_model->dates_dinamicas()[0];
    $data['dinamica_hours'] = $this->horario_model->dinamica_hours();
    $data['dinamica_marked'] = $this->horario_model->marked_hours($this->session->userdata('login_id'),2);

    $this->load->view('user/user_activity',$data);
  }
  public function save_palestra_dinamica_hours(){
  	$palestra = $this->input->post('palestra');
  	$dinamica = $this->input->post('dinamica');

  	$this->horario_model->save_hours_palestra_dinamica($palestra,$dinamica);
  	$this->session->set_userdata('mensagem','Horário salvo com sucesso!');
  	$this->session->set_userdata('tipo_mensagem','success');
  	redirect('usuario/home');
  }

  //-------------------Funções auxiliares-----------------------//
  public function generate_weeks($times){
  	$smallest = $this->smallest_jd($times);
  	$biggest = $this->biggest_jd($times);
  	$length = $biggest['jd'] - $smallest['jd'] + $smallest['week_day'] + 1 +(6 - $biggest['week_day']);
  	$start = $smallest['jd'] - $smallest['week_day'];
  	

  	$weeks = array();
  	
  	for ($j=0; $j < $length ; $j++) { 
 		  $jd = $start + $j;
  		$date = JDToGregorian($jd);
  		$date = explode("/",$date);
  		
  		$day = $date[1] + 0;
      $month = $date[0] + 0;
      $year = $date[2] + 0;
      $day_name = $this->dayofweek(JDDayOfWeek($jd,0));

  		$time = array(
  					'day' =>  $day,
  					'month' => $month,
  					'year' => $year,
					'jd' => $jd,
					'day_name' => $day_name,
					'id_date' => NULL,
  				);
  		$valid = $this->jd_exists($times,$jd);
	  	if (isset($valid)){
	  		$time['id_date'] = $valid['id_date'];
	  		$time['hours'] = $valid['hours'];
	  	}
	  
		array_push($weeks, $time); 
	  	}
	$weeks = $this->divide_weeks($weeks);
  	return $weeks;
  }
  public function divide_weeks($weeks){
  	$week = array();
  	$result = array();
  	foreach ($weeks as $day) {
  		array_push($week, $day);
  		if($day['day_name'] == 'Sáb'){
  			array_push($result, $week);
  			$week = array();
  		}
  	}
  	return $result;
  }
  public function jd_exists($times,$jd){
  	foreach ($times as $time) {
  		if ($time['jd'] == $jd){
  			return $time;
  		}
  	}
  	return NULL;
  }
  public function biggest_jd($times){
  	$biggest = NULL;
  	foreach ($times as $time) {
  		if (is_null($biggest)){
  			$biggest = $time;
  		}
  		elseif($time['jd'] > $biggest['jd']){
  			$biggest = $time;
  		} 
  	}
  	return $biggest;
  }
  public function smallest_jd($times){
  	$smallest = NULL;
  	foreach ($times as $time) {
  		if(is_null($smallest)){
  			$smallest = $time;
  		}
  		elseif($time['jd'] < $smallest['jd']){
  			$smallest = $time;
  		} 
  	}
  	return $smallest;
  }
  public function dayofweek($day_name){
  		if($day_name == '0'){
  			return 'Dom';
  		}
  		if($day_name == '1'){
  			return 'Seg';
  		}
  		if($day_name == '2'){
  			return 'Terç';
  		}
  		if($day_name == '3'){
  			return 'Qua';
  		}
  		if($day_name == '4'){
  			return 'Qui';
  		}
  		if($day_name == '5'){
  			return 'Sex';
  		}
  		if($day_name == '6'){
  			return 'Sáb';
  		}
  }
}
