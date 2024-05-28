<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
    }

    public function komite_pengurus()
    {
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
            "pengurus" => $this->app->get_pengurus()
        ];
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav');
        $this->load->view('tentang/komite_pengurus', $data);
        $this->load->view('template/v_footer');
    }
    public function daftar_cabang()
    {
        $data = [
            "title" => "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an"
        ];
        $cabang['cbng'] = $this->app->all('tbl_cabang')->result();
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $data);
        $this->load->view('v_nav');
        $this->load->view('tentang/daftar_cabang',$cabang);
        $this->load->view('template/v_footer',$maps_footer);
    }
}