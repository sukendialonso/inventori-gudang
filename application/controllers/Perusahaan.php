<?php

class Perusahaan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_perusahaan', 'm_perusahaan');
		$this->data['aktif'] = 'perusahaan';
	}

	public function index(){
		$this->data['title'] = 'Profil Perusahaan';
		$this->data['perusahaan'] = $this->m_perusahaan->lihat();
		$this->load->view('perusahaan', $this->data);
	}

	public function proses_ubah(){
		$data = [
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat'),
		];

		if($this->m_perusahaan->ubah($data)){
			$this->session->set_flashdata('success', 'Profil Perusahaan <strong>Berhasil</strong> Diubah!');
			redirect('perusahaan');
		} else {
			$this->session->set_flashdata('error', 'Profil Perusahaan <strong>Gagal</strong> Diubah!');
			redirect('perusahaan');
		}
	}
}