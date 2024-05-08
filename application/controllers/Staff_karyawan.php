<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff_karyawan extends CI_Controller
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
    
    public function index(){
        $title =[
            'title' => "Pesantren Tahfidz Daarul Huffadz Indonesia"]; 
        $this->load->view('staff/v_header' ,$title);
        $this->load->view('staff/v_nav');
        $this->load->view('staff/v_dashboard');
        $this->load->view('staff/v_footer');
    }
    
    public function data_pmb_online(){
        $data["pmb"] = $this->app->pmb_karantina()->result();
        $title =[
            'title' => "Pesantren Tahfidz Daarul Huffadz Indonesia"]; 
        $this->load->view('staff/v_header',$title);
        $this->load->view('staff/v_nav');
        $this->load->view('staff/v_pmb' ,$data);
        $this->load->view('staff/v_footer');
    }
    
    public function flayer(){
        $data["flayer"] = $this->app->all('tbl_flayer')->result();
        $title =[
            'title' => "Pesantren Tahfidz Daarul Huffadz Indonesia"]; 
        $this->load->view('staff/v_header',$title);
        $this->load->view('staff/v_nav');
        $this->load->view('staff/v_flayer' ,$data);
        $this->load->view('staff/v_footer');
    }
    
    public function tambah_flayer(){
        $config['upload_path'] = './assets/backend/upload/flayer'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg'; 
        $config['encrypt_name'] = FALSE;
        $config['max-width'] = '929';
        $config['max-height'] = '929';
        $config['max-size'] = '100';
        
        $this->upload->initialize($config);
        
        $judul =$this->input->post('judul');
        
     if (!empty($_FILES['gbr']['name'])) {
        $this->upload->do_upload('gbr');
        $upload = $this->upload->data();
        $gbr = $upload["file_name"];
        $data = [
            'judul'=> $judul,
            'gbr'=> $gbr
        ];
        
        $this->app->insert('tbl_flayer',$data);
        $this->session->set_flashdata('sukses','ditambah');
        redirect('staff_karyawan/flayer');
        }
    }
    
    public function hapus_flayer($id)
	{
		$data = $this->app->get_where('tbl_flayer',['id'=> $id])->row();

		$path1 = './assets/backend/upload/flayer/' . $data->gbr;
		unlink($path1);

		$this->app->delete('tbl_flayer', ['id' => $id]);
	}
    
    public function diskon_pendaftaran(){
        $title =[
            'title' => "Pesantren Tahfidz Daarul Huffadz Indonesia"]; 
        $data = [
            'prog'=> $this->app->all('tbl_program')->result()
        ];
        $this->load->view('staff/v_header',$title);
        $this->load->view('staff/v_nav');
        $this->load->view('staff/v_diskon',$data);
        $this->load->view('staff/v_footer');
    }
    
    public function set_diskon_pendaftaran($id){
        
        $data = [
            'diskon'=> '1'
        ];
        $this->app->update('tbl_program',$data,['id'=>$id]);
        redirect('staff_karyawan/diskon_pendaftaran/');
    }
    
    public function unset_diskon_pendaftaran($id){
        
        $data = [
            'diskon'=> '0'
        ];
        $this->app->update('tbl_program',$data,['id'=>$id]);
        redirect('staff_karyawan/diskon_pendaftaran/');
    }
    
}