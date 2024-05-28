<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('app');
    }
    
    public function Index()
    {
        $title['title'] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
         'flayer'=> $this->app->all('tbl_flayer')->result(),
         'prog' => $this->app->all('tbl_program')->result()
        ];
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav');
        $this->load->view('beranda/v_beranda',$data);
        $this->load->view('template/v_footer', $maps_footer);
    }
}