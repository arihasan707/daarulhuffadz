<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('app');
    }
    
    public function Index()
    {
        $title['title'] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
           'prog' => $this->app->all('tbl_program')->result()
        ];
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav');
        $this->load->view('galeri/v_galeri');
        $this->load->view('template/v_footer');
    }
}