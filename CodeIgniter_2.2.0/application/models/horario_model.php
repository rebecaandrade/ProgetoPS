<?php

class Horario_model extends CI_Model {
	public function __construct() {
       parent::__construct();
       $this->load->model('ps_model');
  }
	public function dates_interviews(){
		$ps_id = $this->ps_model->current_ps();
		$this->db->where('tb_PS_id',$ps_id);
		$this->db->where('tipo','3');
		return $this->db->get('tb_datas_validas')->result();
	}
	public function save_hours($interviews){
		$this->delete_hours($this->session->userdata('login_id'),3);
		$ps_id = $this->ps_model->current_ps();

		foreach ($interviews as $interview) {
			
			$data = array(
					'data' => $interview[0],
					'tempo' => $interview[1].':00',
					'tb_datas_validas_id_data' => $interview[2]
				);
			$this->db->insert('tb_horario',$data);
			$insert_id = $this->db->insert_id();

			$array = array(
					'tb_login_id_login' => $this->session->userdata('login_id'),
					'tb_horario_id_horario' => $insert_id,
					'tb_PS_id' => $ps_id
				);
			$this->db->insert('ta_login_x_tb_horario',$array);
		}
	}
	public function marked_hours($id){
		$ps_id = $this->ps_model->current_ps();
		
		$this->db->where('tb_login_id_login',$id);
		$this->db->where('tb_PS_id',$ps_id);
		$results = $this->db->get('ta_login_x_tb_horario')->result();
		
		$hours = array();
		foreach ($results as $result) {
			$this->db->where('id_horario',$result->tb_horario_id_horario);
			$var = $this->db->get('tb_horario')->row();
			array_push($hours, $var);
		}
		return $hours;
	}
	public function delete_hours($id,$tipo){
		$ps_id = $this->ps_model->current_ps();

		$this->db->where('tb_login_id_login',$id);
		$this->db->where('tb_PS_id',$ps_id);
		$results = $this->db->get('ta_login_x_tb_horario')->result();
		
		$delete = array();
		foreach ($results as $result) {
			$this->db->where('id_horario',$result->tb_horario_id_horario);
			$hour = $this->db->get('tb_horario')->row();

			if($hour){
				$this->db->where('id_data',$hour->tb_datas_validas_id_data);
				$valid_date = $this->db->get('tb_datas_validas')->row();

				if($valid_date->tipo == $tipo){
					array_push($delete, $hour->id_horario);
				}
			}
		}
		foreach ($delete as $id_horario) {
			$this->db->where('tb_horario_id_horario',$id_horario);
			$this->db->delete('ta_login_x_tb_horario');

			$this->db->where('id_horario',$id_horario);
			$this->db->delete('tb_horario');
		}
	}
}
