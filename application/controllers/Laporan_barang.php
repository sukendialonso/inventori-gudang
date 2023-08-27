<?php

class Laporan_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->data['aktif'] = 'barang';
        $this->load->model('M_barang', 'm_barang');
        $this->load->model('M_vendorr', 'm_vendorr');
        $this->load->model('M_user', 'm_user');
        $this->load->model('M_penerimaan', 'm_penerimaan');
        $this->load->model('M_detail_terima', 'm_detail_terima');
    }

    public function index(){
		$this->data['title'] = 'Laporan Stok Barang';
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['no'] = 1;

		$this->load->view('Laporan/barang', $this->data);
	}
    public function cek_tanggal ()
    {
        $tanggal1 = $this->input->post('tanggalawal');
        $tanggal2 = $this->input->post('tanggalakhir');

        $data['laporan_barang'] = $this->m_barang->laporan($tanggal1, $tanggal2)->result();

        $this->load->view('Laporan/cetak_barang', $data);
    }
}
?>