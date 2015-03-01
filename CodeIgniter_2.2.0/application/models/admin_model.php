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
}