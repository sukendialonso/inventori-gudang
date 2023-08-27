<?php

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		// if($this->session->login) redirect('dashboard');
		$this->load->model('M_user', 'm_user');
		$this->load->model('M_pengguna', 'm_pengguna');
		$this->load->model('M_leader', 'm_leader');
	}

	public function index(){
		$this->load->view('login');
	}

	public function proses_login(){
	
		if($this->input->post('role') === 'user') $this->_proses_login_user($this->input->post('username'));
		elseif($this->input->post('role') === 'leader') $this->_proses_login_leader($this->input->post('username'));
		elseif($this->input->post('role') === 'admin') $this->_proses_login_admin($this->input->post('username'));
		else {
			?>
			<script>
				alert('role tidak tersedia!')
			</script>
			<?php
		}
	}

	// login user
	protected function _proses_login_user($username){
		$get_user = $this->m_user->lihat_username($username);
		if($get_user){
			if($get_user->password == $this->input->post('password')){
				$session = [
					'nip' => $get_user->nip,
					'nama' => $get_user->nama,
					'username' => $get_user->username,
					'password' => $get_user->password,
					'role' => $this->input->post('role'),
					'jam_masuk' => date('H:i:s'),
					
				];
				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!');
				redirect('dashboard',$session);
			} else {
				$this->session->set_flashdata('error', 'Password Salah!');
				redirect();
			}
		} else {
			$this->session->set_flashdata('error', 'Username Salah!');
			redirect();
		}
	}

	protected function _proses_login_admin($username){
		$get_pengguna = $this->m_pengguna->lihat_username($username);
		if($get_pengguna){
			if($get_pengguna->password == $this->input->post('password')){
				$session = [
					'nip' => $get_pengguna->nip,
					'nama' => $get_pengguna->nama,
					'username' => $get_pengguna->username,
					'password' => $get_pengguna->password,
					'role' => $this->input->post('role'),
					'jam_masuk' => date('H:i:s')
				];

				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!');
				redirect('dashboard',$session);
			} else {
				$this->session->set_flashdata('error', 'Password Salah!');
				redirect();
			}
		} else {
			$this->session->set_flashdata('error', 'Username Salah!');
			redirect();
		}
	}

	protected function _proses_login_leader($username){
	
		$get_leader = $this->m_leader->lihat_username($username);
		
		if($get_leader){
			if($get_leader->password == $this->input->post('password')){
				$session = [
					'nip' => $get_leader->nip,
					'nama' => $get_leader->nama,
					'username' => $get_leader->username,
					'password' => $get_leader->password,
					'role' => $this->input->post('role'),
					'jam_masuk' => date('H:i:s')
				];
				// var_dump($session);
				// die();
				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!');
				redirect('dashboard',$session);
			} else {
				$this->session->set_flashdata('error', 'Password Salah!');
				redirect();
			}
		} else {
			$this->session->set_flashdata('error', 'Username Salah!');
			redirect();
		}
	}
}