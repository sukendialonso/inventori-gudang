<?php

use Dompdf\Dompdf;

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'user' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'user';
		$this->load->model('M_user', 'm_user');
	}

	public function index(){
		$this->data['title'] = 'Data User';
		$this->data['all_user'] = $this->m_user->lihat();
		$this->data['no'] = 1;

		$this->load->view('user/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk Admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Data User';

		$this->load->view('user/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk Admin!');
			redirect('dashboard');
		}

		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if($this->m_user->tambah($data)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Ditambahkan!');
			redirect('user');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Ditambahkan!');
			redirect('user');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk Admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah user';
		$this->data['user'] = $this->m_user->lihat_id($id);

		$this->load->view('user/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if($this->m_user->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Diubah!');
			redirect('user');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Diubah!');
			redirect('user');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'user'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}

		if($this->m_user->hapus($id)){
			$this->session->set_flashdata('success', 'Data User <strong>Berhasil</strong> Dihapus!');
			redirect('user');
		} else {
			$this->session->set_flashdata('error', 'Data User <strong>Gagal</strong> Dihapus!');
			redirect('user');
		}
	}

	public function export(){

		$data ['laporan_user'] = $this->m_user->lihat();
		$this->load->view('user/cetak', $data);
	
	}
}