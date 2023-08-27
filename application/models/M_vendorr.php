<?php

class M_vendorr extends CI_Model{
	protected $_table = 'vendorr';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_vendorr(){
		$query = $this->db->select('vendorr');
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function lihat_id($kode_vendorr){
		$query = $this->db->get_where($this->_table, ['kode_vendorr' => $kode_vendorr]);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function ubah($data, $kode_vendorr){
		$query = $this->db->set($data);
		$query = $this->db->where(['kode_vendorr' => $kode_vendorr]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($kode_vendorr){
		return $this->db->delete($this->_table, ['kode_vendorr' => $kode_vendorr]);
	}
}