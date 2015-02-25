<?php

class Horario_model extends CI_Model {
	public function dates_interviews(){
		$this->db->where('tipo','3');
		return $this->db->get('tb_datas_validas')->result();
	}
}
