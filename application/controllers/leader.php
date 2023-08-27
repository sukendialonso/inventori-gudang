<?php

use Dompdf\Dompdf;

class Leader extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'leader' && $this->session->login['role'] != 'leader') redirect();
		$this->data['aktif'] = 'leader';
		$this->load->model('M_leader', 'm_leader');
	}

	public function index(){
		$this->data['title'] = 'Data leader';
		$this->data['all_leader'] = $this->m_leader->lihat();
		$this->data['no'] = 1;

		$this->load->view('leader/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'leader'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk leader!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Leader';

		$this->load->view('leader/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'leader'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk leader!');
			redirect('dashboard');
		}

		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if($this->m_leader->tambah($data)){
			$this->session->set_flashdata('success', 'Data Leader <strong>Berhasil</strong> Ditambahkan!');
			redirect('leader');
		} else {
			$this->session->set_flashdata('error', 'Data Leader <strong>Gagal</strong> Ditambahkan!');
			redirect('leader');
		}
	}

	public function ubah($id){
		if ($this->session->login['role'] == 'leader'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk leader!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah leader';
		$this->data['leader'] = $this->m_leader->lihat_id($id);

		$this->load->view('leader/ubah', $this->data);
	}

	public function proses_ubah($id){
		if ($this->session->login['role'] == 'leader'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk leader!');
			redirect('dashboard');
		}

		$data = [
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if($this->m_leader->ubah($data, $id)){
			$this->session->set_flashdata('success', 'Data Leader <strong>Berhasil</strong> Diubah!');
			redirect('leader');
		} else {
			$this->session->set_flashdata('error', 'Data Leader <strong>Gagal</strong> Diubah!');
			redirect('leader');
		}
	}

	public function hapus($id){
		if ($this->session->login['role'] == 'leader'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk leader!');
			redirect('dashboard');
		}

		if($this->m_leader->hapus($id)){
			$this->session->set_flashdata('success', 'Data Leader <strong>Berhasil</strong> Dihapus!');
			redirect('leader');
		} else {
			$this->session->set_flashdata('error', 'Data Leader <strong>Gagal</strong> Dihapus!');
			redirect('leader');
		}
	}

	public function export(){

		$data ['laporan_leader'] = $this->m_leader->lihat();
		$this->load->view('leader/cetak',$data);
	
	}
}