<?php

class M_pegawai extends CI_Model{
	protected $_table = 'pegawai';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_pegawai(){
		$query = $this->db->select('pegawai');
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function lihat_id($nip){
		$query = $this->db->get_where($this->_table, ['nip' => $nip]);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function ubah($data, $nip){
		$query = $this->db->set($data);
		$query = $this->db->where(['nip' => $nip]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($nip){
		return $this->db->delete($this->_table, ['nip' => $nip]);
	}
}