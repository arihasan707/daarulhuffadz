<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_satu extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		// $this->load->library('encryption');
		$this->load->model('app');
	}
    
	public function index()
	{
		$title =  [
			'title' => "Admin 1 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_karantina',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_karantina',['notif'=> '0'])->result()
		];
		$this->load->view('admin_1/v_header' , $title);
		$this->load->view('admin_1/v_nav', $title);
		$this->load->view('admin_1/v_dashboard');
		$this->load->view('admin_1/v_footer');
	}
	
	public function pmb_online()
	{
		$notif = [
			'notif' => '1'
		];
		
		$this->app->notif('tbl_pmb_karantina',$notif);
		
		$data["pmb"] = $this->app->pmb_karantina()->result();
		$title =  [
			'title' => "Admin 1 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'head' => 'PMB Online',
			'validasi' => $this->app->get_where('tbl_pmb_karantina',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_karantina',['notif'=> '0'])->result()
		];
		$this->load->view('admin_1/v_header', $title);
		$this->load->view('admin_1/v_nav');
		$this->load->view('admin_1/pendaftaran/v_pmb', $data);
		$this->load->view('admin_1/v_footer');
	}
	
	public function konfirmasi($id)
	{
		$data = [
		'status'=>'1'	
		];
		$this->app->update('tbl_pmb_karantina',$data,['id_pmb_karantina'=> $id]);
		$this->session->set_flashdata('sukses', 'konfirmasi');
		redirect('admin_satu/pmb_online');
	}
	
	public function detail_pmb($id)
	{
		$data["detail"] = $this->app->get_detail_pmb($id);
		$title =  [
			'title' => "Admin 1 - Pesantren Tahfidz Daarul Huffadz Indonesia",
			'validasi' => $this->app->get_where('tbl_pmb_karantina',['notif'=> '0'])->result(),
			'validasi_limit' => $this->app->get_notif_limit('tbl_pmb_karantina',['notif'=> '0'])->result()
		];
		$this->load->view('admin_1/v_header', $title);
		$this->load->view('admin_1/v_nav');
		$this->load->view('admin_1/pendaftaran/v_detail', $data);
		$this->load->view('admin_1/v_footer');
	}
	public function download_foto($id)
	{
		$data = $this->app->get_detail_pmb($id)->row();
		
		force_download('assets/backend/upload/karantina_dauroh/' . $data->foto, NULL);
	}
	public function download_kk($id)
	{
		$data = $this->app->get_detail_pmb($id)->row();
		force_download('assets/backend/upload/karantina_dauroh/' . $data->kk, NULL);
	}
	public function download_ijazah($id)
	{
		$data = $this->app->get_detail_pmb($id)->row();
		force_download('assets/backend/upload/karantina_dauroh/' . $data->ijazah, NULL);
	}
	public function download_ngaji($id)
	{
		$data = $this->app->get_detail_pmb($id)->row();
		force_download('assets/backend/upload/karantina_dauroh/' . $data->tes, NULL);
	}
	
	public function hapus_pmb($id)
	{
		$data = $this->app->get_where('tbl_pmb_karantina',['id_pmb_karantina'=> $id])->row();

		$path1 = './assets/backend/upload/karantina_dauroh/' . $data->foto;
		unlink($path1);
		$path2 = './assets/backend/upload/karantina_dauroh/' . $data->kk;
		unlink($path2);
		$path3 = './assets/backend/upload/karantina_dauroh/' . $data->ijazah;
		unlink($path3);
		$path4 = './assets/backend/upload/karantina_dauroh/' . $data->tes;
		unlink($path4);
		$path5 = './assets/backend/upload/karantina_dauroh/' . $data->bukti_tf;
		unlink($path5);

		$this->app->delete('tbl_pmb_karantina', ['id_pmb_karantina' => $id]);
	}
	
// 	public function load_data(){
		
//         $data = $this->app->all("tbl_pmb_karantina")->result();
// 		$no = 1;
//         foreach ($data as $s) {
// 		echo"<tr>";
// 		echo	"<td>" . $no++ . "</td>";
// 		echo	"<td>" . date('d M Y',strtotime($s->created_at)) . "</td>";
// 		echo	"<td class='bold'>" .$s->prog ."</td>";
// 		echo	"<td>". $s->nama ."</td>";
// 		echo	"<td>";
// 			if ($s->status == '0') {
// 				echo "<span class='badge rounded-pill bg-warning text-dark'>PROSES </span>";
// 			} else {
// 				echo "<span class='badge rounded-pill bg-success'>OK </span>";
// 			}
// 		echo	"</td>";
// 		echo	"<td><a data-bs-toggle='modal' data-bs-target='#bukti_tf".$s->id_pmb_karantina."'href='#'
// 			class='btn btn-secondary btn-sm'>Lihat</a> </td>";
// 		echo "<td>";
// 		echo "<a href='base_url(admin_satu/detail_pmb/') class='btn btn-primary btn-sm'><i class='bi bi-eye-fill'></i></a>";
// 		echo  "<a href='https://api.whatsapp.com/send?phone=<?='62' class='btn btn-success btn-sm'><i class='bi bi-whatsapp'></i></a>";
// 		echo "</td>";
// echo "</tr>";
// }
// }

public function keluar()
{
$this->session->sess_destroy();
redirect('auth');
}
}