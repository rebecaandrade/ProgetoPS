<?php

class Feedback_model extends CI_Model {
	public function get_current_feed(){
		$id_ps = $this->session->userdata('current_ps');
		$id_login = $this->session->userdata('login_id');
		$this->db->where(array('tb_login_id_login' => $id_login,'tb_ps_id' => $id_ps));
		return $this->db->get('ta_login_x_tb_PS')->row();
	}
	public function get_my_feed(){
		$id = $this->session->userdata('login_id');
		$this->db->where('tb_login_id_login',$id);
		return $this->db->get('ta_login_x_tb_PS')->result();
	}
	public function get_current_ps_info(){
		$this->db->where(array('status_ps !='=> 0));
		return $this->db->get('tb_PS')->row();
	}
	public function get_array_of_feeds_and_dates(){
		$id = $this->session->userdata('login_id');
		$dados = $this->db->select('ps.*')->from('tb_login l')
		->join('ta_login_x_tb_PS t','t.tb_login_id_login = l.id_login')
		->join('tb_PS ps','t.tb_PS_id = ps.id')
		->where('l.id_login',$id)->get()->result();
		foreach ($dados as $dado ) {
			$dates[] = $dado->data_abertura;
		}
		if(isset($dates))
			return $dates;
		else
			return NULL;
	}
	public function get_passed_feed($date){
		$id_login = $this->session->userdata('login_id');
		$id_ps = $this->db->where('data_abertura',$date)->get('tb_PS')
		->row()->id;
		return $this->db->where(array('tb_login_id_login'=>$id_login,'tb_ps_id' => $id_ps))
		->get('ta_login_x_tb_PS')->row();
	}
	public function get_this_feed($id_login){
		$id_ps = $this->session->userdata('current_ps');
		$this->db->where(array('tb_login_id_login' => $id_login,'tb_ps_id' => $id_ps));
		return $this->db->get('ta_login_x_tb_PS')->row();
	}
	public function insert_feed($id,$dados){
		$id_ps = $this->session->userdata('current_ps');
		$this->db->where(array('tb_login_id_login' => $id,'tb_ps_id' => $id_ps));
		$inscribed = $this->db->get('ta_login_x_tb_PS')->row();
		if(!empty($inscribed)){
			$this->db->where(array('tb_login_id_login' => $id,'tb_ps_id' => $id_ps));
			return $this->db->update('ta_login_x_tb_PS',$dados);
		}
		else return false;
	}
}