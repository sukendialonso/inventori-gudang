<?php

class M_pengeluaran extends CI_Model {
	protected $_table = 'pengeluaran';

	public function lihat(){
		return $this->db->get($this->_table)->result();
	} 

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_no_keluar($no_keluar){
		return $this->db->get_where($this->_table, ['no_keluar' => $no_keluar])->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function hapus($no_keluar){
		return $this->db->delete($this->_table, ['no_keluar' => $no_keluar]);
	}
	public function laporan($tanggal1, $tanggal2){
		$this->db->select('*');
		$this->db->from('pengeluaran');
		$this->db->where('tanggal >=', $tanggal1);
		$this->db->where('tanggal <=', $tanggal2);
		$result= $this->db->get();
		return $result;

	}
}