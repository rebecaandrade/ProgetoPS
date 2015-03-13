<?php

class PS_Model extends CI_Model{

	///Abrir PS 
	public function new_ps($dados){

		$this->db->insert('tb_ps',$dados);
		$id_ps = $this->db->insert_id();
		$palestra = array(
					'data' =>$dados['data_apresentacao'],
					'tb_PS_id' => $id_ps
			);
		$this->insert_activity($palestra,1);
		$dinamica = array(
					'data' =>$dados['data_dinamica'],
					'tb_ps_id' => $id_ps
			);
		$this->insert_activity($dinamica,2);
		return $id_ps;
	}
	///Fechar PS
	public function close_ps($id){
		$this->db->where('id',$id);
		$ps = array(
				'status_ps' => FALSE
			);
	    return $this->db->update('tb_ps',$ps);
	}
	///Retorna id do PS atual
	public function current_ps(){
		$this->db->where('status_ps',TRUE);
		$ps = $this->db->get('tb_ps')->row();
		if (!empty($ps)){
			return $ps->id;
		}
		else{
			return FALSE;
		}
	}	
	///Listar
	public function search_ps(){
		return $this->db->get('tb_ps')->result();

	}
	public function retrieve_ps($id){
		$this->db->where('id',$id);
		return $this->db->get('tb_ps')->row();
	}
	///Selecionar (visualizar) PS
	public function show_ps($id){
		$this->db->where('id',$id);
		return $this->db->get('tb_ps')->result();
	}
	public function inscribe_user_in_current_ps($dados){
		$id_ps = $this->current_ps();
		$dados['tb_PS_id'] = $id_ps;
		$this->db->where('id_login',$dados['tb_login_id_login']);
		$ps_times = $this->db->get('tb_login')->row()->num_de_ps;
		$update = array(
					'num_de_ps' => $ps_times + 1
			);
		$this->db->where('id_login',$dados['tb_login_id_login']);
		$this->db->update('tb_login',$update);
		return $this->db->insert('ta_login_x_tb_PS',$dados);
	}
	public function date_id($data){
		foreach($data['tb_ps'] as $dado) {
            echo $dado->id;
        }
	}
	public function insert_activity($activity,$tipo){
		$activity['tipo'] = $tipo;
		return $this->db->insert('tb_datas_validas',$activity);
	}
	public function insert_valid_date($valid_date){
		return $this->db->insert('tb_datas_validas',$valid_date);
	}
	public function delete_ps_interviews($id_ps){
		$this->db->where('tb_ps_id',$id_ps);
		$this->db->where('tipo',3);
		$valid_dates = $this->db->get('tb_datas_validas')->result();
		$valid_dates_ids = array();
		$hours_ids = array();
		foreach ($valid_dates as $valid_date) {
			array_push($valid_dates_ids,$valid_date->id_data);
			$this->db->where('tb_datas_validas_id_data',$valid_date->id_data);
			$hours = $this->db->get('tb_horario')->result();
			if(isset($hours)){	
				foreach ($hours as $hour) {
					array_push($hours_ids,$hour->id_horario);
				}
			}
		}
		if(isset($hours_ids)){
			foreach ($hours_ids as $hour_id) {
				$this->db->where('tb_horario_id_horario',$hour_id);
				$this->db->delete('ta_login_x_tb_horario');

				$this->db->where('id_horario',$hour_id);
				$this->db->delete('tb_horario');
			}
		}
		foreach ($valid_dates_ids as $valid_date_id) {
			$this->db->where('id_data',$valid_date_id);
			$this->db->delete('tb_datas_validas');
		}
	}
}