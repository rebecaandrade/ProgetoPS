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
	public function pesquisa_usuario($id){
		$this->db->where('id_login',$id);
		return $this->db->get('tb_login')->row();
	}
	public function verifica_senha($id,$senha){
		$this->db->where('login_id',$id);
		$pswrd = $this->db->get('senha');
		return md5($senha) == $pswrd;
	}
	public function atualiza_usuario($id,$dados){
		var_dump($dados);
		die;
	}
}