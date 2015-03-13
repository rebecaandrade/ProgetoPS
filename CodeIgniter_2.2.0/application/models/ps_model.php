<?php

class PS_Model extends CI_Model{

	///Abrir PS 
	public function new_ps($dados){

	$this->db->insert('tb_ps',$dados);
	return $this->db->insert_id();

	}
	///Fechar PS
	public function close_ps($id){
		$this->db->where('id',$id);
	    return $this->db->delete('tb_ps');
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
}