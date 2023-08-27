<?php

class Detail_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->data['aktif'] = 'pengeluaran';
        $this->load->model('M_barang', 'm_barang');
        $this->load->model('M_vendorr', 'm_vendorr');
        $this->load->model('M_user', 'm_user');
        $this->load->model('M_pengguna', 'm_pengguna');
        $this->load->model('M_pengeluaran', 'm_pengeluaran');
        $this->load->model('M_detail_keluar', 'm_detail_keluar');
    }

    public function index(){
		$this->data['title'] = 'Detail Barang Keluar';
		$this->data['all_pengeluaran'] = $this->m_pengeluaran->lihat();
		$this->data['no'] = 1;

		$this->load->view('Pengeluaran/pengeluaran', $this->data);
	}
    public function export_detail(){

		$data ['detail_keluar'] = $this->m_pengeluaran->lihat();
		$this->load->view('pengeluaran/cetak',$data);
	
	}
}
?>