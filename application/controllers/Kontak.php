<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
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
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $data);
        $this->load->view('v_nav');
        $this->load->view('kontak/v_kontak');
        $this->load->view('template/v_footer',$maps_footer);
    }

    public function kirim_pesan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'wa' => $this->input->post('wa'),
            'pesan' => $this->input->post('pesan')
        ];
        $this->app->insert('tbl_inbox', $data);
        $this->session->set_flashdata('sukses', 'Terkirim');
        redirect('kontak');
    }
}