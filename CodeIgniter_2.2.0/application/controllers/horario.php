<?php

class Horario extends CI_Controller {
  public function __construct() {
       parent::__construct();
       $this->load->model('horario_model');
  }

  public function load_user_interview(){
  	$dates = $this->horario_model->dates_interviews();

  	$data['times'] = array();
  	$data['daysofmonth'] = array(); //Quantos dias do mês serão usados 
  	
  	foreach ($dates as $date) {
  		$date = explode("/",$date->data);
  		$day = $date[0] + 0;
        $month = $date[1] + 0;
        $year = $date[2] + 0;

        $jd = GregorianToJD($month, $day, $year);
        $day_name = $this->dayofweek(JDDayOfWeek($jd,1));
        $month_name = $this->month_name($month);

        $time = array( 
                'day'  => $day, 
                'month'=> $month,
                'year'=> $year,
                'day_name' => $day_name,
                'month_name' => $month_name
        		);
        array_push($data['times'],$time);
  	}

  	$this->days_left($data['times']);
    $this->load->view('user/user_interview',$data);
  }
  
  public function load_user_activity(){
    $this->load->view('user/user_activity');
  }

  //-------------------Funções auxiliares-----------------------//
  public function month_name($month){
  	if($month == 01){
 		return "Janeiro";
  	}
  	if($month == 02){
 		return "fevereiro";
  	}
  	if($month == 03){
 		return "Março";
  	}
  	if($month == 04){
 		return "Abril";
  	}
  	if($month == 05){
 		return "Maio";
  	}
  	if($month == 06){
 		return "Junho";
  	}
  	if($month == 07){
 		return "Julho";
  	}
  	if($month == 08){
 		return "Agosto";
  	}
  	if($month == 09){
 		return "Setembro";
  	}
  	if($month == 10){
 		return "Outubro";
  	}
  	if($month == 11){
 		return "Novembro";
  	}
  	if($month == 12){
 		return "Dezembro";
  	}
  		
  }
  public function dayofweek($day_name){
  		if($day_name == 'Monday'){
  			return 'Seg';
  		}
  		if($day_name == 'Tuesday'){
  			return 'Terç';
  		}
  		if($day_name == 'Wednesday'){
  			return 'Qua';
  		}
  		if($day_name == 'Thursday'){
  			return 'Qui';
  		}
  		if($day_name == 'Friday'){
  			return 'Sex';
  		}
  		if($day_name == 'Saturday'){
  			return 'Sáb';
  		}
  		if($day_name == 'Sunday'){
  			return 'Dom';
  		}
  }
  public function days_left($times){
  	$months_days = array();
  	foreach ($times as $time) {

  		
  		if (!isset($months_days) || $this->not_exists($months_days,$time['month'])){
  			$new = array(
  					'month_name' => $time['month_name'],
  					'month' => $time['month'],
  					'count' => 1
  				);

  			array_push($months_days, $new);  		
  		} 
  		else{
  			foreach ($months_days as $month) {
  				if ($month['month'] == $time['month']){
  				$month['count']=$month['count'] + 1;
  				}
			}

  		}
  				
  	}
  	return $months_days;
  }
  public function not_exists($months_days,$month_number){
  	foreach ($months_days as $month) {
  		if ($month['month'] == $month_number){
  			return 0;
  		}
  	}
  	return 1;
  }
  public function add_count($months_days,$month_number){
  	foreach ($months_days as $month) {
  		if ($month['month'] == $month_number){
  			$month['count']++;
  			echo $month['count'];
  		}
	}
  	  	return 0;
  }
}
