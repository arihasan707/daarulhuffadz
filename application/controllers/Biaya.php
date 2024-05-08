<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
    }

    public function Index()
    {
        $data = [
            "title" => "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an"
        ];
        $this->load->view('template/v_header', $data);
        $this->load->view('v_nav');
        $this->load->view('v_biaya');
        $this->load->view('template/v_footer');
    }
    
    public function download()
    {
        $nama = $this->input->post('nama');
        $kota = $this->input->post('kota');
        $wa = $this->input->post('wa');
        $tujuan = $this->input->post('tujuan');
        $data=[
            'nama'=>$nama,
            'kota' =>$kota,
            'wa'=> $wa,
            'tujuan' =>$tujuan
        ];
        $this->app->insert('tbl_kontak_suport',$data);
        redirect('biaya/file');
    }
    
    public function file(){
    force_download('assets/frontend/biaya/info_biaya_daarulhuffadz.pdf', NULL);
    }
}