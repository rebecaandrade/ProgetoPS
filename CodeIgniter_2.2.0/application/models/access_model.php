<?php

class Access_model extends CI_Model {
	public function get_email($email){
		$this->db->where('email',$email);
		return $this->db->get('tb_login')->row();
	}
	public function generate_encryption($id,$time){
		$encrypt = md5(random_string('alnum', 9).microtime());

		$data = array(
				'encryption' => $encrypt,
				'timestamp' => $time
			);
		$this->db->where('id_login',$id);
		$this->db->update('tb_login', $data);
		return $encrypt;
	}
	public function check_encryption($encryption){
		$this->db->where('encryption', $encryption);
		$user = $this->db->get('tb_login')->row();
		if(!empty($user)){
			return $encryption;
		}
		else{
			return NULL;
		}
	}
	public function check_time($encryption){
		$this->db->where('encryption', $encryption);
		$user = $this->db->get('tb_login')->row();
		if(!empty($user)){
			$time = time();
			$timestamp = $user->timestamp;
			if($time < $timestamp){
				return $time;
			}
			else{
				return NULL;
			}
		}
		else{
			return NULL;
		}
	}
	public function recover_password($encryption,$pass){
		$data = array(
				'encryption' => NULL,
				'timestamp' => NULL,
				'senha' => $pass
			);
		$this->db->where('encryption',$encryption);
		$this->db->update('tb_login',$data);
	}
}