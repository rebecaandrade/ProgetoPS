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
}