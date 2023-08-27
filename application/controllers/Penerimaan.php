<?php

use Dompdf\Dompdf;

class Penerimaan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->data['aktif'] = 'penerimaan';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_vendorr', 'm_vendorr');
		$this->load->model('M_user', 'm_user');
		$this->load->model('M_penerimaan', 'm_penerimaan');
		$this->load->model('M_detail_terima', 'm_detail_terima');
	}

	public function index(){
		$this->data['title'] = 'Transaksi Barang Masuk';
		$this->data['all_penerimaan'] = $this->m_penerimaan->lihat();
		$this->data['no'] = 1;

		$this->load->view('penerimaan/lihat', $this->data);
	}

	public function tambah(){
		$this->data['title'] = 'Tambah Transaksi Barang Masuk';
		$this->data['all_barang'] = $this->m_barang->lihat_stok();
		$this->data['all_vendorr'] = $this->m_vendorr->lihat();
		$this->data['all_user'] = $this->m_user->lihat();
		
		$this->load->view('penerimaan/tambah', $this->data);
	}

	public function proses_tambah(){
		$jumlah_barang_diterima = count($this->input->post('nama_barang_hidden'));

		$data_terima = [
			'no_terima' => $this->input->post('no_terima'),
			'tgl_terima' => $this->input->post('tgl_terima'),
			'jam_terima' => $this->input->post('jam_terima'),
			'nama_vendorr' => $this->input->post('nama_vendorr'),
			'nama' => $this->input->post('nama'),
		];

		$data_detail_terima = [];

		for($i = 0; $i < $jumlah_barang_diterima; $i++){
			array_push($data_detail_terima, ['no_terima' => $this->input->post('no_terima')]);
			$data_detail_terima[$i]['nama_barang'] = $this->input->post('nama_barang_hidden')[$i];
			$data_detail_terima[$i]['jumlah'] = $this->input->post('jumlah_hidden')[$i];
			$data_detail_terima[$i]['satuan'] = $this->input->post('satuan_hidden')[$i];
		}

		if($this->m_penerimaan->tambah($data_terima) && $this->m_detail_terima->tambah($data_detail_terima)){
			for ($i=0; $i < $jumlah_barang_diterima ; $i++) { 
				$this->m_barang->plus_stok($data_detail_terima[$i]['jumlah'], $data_detail_terima[$i]['nama_barang']) or die('gagal min stok');
			}
			$this->session->set_flashdata('success', 'Invoice <strong>Penerimaan</strong> Berhasil Dibuat!');
			redirect('penerimaan');
		}
	}

	public function detail($no_terima){
		$this->data['title'] = 'Detail Barang Masuk';
		$this->data['penerimaan'] = $this->m_penerimaan->lihat_no_terima($no_terima);
		$this->data['all_detail_terima'] = $this->m_detail_terima->lihat_no_terima($no_terima);
		$this->data['no'] = 1;

		$this->load->view('penerimaan/detail', $this->data);
	}

	public function hapus($no_terima){
		if($this->m_penerimaan->hapus($no_terima) && $this->m_detail_terima->hapus($no_terima)){
			$this->session->set_flashdata('success', 'Invoice Penerimaan <strong>Berhasil</strong> Dihapus!');
			redirect('penerimaan');
		} else {
			$this->session->set_flashdata('error', 'Invoice Penerimaan <strong>Gagal</strong> Dihapus!');
			redirect('penerimaan');
		}
	}

	public function get_all_barang(){
		$data = $this->m_barang->lihat_nama_barang($_POST['nama_barang']);
		echo json_encode($data);
	}

	public function keranjang_barang(){
		$this->load->view('penerimaan/keranjang');
	}

	

	public function export(){

		$data ['laporan_penerimaan'] = $this->m_penerimaan->lihat();
		$this->load->view('penerimaan/cetak', $data);
	
	}
	
}