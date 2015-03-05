<?php

class Horario_model extends CI_Model {
	public function __construct() {
       parent::__construct();
       $this->load->model('ps_model');
  }
	public function dates_interviews(){
		$this->db->where('tipo','3');
		return $this->db->get('tb_datas_validas')->result();
	}
	public function save_hours($interviews){
		var_dump($interviews);
		$ps_id = $this->ps_model->current_ps();
		var_dump($ps_id);
		die;
		foreach ($interviews as $interview) {
			$data = array(
					'data' => $interview[0],
					'tempo' => $interview[1].':00'
				);
			$this->db->insert('tb_horario',$dados);
		}
	}
	
}
