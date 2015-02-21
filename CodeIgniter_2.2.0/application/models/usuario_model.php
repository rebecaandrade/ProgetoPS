<?php

class Usuario_model extends CI_Model {

<<<<<<< HEAD
	public function buscar_usuarios(){
		$this->db->where('perfil','1');
		return $this->db->get('tb_login')->result();
	}
	public function deletar_usuario($id){
		$this->db->where('id_login',$id);
		return $this->db->delete('tb_login');
	}
=======
	public function retrieve_users(){
		$this->db->where('perfil','1');
		return $this->db->get('tb_login')->result();
	}
	public function get_user($login,$senha){
		$this->db->where('usuario',$login);
		$this->db->where('senha',$senha);
		return $this->db->get('tb_login')->row();
	}
	public function delete_user($id){
		$this->db->where('id_login',$id);
		return $this->db->delete('tb_login');
	}
	public function search_user($id){
		$this->db->where('id_login',$id);
		return $this->db->get('tb_login')->row();
	}
	public function verify_password($id,$senha){
		$this->db->where('login_id',$id);
		$pswrd = $this->db->get('senha');
		return md5($senha) == $pswrd;
	}
	public function update_user($id,$dados){
		var_dump($dados);
		die;
	}
>>>>>>> 339209d339e2ff9a27e3f8a8d847a08bd5d47d00
}