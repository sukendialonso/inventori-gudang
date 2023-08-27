<?php

use Dompdf\Dompdf;

class Pengeluaran extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->data['aktif'] = 'pengeluaran';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_pengguna', 'm_pengguna');
		$this->load->model('M_user', 'm_user');
		$this->load->model('M_pengeluaran', 'm_pengeluaran');
		$this->load->model('M_detail_keluar', 'm_detail_keluar');
	}

	public function index(){
		$this->data['title'] = 'Transaksi Barang Keluar';
		$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->data['no'] = 1;

		$this->load->view('pengeluaran/lihat', $this->data);
	}

	public function tambah(){
		$this->data['title'] = 'Tambah Transaksi Barang Keluar';
		$this->data['all_barang'] = $this->m_barang->lihat_stok();
		$this->data['all_pengguna'] = $this->m_pengguna->lihat();
		$this->data['all_user'] = $this->m_user->lihat();
		
		$this->load->view('pengeluaran/tambah', $this->data);
	}

	public function proses_tambah(){
		$jumlah_barang_keluar = count($this->input->post('nama_barang_hidden'));
		$jumlah_barang_input       = $this->input->post('jumlah_hidden');
		$jumlah_barang 			   = $jumlah_barang_input[0];
		$nama_barang_array = $this->input->post('nama_barang_hidden');
		$nama_barang  	   = $nama_barang_array[0];
		
		$cek_barang_db = $this->m_barang->cek_barang_db($nama_barang)->result_array();
		$hasil_barang_db = $cek_barang_db[0]['stok'];
		
		$rumus = $hasil_barang_db - $jumlah_barang;
	
		if($rumus < 50){
			$this->session->set_flashdata('warning', 'Perhatian <strong>Pengeluaran</strong> Gagal Proses karena jumlah kurang dari 50!');
			redirect('pengeluaran');

			
		}

	
		$data_keluar = [
			'no_keluar' => $this->input->post('no_keluar'),
			'tgl_keluar' => $this->input->post('tgl_keluar'),
			'jam_keluar' => $this->input->post('jam_keluar'),
			'nama' => $this->input->post('nama'),
			'nama_user' => $this->input->post('nama_user'),
		];

		$data_detail_keluar = [];

		for($i = 0; $i < $jumlah_barang_keluar; $i++){
			array_push($data_detail_keluar, ['no_keluar' => $this->input->post('no_keluar')]);
			$data_detail_keluar[$i]['nama_barang'] = $this->input->post('nama_barang_hidden')[$i];
			$data_detail_keluar[$i]['jumlah'] = $this->input->post('jumlah_hidden')[$i];
			$data_detail_keluar[$i]['satuan'] = $this->input->post('satuan_hidden')[$i];
		}

		if($this->m_pengeluaran->tambah($data_keluar) && $this->m_detail_keluar->tambah($data_detail_keluar)){
			for ($i=0; $i < $jumlah_barang_keluar ; $i++) { 
				$this->m_barang->min_stok($data_detail_keluar[$i]['jumlah'], $data_detail_keluar[$i]['nama_barang']) or die('gagal min stok');
			}
			$this->session->set_flashdata('success', 'Invoice <strong>Pengeluaran</strong> Berhasil Dibuat!');
			redirect('pengeluaran');
		}
	}

	public function detail($no_keluar){
		$this->data['title'] = 'Detail Pengeluaran';
		$this->data['pengeluaran'] = $this->m_pengeluaran->lihat_no_keluar($no_keluar);
		$this->data['all_detail_keluar'] = $this->m_detail_keluar->lihat_no_keluar($no_keluar);
		$this->data['no'] = 1;

		$this->load->view('pengeluaran/detail', $this->data);
	}

	public function hapus($no_keluar){
		if($this->m_pengeluaran->hapus($no_keluar) && $this->m_detail_keluar->hapus($no_keluar)){
			$this->session->set_flashdata('success', 'Invoice Pengeluaran <strong>Berhasil</strong> Dihapus!');
			redirect('pengeluaran');
		} else {
			$this->session->set_flashdata('error', 'Invoice Pengeluaran <strong>Gagal</strong> Dihapus!');
			redirect('pengeluaran');
		}
	}

	public function get_all_barang(){
		$data = $this->m_barang->lihat_nama_barang($_POST['nama_barang']);
		echo json_encode($data);
	}

	public function keranjang_barang(){
		$this->load->view('pengeluaran/keranjang');
	}

	// public function export(){
	// 	$dompdf = new Dompdf();
	// 	// $this->data['perusahaan'] = $this->m_usaha->lihat();
	// 	$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
	// 	$this->data['title'] = 'Laporan Data Pengeluaran';
	// 	$this->data['no'] = 1;

	// 	$dompdf->setPaper('A4', 'Landscape');
	// 	$html = $this->load->view('pengeluaran/report', $this->data, true);
	// 	$dompdf->load_html($html);
	// 	$dompdf->render();
	// 	$dompdf->stream('Laporan Data Pengeluaran Tanggal ' . date('d F Y'), array("Attachment" => false));
	// }

	public function export(){

		$data ['laporan_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->load->view('pengeluaran/cetak',$data);
	
	}
	public function export_detail(){

		$data ['detail_keluar'] = $this->m_pengeluaran->lihat();
		$this->load->view('pengeluaran/cetak',$data);
	}
}
?>