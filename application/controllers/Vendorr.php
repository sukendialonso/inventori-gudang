<?php

use Dompdf\Dompdf;

class Vendorr extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'user' && $this->session->login['role'] != 'admin') redirect();
		$this->load->model('M_vendorr', 'm_vendorr');
		$this->data['aktif'] = 'vendorr';
	}

	public function index(){
		$this->data['title'] = 'Data Vendor Barang';
		$this->data['all_vendorr'] = $this->m_vendorr->lihat();
		$this->data['no'] = 1;

		$this->load->view('vendorr/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Data Vendor Barang';

		$this->load->view('vendorr/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

			$kode_vendorr 	= $this->input->post('kode_vendorr');
			$nama_vendorr 	= $this->input->post('nama_vendorr');
			$telepon 		= $this->input->post('telepon');
			$email 			= $this->input->post('email');
			$alamat 		= $this->input->post('alamat');
			

		$data = [
			'kode_vendorr' 	=> $this->input->post('kode_vendorr'),
			'nama_vendorr'  => $this->input->post('nama_vendorr'),
			'telepon'	    => $this->input->post('telepon'),
			'email'         => $this->input->post('email'),
			'alamat'        => $this->input->post('alamat'),
		];

		if($this->m_vendorr->tambah($data)){
			$this->session->set_flashdata('success', 'Data Vendor Barang <strong>Berhasil</strong> Ditambahkan!');
			redirect('vendorr');
		} else {
			$this->session->set_flashdata('error', 'Data Vendor Barang <strong>Gagal</strong> Ditambahkan!');
			redirect('vendorr');
		}
	}

	public function ubah($kode_vendorr){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah Vendorr';
		$this->data['vendorr'] = $this->m_vendorr->lihat_id($kode_vendorr);

		$this->load->view('vendorr/ubah', $this->data);
	}

	public function proses_ubah($kode_vendorr){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

			date_default_timezone_set("Asia/Jakarta");
			$kode_vendorr 	= $this->input->post('kode_vendorr');
			$nama_vendorr 	= $this->input->post('nama_vendorr');
			$telepon    	= $this->input->post('telepon');
			$email 			= $this->input->post('email');
			$alamat 		= $this->input->post('alamat');
	
		
		$data = [
			'kode_vendorr' 	=> $this->input->post('kode_vendorr'),
			'nama_vendorr' 	=> $this->input->post('nama_vendorr'),
			'telepon' 		=> $this->input->post('telepon'),
			'email' 		=> $this->input->post('email'),
			'alamat' 		=> $this->input->post('alamat'),
		];

		if($this->m_vendorr->ubah($data, $kode_vendorr)){
			$this->session->set_flashdata('success', 'Data Vendor Barang <strong>Berhasil</strong> Diubah!');
			redirect('vendorr');
		} else {
			$this->session->set_flashdata('error', 'Data Vendor Barang <strong>Gagal</strong> Diubah!');
			redirect('vendorr');
		}
	}

	public function hapus($kode_vendorr){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}
		
		if($this->m_vendorr->hapus($kode_vendorr)){
			$this->session->set_flashdata('success', 'Data Vendor Barang <strong>Berhasil</strong> Dihapus!');
			redirect('vendorr');
		} else {
			$this->session->set_flashdata('error', 'Data Vendor Barang <strong>Gagal</strong> Dihapus!');
			redirect('vendorr');
		}
	}

	public function export(){

		$data ['laporan_vendorr'] = $this->m_vendorr->lihat();
		$this->load->view('vendorr/cetak',$data);
	
	}
}