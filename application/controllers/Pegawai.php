<?php

use Dompdf\Dompdf;

class Pegawai extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'user' && $this->session->login['role'] != 'admin') redirect();
		$this->load->model('M_pegawai', 'm_pegawai');
		$this->data['aktif'] = 'pegawai';
	}

	public function index(){
		$this->data['title'] = 'Data Pegawai';
		$this->data['all_pegawai'] = $this->m_pegawai->lihat();
		$this->data['no'] = 1;

		$this->load->view('pegawai/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Data Pegawai';

		$this->load->view('pegawai/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

			$nip = $this->input->post('nip');
			$nama_pegawai = $this->input->post('nama_pegawai');
			$telepon = $this->input->post('telepon');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$jabatan = $this->input->post('jabatan');
			
		$data = [
			'nip' => $this->input->post('nip'),
			'nama_pegawai' => $this->input->post('nama_pegawai'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'jabatan' => $this->input->post('jabatan'),
			
		];

		if($this->m_pegawai->tambah($data)){
			$this->session->set_flashdata('success', 'Data Pegawai <strong>Berhasil</strong> Ditambahkan!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data Pegawai <strong>Gagal</strong> Ditambahkan!');
			redirect('pegawai');
		}
	}

	public function ubah($nip){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah Pegawai';
		$this->data['pegawai'] = $this->m_pegawai->lihat_id($nip);

		$this->load->view('pegawai/ubah', $this->data);
	}

	public function proses_ubah($nip){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

			date_default_timezone_set("Asia/Jakarta");
			$nip = $this->input->post('nip');
			$nama_pegawai = $this->input->post('nama_pegawai');
			$telepon = $this->input->post('telepon');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$jabatan = $this->input->post('jabatan');
			

		$data = [
			'nip' 			 => $this->input->post('nip'),
			'nama_pegawai'	 => $this->input->post('nama_pegawai'),
			'telepon'		 => $this->input->post('telepon'),
			'email'			 => $this->input->post('email'),
			'alamat' 		 => $this->input->post('alamat'),
			'jenis_kelamin'  => $this->input->post('jenis_kelamin'),
			'jabatan' 		 => $this->input->post('jabatan'),
			
		];
		
		if($this->m_pegawai->ubah($data, $nip)){
			$this->session->set_flashdata('success', 'Data Pegawai <strong>Berhasil</strong> Diubah!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data Pegawai <strong>Gagal</strong> Diubah!');
			redirect('pegawai');
		}
	}

	public function hapus($nip){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}
		
		if($this->m_pegawai->hapus($nip)){
			$this->session->set_flashdata('success', 'Data Pegawai <strong>Berhasil</strong> Dihapus!');
			redirect('pegawai');
		} else {
			$this->session->set_flashdata('error', 'Data Pegawai <strong>Gagal</strong> Dihapus!');
			redirect('pegawai');
		}
	}

	public function export(){

		$data ['laporan_pegawai'] = $this->m_pegawai->lihat();
		$this->load->view('pegawai/cetak',$data);
	
	}
}