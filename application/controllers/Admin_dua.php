<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_dua extends CI_Controller
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
			'title' => "Admin 2 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_boarding',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_boarding',['notif'=> '0'])->result()
		];
		$this->load->view('admin_2/v_header' , $title);
		$this->load->view('admin_2/v_nav');
		$this->load->view('admin_2/v_dashboard');
		$this->load->view('admin_2/v_footer');
	}

	public function pmb_online_institute()
	{
		$notif = [
			'notif' => '1'
		];
		
		$this->app->notif('tbl_pmb_institute',$notif);
		
		$data["pmb"] = $this->app->pmb_institute()->result();
		$title =  [
			'title' => "Admin 2 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'head' => 'PMB Online',
			'validasi' => $this->app->get_where('tbl_pmb_institute',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_institute',['notif'=> '0'])->result()
		];
		$this->load->view('admin_2/v_header', $title);
		$this->load->view('admin_2/v_nav');
		$this->load->view('admin_2/pendaftaran/v_pmb_institute', $data);
		$this->load->view('admin_2/v_footer');
	}
	
	public function pmb_online_boarding ()
	{
		$notif = [
			'notif' => '1'
		];
		
		$this->app->notif('tbl_pmb_boarding',$notif);
		
		$data["pmb"] = $this->app->pmb_boarding()->result();
		$title =  [
			'title' => "Admin 2 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'head' => 'PMB Boarding School',
			'validasi' => $this->app->get_where('tbl_pmb_boarding',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_boarding',['notif'=> '0'])->result()
		];
		$this->load->view('admin_2/v_header', $title);
		$this->load->view('admin_2/v_nav');
		$this->load->view('admin_2/pendaftaran/v_pmb_boarding', $data);
		$this->load->view('admin_2/v_footer');
	}
	
	public function konfirmasi_boarding($id)
	{
		$data = [
		'status'=>'1'	
		];
		$this->app->update('tbl_pmb_boarding',$data,['id_pmb'=> $id]);
		$this->session->set_flashdata('sukses','konfirmasi');
		redirect('admin_dua/pmb_online_boarding');
	}
	
	public function konfirmasi_institute($id)
	{
		$data = [
		'status'=>'1'	
		];
		$this->app->update('tbl_pmb_institute',$data,['id_pmb'=> $id]);
		$this->session->set_flashdata('sukses','konfirmasi');
		redirect('admin_dua/pmb_online_institute');
	}
	
	public function detail_pmb_institute($id)
	{
		$data["detail"] = $this->app->get_detail_institute($id);
		$title =  [
			'title' => "Admin 2 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_institute',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_institute',['notif'=> '0'])->result()
		];
		$this->load->view('admin_2/v_header', $title);
		$this->load->view('admin_2/v_nav');
		$this->load->view('admin_2/pendaftaran/v_detail_institute', $data);
		$this->load->view('admin_2/v_footer');
	}
	
	public function detail_pmb_boarding($id)
	{
		$data["detail"] = $this->app->get_detail_boarding($id);
		$title =  [
			'title' => "Admin 2 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_boarding',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_boarding',['notif'=> '0'])->result()
		];
		$this->load->view('admin_2/v_header', $title);
		$this->load->view('admin_2/v_nav');
		$this->load->view('admin_2/pendaftaran/v_detail_boarding', $data);
		$this->load->view('admin_2/v_footer');
	}
	
	//Institute File Download
	
	public function download_foto($id)
	{
		$data = $this->app->get_detail_institute($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->foto, NULL);
	}
	public function download_ktp($id)
	{
		$data = $this->app->get_detail_institute($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->ktp, NULL);
	}
	public function download_ijazah($id)
	{
		$data = $this->app->get_detail_institute($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->ijazah, NULL);
	}
	public function download_kk($id)
	{
		$data = $this->app->get_detail_institute($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->kk, NULL);
	}
	public function download_sertifikat($id)
	{
		$data = $this->app->get_detail_institute($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->sertifikat, NULL);
	}
	
	//Institute File Download end
	
	//Boarding File Download
	
	public function download_foto1($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->foto, NULL);
	}
	public function download_ktp_ibu($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->ktp_ibu, NULL);
	}
	public function download_ktp_ayah($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->ktp_ayah, NULL);
	}
	public function download_ijazah1($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->ijazah, NULL);
	}
	public function download_akte($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->akte, NULL);
	}
	public function download_kk1($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->kk, NULL);
	}
	public function download_raport($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->raport, NULL);
	}
	public function download_mutasi($id)
	{
		$data = $this->app->get_detail_boarding($id)->row();
		force_download('assets/backend/upload/boarding_institute/' . $data->mutasi, NULL);
	}
	
	//Boarding File Download end
	
	public function hapus_pmb_institute($id)
	{
		$data = $this->app->get_where('tbl_pmb_institute',['id_pmb'=> $id])->row();

		$path1 = './assets/backend/upload/boarding_institute/' . $data->foto;
		unlink($path1);
		$path2 = './assets/backend/upload/boarding_institute/' . $data->ktp;
		unlink($path2);
		$path3 = './assets/backend/upload/boarding_institute/' . $data->ijazah;
		unlink($path3);
		$path4 = './assets/backend/upload/boarding_institute/' . $data->kk;
		unlink($path4);
		$path5 = './assets/backend/upload/boarding_institute/' . $data->sertifikat;
		unlink($path5);
		$path6 = './assets/backend/upload/boarding_institute/' . $data->bukti_tf;
		unlink($path6);

		$this->app->delete('tbl_pmb_institute', ['id_pmb' => $id]);
	}
	
	public function hapus_pmb_boarding($id)
	{
		$data = $this->app->get_where('tbl_pmb_boarding',['id_pmb'=> $id])->row();

		$path1 = './assets/backend/upload/boarding_institute/' . $data->foto;
		unlink($path1);
		$path2 = './assets/backend/upload/boarding_institute/' . $data->ktp_ibu;
		unlink($path2);
		$path3 = './assets/backend/upload/boarding_institute/' . $data->ktp_ayah;
		unlink($path3);
		$path4 = './assets/backend/upload/boarding_institute/' . $data->ijazah;
		unlink($path4);
		$path5 = './assets/backend/upload/boarding_institute/' . $data->akte;
		unlink($path5);
		$path6 = './assets/backend/upload/boarding_institute/' . $data->kk;
		unlink($path6);
		$path7 = './assets/backend/upload/boarding_institute/' . $data->raport;
		unlink($path7);
		$path8 = './assets/backend/upload/boarding_institute/' . $data->mutasi;
		unlink($path8);
		$path9 = './assets/backend/upload/boarding_institute/' . $data->bukti_tf;
		unlink($path9);

		$this->app->delete('tbl_pmb_boarding', ['id_pmb' => $id]);
	}
	
	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}