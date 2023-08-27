<?php

class Laporan_penerimaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->data['aktif'] = 'penerimaan';
        $this->load->model('M_barang', 'm_barang');
        $this->load->model('M_vendorr', 'm_vendorr');
        $this->load->model('M_user', 'm_user');
        $this->load->model('M_pengguna', 'm_pengguna');
        $this->load->model('M_penerimaan', 'm_penerimaan');
        $this->load->model('M_detail_terima', 'm_detail_terima');
    }

    public function index(){
		$this->data['title'] = 'Laporan Barang Masuk';
		$this->data['all_penerimaan'] = $this->m_penerimaan->lihat();
		$this->data['no'] = 1;

		$this->load->view('Laporan/penerimaan', $this->data);
	}
    public function cek_tanggal ()
    {
        $tanggal1 = $this->input->post('tanggalawal');
        $tanggal2 = $this->input->post('tanggalakhir');

        $data['laporan_penerimaan'] = $this->m_penerimaan->laporan($tanggal1, $tanggal2)->result();

        $this->load->view('Laporan/cetak_penerimaan', $data);
    }
}
?>