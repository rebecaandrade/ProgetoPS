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

}