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
		$data = $this->db->get('tb_login')->row();
		unset($dados['password']);
		$dados['id_login'] = $id;
		$dados['apresentacao'] = $data->apresentacao;
		$dados['dinamica'] = $data->dinamica;
		$dados['senha'] = $data->senha;
		$dados['perfil'] = $data->perfil;
		$dados['usuario'] = $data->usuario;
		$dados['num_de_ps'] = $data->num_de_ps;
		return $this->db->update('tb_login',$dados);
	}
	public function check_existence_of_user($user){
		$this->db->where('usuario',$user);
		return $this->db->get('tb_login')->result();
	}
	public function create_new_user($dados){
		unset($dados['novasenha']);
		$dados['senha'] = md5($dados['senha']);
		$this->db->insert('tb_login',$dados);
		$this->db->where('usuario',$dados['usuario']);
		return $this->db->get('tb_login')->row()->id_login;
	}
}