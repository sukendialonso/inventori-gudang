<?php

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'user' && $this->session->login['role'] != 'admin' && $this->session->login['role'] != 'leader') redirect();
		$this->data['aktif'] = 'dashboard';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_pegawai', 'm_pegawai');
		$this->load->model('M_vendorr', 'm_vendorr');
		$this->load->model('M_user', 'm_user');
		$this->load->model('M_pengeluaran', 'm_pengeluaran');
		$this->load->model('M_penerimaan', 'm_penerimaan');
		$this->load->model('M_pengguna', 'm_pengguna');
		$this->load->model('M_leader', 'm_leader');
		$this->load->model('M_perusahaan', 'm_perusahaan');
	}

	public function index(){
		$this->data['title'] = 'Halaman Dashboard';
		$this->data['jumlah_barang'] = $this->m_barang->jumlah();
		$this->data['jumlah_pegawai'] = $this->m_pegawai->jumlah();
		$this->data['jumlah_vendorr'] = $this->m_vendorr->jumlah();
		$this->data['jumlah_user'] = $this->m_user->jumlah();
		$this->data['jumlah_pengeluaran'] = $this->m_pengeluaran->jumlah();
		$this->data['jumlah_penerimaan'] = $this->m_penerimaan->jumlah();
		$this->data['jumlah_pengguna'] = $this->m_pengguna->jumlah();
		$this->data['perusahaan'] = $this->m_perusahaan->lihat();
		$this->data['notif'] = $this->m_barang->notif();

		// echo "<pre>";
		// print_r($cek_notif);
		// echo "</pre>";
		// die();

		$this->load->view('dashboard', $this->data);
	}
}