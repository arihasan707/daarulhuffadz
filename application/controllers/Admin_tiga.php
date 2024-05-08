<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_tiga extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->model('app');
	}
    
	public function index()
	{
		$title =  [
			'title' => "Admin 3 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_po',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_po',['notif'=> '0'])->result()
		];
		$data = [
		'jml_data_per_admin' => count($this->app->pmb_po()->result()),
		'jml_data_pendaftaran' => count($this->app->get_daftar()->result())	
		];
		$this->load->view('admin_3/v_header' , $title);
		$this->load->view('admin_3/v_nav');
		$this->load->view('admin_3/v_dashboard',$data);
		$this->load->view('admin_3/v_footer');
	}
	
	public function pmb_online()
	{
		$notif = [
			'notif' => '1'
		];
		
		$this->app->notif('tbl_pmb_po',$notif);
		
		$data["pmb"] = $this->app->pmb_po()->result();
		$title =  [
			'title' => "Admin 3 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'head' => 'PMB Online',
			'validasi' => $this->app->get_where('tbl_pmb_po',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_po',['notif'=> '0'])->result()
		];
		$this->load->view('admin_3/v_header', $title);
		$this->load->view('admin_3/v_nav');
		$this->load->view('admin_3/pendaftaran/v_pmb', $data);
		$this->load->view('admin_3/v_footer');
	}
	
	public function konfirmasi($id)
	{
		$data = [
		'status'=>'1'	
		];
		$this->app->update('tbl_pmb_po',$data,['id_pmb_po'=> $id]);
		$this->session->set_flashdata('sukses', 'konfirmasi');
		redirect('admin_tiga/pmb_online');
	}
	
	public function detail_pmb($id)
	{
		$data["detail"] = $this->app->get_where('tbl_pmb_po' , ['id_pmb_po' => $id]);
		$title =  [
			'title' => "Admin 3 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where_notif_admin_3('tbl_pendaftaran',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pendaftaran',['notif'=> '0'])->result()
		];
		$this->load->view('admin_3/v_header', $title);
		$this->load->view('admin_3/v_nav');
		$this->load->view('admin_3/pendaftaran/v_detail', $data);
		$this->load->view('admin_3/v_footer');
	}
	
	public function download_foto($id)
	{
		$data = $this->app->get_where('tbl_pmb_po' ,['id_pmb_po' => $id])->row();
		force_download('assets/backend/upload/po/' . $data->foto, NULL);
	}
	public function download_ngaji($id)
	{
		$data = $this->app->get_where('tbl_pmb_po' ,['id_pmb_po' => $id])->row();
		force_download('assets/backend/upload/po/' . $data->tes, NULL);
	}
	
	public function hapus_pmb($id)
	{
		$data = $this->app->get_where('tbl_pmb_po',['id_pmb_po'=> $id])->row();

		$path1 = './assets/backend/upload/po/' . $data->foto;
		unlink($path1);
		$path2 = './assets/backend/upload/po/' . $data->tes;
		unlink($path2);
		$path3 = './assets/backend/upload/po/' . $data->bukti_tf;
		unlink($path3);

		$this->app->delete('tbl_pmb_po', ['id_pmb_po' => $id]);
	}
	
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}