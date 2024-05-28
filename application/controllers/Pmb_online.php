<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pmb_online extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
        $this->load->library('encryption');
    
    }

    public function Index()
    {
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data["prog"] = $this->app->all('tbl_program');
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav');
        $this->load->view('program/program_unggulan', $data);
        $this->load->view('template/v_footer',$maps_footer);
    }

    public function pendaftaran($slug)
    {
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
            'tahun' => "2024/2025",
            'prog' => $this->app->get_where('tbl_program', ['slug' => $slug]),
            'slug' => $this->app->get_where('tbl_program', ['slug' => $slug])->row_array(),
            'prov' =>  $this->app->get_all('provinces')
            
            // 'pendaftaran' => $this->app->get_daftar()->result()
        ];
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav',$data);
        $this->load->view('program/pendaftaran_detail', $data);
        $this->load->view('template/v_footer',$maps_footer);
    }
    
    public function detail_program($slug){
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $data = [
            'slug' => $this->app->get_where('tbl_program', ['slug' => $slug])->row_array(),
            'prog_all' => $this->app->all('tbl_program')->result()
        ];
        $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
        $this->load->view('template/v_header', $title);
        $this->load->view('v_nav',$data);
        $this->load->view('program/detail_program', $data);
        $this->load->view('template/v_footer',$maps_footer);
    }

    public function get_kabupaten()
    {
        $id = $this->input->post('id');
        $data = $this->app->get_kab($id);
        $output = "<option>-- Pilih Kabupaten --</option>";
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '"> ' . $row->kab . '</option>';
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function get_kecamatan()
    {

        $id = $this->input->post('id');
        $data = $this->app->get_where("districts", ["regency_id" => $id])->result();
        $output = "<option>-- Pilih Kecamatan --</option>";
        foreach ($data as $row) {
            $output .= '<option value="' . $row->id . '"> ' . $row->kec . '</option>';
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function proses_pendaftaran3()
    {
        date_default_timezone_set('Asia/Jakarta');
        $harivar = date("Y-m-d h:i:s");

        $config['upload_path'] = './assets/backend/upload/po'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg|mp3|wav|aac'; 
        $config['encrypt_name'] = FALSE;
        

        $this->upload->initialize($config);
    
        //data
        $prog = $this->input->post('prog');
        $kelas = $this->input->post('kelas');
        $juz = $this->input->post('juz');
        $nama = $this->input->post('nama');
        $jkl = $this->input->post('jkl');
        $umur = $this->input->post('umur');
        $wa = $this->input->post('wa');
        $asal = $this->input->post('asal');
        $kerja = $this->input->post('kerja');
        $pendidikan = $this->input->post('pendidikan');

        //foto
        if (!empty($_FILES['foto']['name'])) {
        $this->upload->do_upload('foto');
        $upload3 = $this->upload->data();
        $foto = $upload3["file_name"];
        }
        
        //rekaman ngaji
        if (!empty($_FILES['tes']['name'])) {
        $this->upload->do_upload('tes');
        $upload4 = $this->upload->data();
        $tes = $upload4["file_name"];
        }
        
        //bukti_tf
        if (!empty($_FILES['bayar']['name'])) {
        $this->upload->do_upload('bayar');
        $upload5 = $this->upload->data();
        $bukti_tf = $upload5["file_name"];
        }else {
            $bukti_tf = $this->input->post('bayar');
        }
        
         //status
         if ($bukti_tf == 'promo') {
            $status = '1';
        }else {
            $status = '0';
        }
        
        $data['temp'] = [
                'prog' => $prog,
                'kelas' => $kelas,
                'juz' => $juz,
                'nama' => $nama,
                'jkl' => $jkl,
                'umur' => $umur,
                'wa' => $wa,
                'asal' => $asal,
                'kerja' => $kerja,
                'pendidikan' => $pendidikan,
                'foto' => $foto,
                'tes' => $tes,
                'bukti_tf' => $bukti_tf,
                'created_at' => $harivar,
                'status' => $status,
                'notif' => '0'
                ];   
        $this->app->insert('tbl_pmb_po',$data['temp']);
        
        $this->session->set_tempdata($data,NULL,300);
        redirect('pmb_online/pendaftaran_sukses/');
    
    }
    
    public function proses_pendaftaran2(){
        date_default_timezone_set('Asia/Jakarta');
        $harivar = date("Y-m-d h:i:s");

        $config['upload_path'] = './assets/backend/upload/boarding_institute'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg|mp3|wav|aac'; 
        $config['encrypt_name'] = FALSE;
        

        $this->upload->initialize($config);
        
        //data
        $prog = $this->input->post('prog');
        $nama = $this->input->post('nama');
        $jkl = $this->input->post('jkl');
        $tmpt_lahir = $this->input->post('tmpt_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $email = $this->input->post('email');
        $wa = $this->input->post('wa');
        $anak_ke = $this->input->post('anak_ke');
        $rwyt = $this->input->post('rwyt');
        $prov = $this->input->post('prov');
        $kab = $this->input->post('kab');
        $kec = $this->input->post('kec');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $alamat = $this->input->post('alamat');
        $kd_pos = $this->input->post('kd_pos');
        $pendidikan = $this->input->post('pendidikan');
        $nisn = $this->input->post('nisn');
        $asal_sklh = $this->input->post('asal_sklh');
        $thn_lulus = $this->input->post('thn_lulus');
        $no_ijazah = $this->input->post('no_ijazah');
        $nama_ayah = $this->input->post('nama_ayah');
        $nik_ayah = $this->input->post('nik_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $hasil_ayah = $this->input->post('hasil_ayah');
        $wa_ayah = $this->input->post('wa_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $nik_ibu = $this->input->post('nik_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $hasil_ibu = $this->input->post('hasil_ibu');
        $wa_ibu = $this->input->post('wa_ibu');
        $nama_wali = $this->input->post('nama_wali');
        $nik_wali = $this->input->post('nik_wali');
        $pekerjaan_wali = $this->input->post('pekerjaan_wali');
        $hasil_wali = $this->input->post('hasil_wali');
        $wa_wali = $this->input->post('wa_wali');
        $tau_drmana = $this->input->post('tau_drmana');
        
        
         //foto 
     if (!empty($_FILES['foto']['name'])) {
        $this->upload->do_upload('foto');
        $upload = $this->upload->data();
        $foto = $upload["file_name"];
        }
        
         //ktp_ibu 
     if (!empty($_FILES['ktp_ibu']['name'])) {
        $this->upload->do_upload('ktp_ibu');
        $upload1 = $this->upload->data();
        $ktp_ibu = $upload1["file_name"];
         }
        
         //ktp_ayah 
     if (!empty($_FILES['ktp_ayah']['name'])) {   
        $this->upload->do_upload('ktp_ayah');
        $upload2 = $this->upload->data();
        $ktp_ayah = $upload2["file_name"];
         }
        
         //ijazah 
     if (!empty($_FILES['ijazah']['name'])) {
        $this->upload->do_upload('ijazah');
        $upload3 = $this->upload->data();
        $ijazah = $upload3["file_name"];
         }
        
         //akte 
     if (!empty($_FILES['akte']['name'])) {
        $this->upload->do_upload('akte');
        $upload4 = $this->upload->data();
        $akte = $upload4["file_name"];
        }
        
         //kk 
     if (!empty($_FILES['kk']['name'])) {    
        $this->upload->do_upload('kk');
        $upload5 = $this->upload->data();
        $kk = $upload5["file_name"];
         }
        
         //biaya
     if (!empty($_FILES['bayar']['name'])) {
        $this->upload->do_upload('bayar');
        $upload6 = $this->upload->data();
        $bukti_tf = $upload6["file_name"];
         }else {
            $bukti_tf = $this->input->post('bayar');
         }
        
         //raport
     if (!empty($_FILES['raport']['name'])) {
        $this->upload->do_upload('raport');
        $upload7 = $this->upload->data();
        $raport = $upload7["file_name"];
        }
        
         //mutasi
     if (!empty($_FILES['mutasi']['name'])) {
        $this->upload->do_upload('mutasi');
        $upload8 = $this->upload->data();
        $mutasi = $upload8["file_name"];
     }
     
      //status
      if ($bukti_tf == 'promo') {
        $status = '1';
    }else {
        $status = '0';
    }
        
        $data['temp'] = [
            'prog' => $prog,
            'nama' => $nama,
            'jkl' => $jkl,
            'tmpt_lahir'=> $tmpt_lahir,
            'tgl_lahir' => $tgl_lahir,
            'email' => $email,
            'wa' => $wa,
            'anak_ke' => $anak_ke,
            'rwyt' => $rwyt,
            'prov' =>$prov,
            'kab' =>$kab,
            'kec' =>$kec,
            'rt' =>$rt,
            'rw' =>$rw,
            'alamat' =>$alamat,
            'kd_pos' =>$kd_pos,
            'pendidikan' =>$pendidikan,
            'nisn' =>$nisn,
            'asal_sklh' =>$asal_sklh,
            'thn_lulus' =>$thn_lulus,
            'no_ijazah' =>$no_ijazah,
            'nama_ayah' =>$nama_ayah,
            'nik_ayah' =>$nik_ayah,
            'pekerjaan_ayah' =>$pekerjaan_ayah,
            'hasil_ayah' =>$hasil_ayah,
            'wa_ayah' =>$wa_ayah,
            'nama_ibu' =>$nama_ibu,
            'nik_ibu' =>$nik_ibu,
            'pekerjaan_ibu' =>$pekerjaan_ibu,
            'hasil_ibu' =>$hasil_ibu,
            'wa_ibu' =>$wa_ibu,
            'nama_wali' =>$nama_wali,
            'nik_wali' =>$nik_wali,
            'pekerjaan_wali' =>$pekerjaan_wali,
            'hasil_wali' =>$hasil_wali,
            'wa_wali' =>$wa_wali,
            'tau_drmana' =>$tau_drmana,
            'foto' =>$foto,
            'ktp_ibu' =>$ktp_ibu,
            'ktp_ayah' =>$ktp_ayah,
            'ijazah' =>$ijazah,
            'akte' =>$akte,
            'kk' =>$kk,
            'raport' =>$raport,
            'mutasi' =>$mutasi,
            'bukti_tf' =>$bukti_tf,
            'created_at' =>$harivar,
            'notif' =>'0',
            'status' =>$status
        ];
        
       $this->app->insert('tbl_pmb_boarding', $data['temp']);
       $this->session->set_tempdata($data,NULL,300);
       redirect('pmb_online/pendaftaran_sukses/');
        
    }
    
    public function proses_pendaftaran2_1(){
        date_default_timezone_set('Asia/Jakarta');
        $harivar = date("Y-m-d h:i:s");

        $config['upload_path'] = './assets/backend/upload/boarding_institute'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg|mp3|wav|aac'; 
        $config['encrypt_name'] = FALSE;
        

        $this->upload->initialize($config);
        
        //data
        $prog = $this->input->post('prog');
        $sistem = $this->input->post('sistem');
        $prodi = $this->input->post('prodi');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $tmpt_lahir = $this->input->post('tmpt_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $jkl = $this->input->post('jkl');
        $warga = $this->input->post('warga');
        $email = $this->input->post('email');
        $wa = $this->input->post('wa');
        $sipil = $this->input->post('sipil');
        $kerja = $this->input->post('kerja');
        $bakat = $this->input->post('bakat');
        $rwyt = $this->input->post('rwyt');
        $prov = $this->input->post('prov');
        $kab = $this->input->post('kab');
        $kec = $this->input->post('kec');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $alamat = $this->input->post('alamat');
        $kd_pos = $this->input->post('kd_pos');
        $pendidikan = $this->input->post('pendidikan');
        $jur = $this->input->post('jurusan');
        $asal_sklh = $this->input->post('asal_sklh');
        $nisn = $this->input->post('nisn');
        $no_ijazah = $this->input->post('no_ijazah');
        $thn_lulus = $this->input->post('thn_lulus');
        $nama_ayah = $this->input->post('nama_ayah');
        $nik_ayah = $this->input->post('nik_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $hasil_ayah = $this->input->post('hasil_ayah');
        $wa_ayah = $this->input->post('wa_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $nik_ibu = $this->input->post('nik_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $hasil_ibu = $this->input->post('hasil_ibu');
        $wa_ibu = $this->input->post('wa_ibu');
        $nama_wali = $this->input->post('nama_wali');
        $nik_wali = $this->input->post('nik_wali');
        $pekerjaan_wali = $this->input->post('pekerjaan_wali');
        $hasil_wali = $this->input->post('hasil_wali');
        $wa_wali = $this->input->post('wa_wali');
        $tau_drmana = $this->input->post('tau_drmana');
        
        
         //foto 
     if (!empty($_FILES['foto']['name'])) {
        $this->upload->do_upload('foto');
        $upload = $this->upload->data();
        $foto = $upload["file_name"];
        }
        
         //ktp 
     if (!empty($_FILES['ktp']['name'])) {
        $this->upload->do_upload('ktp');
        $upload1 = $this->upload->data();
        $ktp = $upload1["file_name"];
         }
        
         //ijazah 
     if (!empty($_FILES['ijazah']['name'])) {
        $this->upload->do_upload('ijazah');
        $upload3 = $this->upload->data();
        $ijazah = $upload3["file_name"];
         }
        
         //kk 
     if (!empty($_FILES['kk']['name'])) {    
        $this->upload->do_upload('kk');
        $upload5 = $this->upload->data();
        $kk = $upload5["file_name"];
         }
         
        //sertifikat 
     if (!empty($_FILES['sertifikat']['name'])) {
        $this->upload->do_upload('sertifikat');
        $upload4 = $this->upload->data();
        $sertifikat = $upload4["file_name"];
        }
        
         //biaya
     if (!empty($_FILES['bayar']['name'])) {
        $this->upload->do_upload('bayar');
        $upload6 = $this->upload->data();
        $bukti_tf = $upload6["file_name"];
         }else {
            $bukti_tf = $this->input->post('bayar');
         }
         
          //status
        if ($bukti_tf == 'promo') {
            $status = '1';
        }else {
            $status = '0';
        }
        
        $data['temp'] = [
            'prog' => $prog,
            'sistem' => $sistem,
            'prodi' => $prodi,
            'nama' => $nama,
            'nik' => $nik,
            'tmpt_lahir'=> $tmpt_lahir,
            'tgl_lahir' => $tgl_lahir,
            'jkl' => $jkl,
            'email' => $email,
            'wa' => $wa,
            'sipil' => $sipil,
            'kerja' => $kerja,
            'bakat' => $bakat,
            'rwyt' => $rwyt,
            'prov' =>$prov,
            'kab' =>$kab,
            'kec' =>$kec,
            'rt' =>$rt,
            'rw' =>$rw,
            'alamat' =>$alamat,
            'kd_pos' =>$kd_pos,
            'pendidikan' =>$pendidikan,
            'jurusan' =>$jur,
            'asal_sklh' =>$asal_sklh,
            'nisn' =>$nisn,
            'no_ijazah' =>$no_ijazah,
            'thn_lulus' =>$thn_lulus,
            'nama_ayah' =>$nama_ayah,
            'nik_ayah' =>$nik_ayah,
            'pekerjaan_ayah' =>$pekerjaan_ayah,
            'hasil_ayah' =>$hasil_ayah,
            'wa_ayah' =>$wa_ayah,
            'nama_ibu' =>$nama_ibu,
            'nik_ibu' =>$nik_ibu,
            'pekerjaan_ibu' =>$pekerjaan_ibu,
            'hasil_ibu' =>$hasil_ibu,
            'wa_ibu' =>$wa_ibu,
            'nama_wali' =>$nama_wali,
            'nik_wali' =>$nik_wali,
            'pekerjaan_wali' =>$pekerjaan_wali,
            'hasil_wali' =>$hasil_wali,
            'wa_wali' =>$wa_wali,
            'tau_drmana' =>$tau_drmana,
            'foto' =>$foto,
            'ktp' =>$ktp,
            'ijazah' =>$ijazah,
            'kk' =>$kk,
            'sertifikat' =>$sertifikat,
            'bukti_tf' =>$bukti_tf,
            'created_at' =>$harivar,
            'notif' =>'0',
            'status' =>$status
        ];
        
       $this->app->insert('tbl_pmb_institute', $data['temp']);
       $this->session->set_flashdata('sukses','sukses');
       redirect('beranda');
        
    }
    
    public function proses_pendaftaran() {
        date_default_timezone_set('Asia/Jakarta');
        $harivar = date("Y-m-d h:i:s");

        $config['upload_path'] = './assets/backend/upload/karantina_dauroh'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg|mp3|wav|aac'; 
        $config['encrypt_name'] = FALSE;
        

        $this->upload->initialize($config);
        
        //data
        $prog = $this->input->post('prog');
        $kelas = $this->input->post('kelas');
        $waktu = $this->input->post('waktu');
        $juz = $this->input->post('juz');
        $motiv = $this->input->post('motiv');
        $nama = $this->input->post('nama');
        $jkl = $this->input->post('jkl');
        $tmptlahir = $this->input->post('tmptlahir');
        $tgllahir = $this->input->post('tgllahir');
        $email = $this->input->post('email');
        $wa = $this->input->post('wa');
        $namaayah = $this->input->post('namaayah');
        $namaibu = $this->input->post('namaibu');
        $wawali = $this->input->post('wawali');
        $prov = $this->input->post('prov');
        $kab = $this->input->post('kab');
        $kec = $this->input->post('kec');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $alamat = $this->input->post('alamat');
        $kdpos = $this->input->post('kdpos');
        $pendidikan = $this->input->post('pendidikan');
        $asalsklh = $this->input->post('asalsklh');
        
        //foto
        if (!empty($_FILES['foto']['name'])) {
        $this->upload->do_upload('foto');
        $upload = $this->upload->data();
        $foto = $upload["file_name"];
        }
        
        //kk
        if (!empty($_FILES['kk']['name'])) {
        $this->upload->do_upload('kk');
        $upload2 = $this->upload->data();
        $kk = $upload2["file_name"];
        }
        
        //ijazah
        if (!empty($_FILES['ijazah']['name'])) {
        $this->upload->do_upload('ijazah');
        $upload3 = $this->upload->data();
        $ijazah = $upload3["file_name"];
        }

        //rekaman ngaji
        if (!empty($_FILES['tes']['name'])) {
        $this->upload->do_upload('tes');
        $upload4 = $this->upload->data();
        $tes = $upload4["file_name"];
        }
        
        //bukti_tf
        if (!empty($_FILES['bayar']['name'])) {
        $this->upload->do_upload('bayar');
        $upload5 = $this->upload->data();
        $bukti_tf = $upload5["file_name"];
        }else {
            $bukti_tf = $this->input->post('bayar');
        }
        
        //status
        if ($bukti_tf == 'promo') {
            $status = '1';
        }else {
            $status = '0';
        }
        
        $data['temp'] = [
                'prog' => $prog,
                'kelas' => $kelas,
                'waktu' => $waktu,
                'juz' => $juz,
                'motiv' => $motiv,
                'nama' => $nama,
                'jkl' => $jkl,
                'tmp_lahir' => $tmptlahir,
                'tgl_lahir' => $tgllahir,
                'email' => $email,
                'wa' => $wa,
                'nama_ayah' => $namaayah,
                'nama_ibu' => $namaibu,
                'wa_ortu' => $wawali,
                'prov' => $prov,
                'kab' => $kab,
                'kec' => $kec,
                'rt' => $rt,
                'rw' => $rw,
                'alamat' => $alamat,
                'kd_pos' => $kdpos,
                'pendidikan' => $pendidikan,
                'asal_sklh' => $asalsklh,
                'foto' => $foto,
                'kk' => $kk,
                'ijazah' => $ijazah,
                'tes' => $tes,
                'bukti_tf' => $bukti_tf,
                'created_at' => $harivar,
                'status' => $status,
                'notif' => '0'
                ];   
              
             $this->app->insert('tbl_pmb_karantina',$data['temp']);
             $this->session->set_tempdata($data,NULL,300);
             redirect('pmb_online/pendaftaran_sukses/');
        
    }
        
    public function download_biaya()
    {
        force_download('assets/frontend/biaya/Biaya_Pendidikan_DHI_2023.jpg', NULL);
    }
    public function download_karantina_1()
    {
        force_download('assets/frontend/brosur/brosur_karantina_1_tahun_2024-2025.pdf', NULL);
    }
    public function download_karantina_6()
    {
        force_download('assets/frontend/brosur/Brosur_DHI_2023_2024.pdf', NULL);
    }
    public function download_dauroh()
    {
        force_download('assets/frontend/brosur/Brosur_DHI_2023_2024.pdf', NULL);
    }
    public function download_smp_sma()
    {
        force_download('assets/frontend/brosur/brosur_SMP_SMA_2024_2025.pdf', NULL);
    }
    public function download_institute()
    {
        force_download('assets/frontend/brosur/brosur_DH_Institute_2024_2025.pdf', NULL);
    }
    public function download_po()
    {
        force_download('assets/frontend/brosur/Brosur_DHI_2023_2024.pdf', NULL);
    }
    
    public function pendaftaran_sukses(){
        $title["title"] = "Pesantren Tahfidz Daarul Huffadz Indonesia - Mencetak Generasi Penghafal Al-Qur'an";
        $tempdata = $this->session->tempdata('temp');
        if (!empty($tempdata)) {
            $tempdata['tempdata'] = $this->session->tempdata('temp');
            $maps_footer['maps'] = $this->app->all('tbl_cabang')->result();
            $this->load->view('template/v_header',$title);
            $this->load->view('program/v_sukses',$tempdata);
            $this->load->view('template/v_footer',$maps_footer);
        }else{
           redirect();
        }
    }
}