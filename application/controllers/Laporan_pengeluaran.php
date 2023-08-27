<?php

class Laporan_pengeluaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->data['aktif'] = 'pengeluaran';
        $this->load->model('M_barang', 'm_barang');
        $this->load->model('M_vendorr', 'm_vendorr');
        $this->load->model('M_user', 'm_user');
        $this->load->model('M_leader', 'm_leader');
        $this->load->model('M_pengguna', 'm_pengguna');
        $this->load->model('M_pengeluaran', 'm_pengeluaran');
        $this->load->model('M_detail_keluar', 'm_detail_keluar');
    }

    public function index(){
		$this->data['title'] = 'Laporan Barang Keluar';
		$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->data['no'] = 1;

		$this->load->view('Laporan/pengeluaran', $this->data);
	}
    public function cek_tanggal ()
    {
        $tanggal1 = $this->input->post('tanggalawal');
        $tanggal2 = $this->input->post('tanggalakhir');

        $data['laporan_pengeluaran'] = $this->m_pengeluaran->laporan($tanggal1, $tanggal2)->result();

        $this->load->view('Laporan/cetak_pengeluaran', $data);

    }
}
?>