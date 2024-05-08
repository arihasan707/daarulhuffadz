<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
    }

    public function Index()
    {
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
            "prog" => $this->app->get_all('tbl_program'),
            "prov" => $this->app->get_all('provinces')
        ];
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav');
        $this->load->view('pendaftaran/v_pendaftaran', $data);
        $this->load->view('template/v_footer');
    }
}