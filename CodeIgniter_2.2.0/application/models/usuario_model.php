<?php

class Usuario_model extends CI_Model {

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
		$this->db->where('id_login',$id);
		$pswrd = $this->db->get('tb_login')->row()->senha;
		return md5($senha) == $pswrd;
	}
	public function update_user($id,$dados){
		$this->db->where('id_login',$id);
		unset($dados['password']);
		$dados['id_login'] = $id;
		$dados['apresentacao'] = $this->db->get('tb_login')->row()->apresentacao;
		$dados['dinamica'] = $this->db->get('tb_login')->row()->dinamica;
		$dados['senha'] = $this->db->get('tb_login')->row()->senha;
		$dados['perfil'] = $this->db->get('tb_login')->row()->perfil;
		$dados['usuario'] = $this->db->get('tb_login')->row()->usuario;
		return $this->db->update('tb_login',$dados);
	}
}