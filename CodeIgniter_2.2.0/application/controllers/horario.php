<?php

class Horario extends CI_Controller {
  public function __construct() {
       parent::__construct();
       $this->load->model('horario_model');
  }

  public function load_user_interview(){
  	$dates = $this->horario_model->dates_interviews();

  	$times = array();
  	
  	foreach ($dates as $date) {
  		//Mudar para aceitar formato date 
  		$date = explode("-",$date->data);
  		$day = $date[2] + 0;
        $month = $date[1] + 0;
        $year = $date[0] + 0;

        $jd = GregorianToJD($month, $day, $year);
        $week_day = JDDayOfWeek($jd,0);

        $time = array( 
                'jd' => $jd,
                'week_day' => $week_day
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
  	die;
  }
  public function load_user_activity(){
    $this->load->view('user/user_activity');
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
					'valid_date' => FALSE
  				);
	  	if ($this->jd_exists($times,$jd)){
	  		$time['valid_date'] = TRUE;
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
  			return TRUE;
  		}
  	}
  	return FALSE;
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
