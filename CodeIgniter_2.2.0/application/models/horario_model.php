<?php

class Horario_model extends CI_Model {
	public function __construct() {
       parent::__construct();
       $this->load->model('ps_model');
   	}
   	public function dates_palestras(){
   		$ps_id = $this->ps_model->current_ps();
		$this->db->where('tb_PS_id',$ps_id);
		$this->db->where('tipo','1');
		return $this->db->get('tb_datas_validas')->result();
   	}
   	public function dates_dinamicas(){
   		$ps_id = $this->ps_model->current_ps();
		$this->db->where('tb_PS_id',$ps_id);
		$this->db->where('tipo','2');
		return $this->db->get('tb_datas_validas')->result();
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
	public function marked_hours($id,$tipo){
		$ps_id = $this->ps_model->current_ps();
		
		$this->db->where('tb_login_id_login',$id);
		$this->db->where('tb_PS_id',$ps_id);
		$results = $this->db->get('ta_login_x_tb_horario')->result();
		
		$hours = array();
		foreach ($results as $result) {
			$this->db->where('id_horario',$result->tb_horario_id_horario);
			$hour = $this->db->get('tb_horario')->row();
			
			$this->db->where('id_data',$hour->tb_datas_validas_id_data);
			$valid_date = $this->db->get('tb_datas_validas')->row();

			if($valid_date->tipo == $tipo){
				array_push($hours, $hour);
			}
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
	public function palestra_hours(){
		$ps_id = $this->ps_model->current_ps();

		$this->db->where('id',$ps_id);
		$ps = $this->db->get('tb_ps')->row();
		$hours = array(
				'palestra_1' => $ps->primeiro_horario_apresentacao,
				'palestra_2' => $ps->segundo_horario_apresentacao
			);
		return $hours;
	}
	public function dinamica_hours(){
		$ps_id = $this->ps_model->current_ps();

		$this->db->where('id',$ps_id);
		$ps = $this->db->get('tb_ps')->row();
		$hours = array(
				'dinamica_1' => $ps->primeiro_horario_dinamica,
				'dinamica_2' => $ps->segundo_horario_dinamica
			);
		return $hours;
	}
	public function save_hours_palestra_dinamica($palestra,$dinamica){
		$this->delete_hours($this->session->userdata('login_id'),1);
		$this->delete_hours($this->session->userdata('login_id'),2);

		$ps_id = $this->ps_model->current_ps();
		
		$palestra = explode('/', $palestra);
		$dinamica = explode('/', $dinamica);
		//inserindo data da palestra 
		$data_palestra = array(
					'tempo' => $palestra[0],
					'tb_datas_validas_id_data' => $palestra[1],
					'data' => $palestra[2]
				);
		$this->db->insert('tb_horario',$data_palestra);
		$palestra_id = $this->db->insert_id();

		$array = array(
				'tb_login_id_login' => $this->session->userdata('login_id'),
				'tb_horario_id_horario' => $palestra_id,
				'tb_PS_id' => $ps_id
			);
		$this->db->insert('ta_login_x_tb_horario',$array);
		//inserindo data da dinamica
		$data_dinamica = array(
					'tempo' => $dinamica[0],
					'tb_datas_validas_id_data' => $dinamica[1],
					'data' => $dinamica[2]
				);
		$this->db->insert('tb_horario',$data_dinamica);
		$dinamica_id = $this->db->insert_id();

		$array = array(
				'tb_login_id_login' => $this->session->userdata('login_id'),
				'tb_horario_id_horario' => $dinamica_id,
				'tb_PS_id' => $ps_id
			);
		$this->db->insert('ta_login_x_tb_horario',$array);
	}
}
