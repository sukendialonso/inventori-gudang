<?php

class M_perusahaan extends CI_Model {
	protected $_table = 'data_perusahaan';

	public function lihat(){
		return $this->db->get_where($this->_table, ['id' => 1])->row();
	}

	public function ubah($data){
		$query = $this->db->set($data);
		$query = $this->db->where(['id' => 1]);
		$query = $this->db->update($this->_table);
		return $query;
	}
}