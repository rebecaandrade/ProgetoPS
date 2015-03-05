<?php

class PS_Model extends CI_Model{

	///Abrir PS 
	public function new_ps($id, $nome, $data_abetura, $data_dinamica, $data_apresentacao, $primeiro_horario_dinamica, 
						  $segundo_horario_dinamica, $primeiro_horario_apresentacao, $segundo_horario_apresentacao){

	$this->db->insert('id',$id);
	$this->db->insert('nome',$nome);
	$this->db->insert('data_abertura',$data_abertura);
	$this->db->insert('data_dinamica',$data_dinamica);
	$this->db->insert('data_apresentacao',$data_apresentacao);
	$this->db->insert('primeiro_horario_dinamica',$primeiro_horario_dinamica);
	$this->db->insert('segundo_horario_dinamica',$segundo_horario_dinamica);
	$this->db->insert('primeiro_horario_apresentacao',$primeiro_horario_apresentacao);
	$this->db->insert('segundo_horario_apresentacao',$segundo_horario_apresentacao);

	}
	///Fechar PS
	public function close_ps($id){
		$this->db->where('id',$id);
	    return $this->db->delete('tb_PS');
	}
	///Retorna id do PS atual
	public function current_ps(){
		$this->db->where('status_ps',TRUE);
		return $this->db->get('tb_ps')->row()->id;
	}
	///Listar
	public function search_ps(){
		return $this->db->get('tb_PS')->result();

	}
	///Selecionar (visualizar) PS
	public function show_ps($id){
		$this->db->where('id',$id);
		return $this->db->get('tb_PS')->result();
	}
}