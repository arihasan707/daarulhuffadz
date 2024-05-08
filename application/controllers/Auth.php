<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('app');
	}

	public function index()
	{
		$data = [
			'title' => ' Login - Pesantren Tahfidz Daarul Huffadz Indonesia'
		];
		$this->load->view('login_admin/v_login', $data);
	}

	public function logproses()
	{
		$user = trim($this->input->post('usernm'));
		$pass = trim($this->input->post('pass'));
		$hk = $this->input->post('hk');

		$admin = $this->app->get_login('tbl_admin', ['username' => $user], ['hak_akses' => $hk])->row_array();

		if ($admin) {
			if (password_verify($pass, $admin['pass'])) {
				$data = [
					'nama' => $admin['nama'],
					'username' => $admin['username'],
					'hak_akses' => $admin['hak_akses']
				];
				$this->session->set_userdata($data);
				if ($this->session->userdata('hak_akses') == '1'){
					redirect('administrator');
				}
				if ($this->session->userdata('hak_akses') == '2'){
					redirect('admin_satu');
				}
				if ($this->session->userdata('hak_akses') == '3'){
					redirect('admin_dua');
				}
				if ($this->session->userdata('hak_akses') == '4'){
					redirect('admin_tiga');
				}
				if ($this->session->userdata('hak_akses') == '5'){
					redirect('staff_karyawan');
				}
			} else {
				$this->session->set_flashdata('alert', '<span class="notif"><strong>Maaf..</strong> username atau password salah</span>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('warn', '<span class="notif"><strong>Maaf..</strong> username atau hak akses salah</span>');
			redirect('auth');
		}
	}
}