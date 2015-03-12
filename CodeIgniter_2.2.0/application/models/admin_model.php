<?php

class Admin_model extends CI_Model {
	public function get_user_information($id){
		$this->db->where('id_login',$id);
		return $this->db->get('tb_login')->row();
	}
	public function get_admins(){
		$this->db->where('perfil','2');
		return $this->db->get('tb_login')->result();
	}
	public function delete_admin($id){
		$this->db->where('id_login',$id);
		return $this->db->delete('tb_login');
	}
	public function insert_new_admin($dados){
		unset($dados['confirmasenha']);
		$sucesso = $this->db->insert('tb_login',$dados);
	}
	public function check_admin($user){
		$this->db->where('usuario',$user);
		return $this->db->get('tb_login')->result();
	}
	public function update_admin($dados){
		$id = $dados['id'];
		unset($dados['id']);
		$this->db->where('id_login',$id);
		$this->db->update('tb_login',$dados);
	}
	public function get_time_counters($id_ps){
		$this->db->where('tb_ps_id',$id_ps);
		$this->db->where('tipo','1');
		$this->db->or_where('tipo','2');
		$results = $this->db->get('tb_datas_validas')->result();

		$query = array();
		foreach ($results as $result) {
			$this->db->where('tb_datas_validas_id_data',$result->id_data);
			if($result->tipo == '1'){
				$palestra = $this->db->get('tb_horario')->result();
				$query['palestra'] = $palestra ;
			}else{
				$dinamica = $this->db->get('tb_horario')->result();
				$query['dinamica'] = $dinamica ;
			}
		}
		return $query;
	}
	public function get_user_hours($id){
		$this->load->model('ps_model');
		$id_ps = $this->ps_model->current_ps();
		
		$this->db->where('tb_login_id_login',$id);
		$this->db->where('tb_ps_id',$id_ps);

		$hours= array();
		$hours['entrevista'] = array();
		$aux = array();
		$results = $this->db->get('ta_login_x_tb_horario')->result();
		foreach ($results as $result) {
			$this->db->where('id_horario',$result->tb_horario_id_horario);
			$query = $this->db->get('tb_horario')->row();
			$this->db->where('id_data',$query->tb_datas_validas_id_data);
			$date = $this->db->get('tb_datas_validas')->row();
			if($date->tipo == 1){
				$hours['palestra_hour'] = $query;
			}else if($date->tipo == 2){
				$hours['dinamica_hour'] = $query;
			}else{
				$date = explode('-',$query->data);
				$day = $date[2] + 0;
        		$month = $date[1] + 0;
        		$year = $date[0] + 0;
				$jd = GregorianToJD($month, $day, $year);
				$week_day = JDDayOfWeek($jd,0);
				$array = array(
						'week_day' => $this->week_day($week_day),
						'date' => $day.'/'.$month,
						'time' => substr($query->tempo,0,-3),
						'year' => $year
					);
					if(!empty($aux[$jd])){
						array_push($aux[$jd], $array);
					}
					else{
						$aux[$jd] = array();
						array_push($aux[$jd], $array);
					}
			}
			
		}
		krsort($aux);
		$aux = array_reverse($aux,TRUE);
		foreach ($aux as $date) {
			usort($date,function($a, $b){
					    	if($a['time'] > $b['time']){
					    		return TRUE;
					    	}
					    	else{
					    		return FALSE;
					    	}
						});
		}
		$hours['entrevista'] = $aux;
		return $hours;
	}
	//---------------------------Funções auxiliares -----------------------//
	
	public function week_day($day_name){
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