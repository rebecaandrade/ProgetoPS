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
		// $this->db->where(array('status_ps !='=> 0));
		// $id_ps = $this->db->get('tb_PS')->row()->id;
		// $count['presentation_tarde'] = sizeof($this->db->select('tlth.*')->from('tb_datas_validas dv')
		// ->join('tb_horario th','th.tb_datas_validas_id_data = dv.id_data')
		// ->join('ta_login_x_tb_horario tlth','tlth.tb_horario_id_horario = th.id_horario')
		// ->where(array('dv.tb_ps_id' => $id_ps, 'dv.tipo' =>1, 'th.tempo' => '12:00:00'))
		// ->get()->result());
		// $count['presentation_noite'] = sizeof($this->db->select('tlth.*')->from('tb_datas_validas dv')
		// ->join('tb_horario th','th.tb_datas_validas_id_data = dv.id_data')
		// ->join('ta_login_x_tb_horario tlth','tlth.tb_horario_id_horario = th.id_horario')
		// ->where(array('dv.tb_ps_id' => $id_ps, 'dv.tipo' =>1, 'th.tempo' => '18:00:00'))
		// ->get()->result());
		// $count['dinamic_tarde'] = sizeof($this->db->select('tlth.*')->from('tb_datas_validas dv')
		// ->join('tb_horario th','th.tb_datas_validas_id_data = dv.id_data')
		// ->join('ta_login_x_tb_horario tlth','tlth.tb_horario_id_horario = th.id_horario')
		// ->where(array('dv.tb_ps_id' => $id_ps, 'dv.tipo' =>2, 'th.tempo' => '12:00:00'))
		// ->get()->result());
		// $count['dinamic_noite'] = sizeof($this->db->select('tlth.*')->from('tb_datas_validas dv')
		// ->join('tb_horario th','th.tb_datas_validas_id_data = dv.id_data')
		// ->join('ta_login_x_tb_horario tlth','tlth.tb_horario_id_horario = th.id_horario')
		// ->where(array('dv.tb_ps_id' => $id_ps, 'dv.tipo' =>2, 'th.tempo' => '18:00:00'))
		// ->get()->result());
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
}