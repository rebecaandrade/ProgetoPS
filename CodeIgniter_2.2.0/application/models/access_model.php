<?php

class Access_model extends CI_Model {
	public function get_email($email){
		$this->db->where('email',$email);
		return $this->db->get('tb_login')->row();
	}
	public function generate_encryption($user){
		// $this->db->where('usuario',$user);
		// $row = $this->db->get('tb_login')->row();
		// $date = getdate();
		// $encryption = 
		// $this->db->update('tb_login', $data);
	}
}