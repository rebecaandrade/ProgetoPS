<?php

class Access_model extends CI_Model {
	public function get_email($email){
		$this->db->where('email',$email);
		return $this->db->get('tb_login')->row();
	}
	public function update_password($user,$password){
		$this->db->where('usuario',$user);
		$data = array('senha' => $password);
		$this->db->update('tb_login', $data);
	}
}