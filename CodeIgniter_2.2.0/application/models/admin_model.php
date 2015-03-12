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
		$id_ps = $this->session->userdata('current_ps');
		
		$this->db->where('tb_login_id_login',$id);
		$this->db->where('tb_ps_id',$id_ps);

		$hours= array();
		$hours['entrevista'] = array();
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
				array_push($hours['entrevista'], $query);
			}
			
		}
		return $hours;
	}
}