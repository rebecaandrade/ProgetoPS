<?php

class Usuario_model extends CI_Model {

	public function buscar_usuarios(){
		$this->db->where('perfil','1');
		return $this->db->get('tb_login')->result();
	}
	public function deletar_usuario($id){
		$this->db->where('id_login',$id);
		return $this->db->delete('tb_login');
	}
}