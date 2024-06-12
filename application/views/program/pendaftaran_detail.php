<?php if ($slug['slug'] == 'Karantina-Quran-1-Tahun') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="karantina" action="<?= base_url('pmb_online/proses_pendaftaran/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-130">
                                <div class="card-title ">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program yang
                                                    dipilih <span class="merah">*</span></label>
                                                <?php foreach ($prog->result() as $p) { ?>
                                                    <input disabled type="text" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                    <input type="hidden" name="prog" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                <?php }; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah Juz Hafalan
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="juz" aria-label="Default select example">
                                                    <option value="">-- Pilih Jumlah Juz --</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="16">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Motivasi Mengikuti
                                                    Program Tahfidz Qur'an <span class="merah">*</span></label>
                                                <input type="text" name="motiv" class="form-control" placeholder="cth : Saya ingin memutqinkan hafalan">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-title">
                                <h5>Data Identitas</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <span class="merah">*</span></label>
                                            <input type="text" name="tmptlahir" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir <span class="merah">*</span></label>
                                            <input type="date" name="tgllahir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email <span class="merah">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxx@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ayah/Wali <span class="merah">*</span></label>
                                            <input type="text" name="namaayah" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu/Wali <span class="merah">*</span></label>
                                            <input type="text" name="namaibu" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No. WA Aktif Orang
                                                Tua/Wali
                                                <span class="merah">*</span></label>
                                            <input type="number" name="wawali" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Alamat Lengkap</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Provinsi <span class="merah">*</span></label>
                                            <select class="form-select" id="prov" name="prov" aria-label="Default select example">
                                                <option value="">-- Pilih Provinsi --</option>
                                                <?php foreach ($prov->result() as $pr) : ?>
                                                    <option value="<?= $pr->id ?>"><?= $pr->prov ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kabupaten/Kota <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kab" name="kab" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kecamatan <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kec" name="kec" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RT <span class="merah">*</span></label>
                                            <input type="number" name="rt" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RW <span class="merah">*</span></label>
                                            <input type="number" name="rw" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Alamat <span class="merah">*</span></label>
                                            <input type="text" name="alamat" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode Pos <span class="merah">*</span></label>
                                            <input type="number" name="kdpos" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Pendidikan Akademik</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">SD/MI</option>
                                                <option value="2">SMP/MTs</option>
                                                <option value="3">MA/SMA/SMK</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" class="form-control d-none mt-3" name="pendidikan_hide" placeholder="Silahkan ketik lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah <span class="merah">*</span></label>
                                            <input type="text" name="asalsklh" class="form-control" placeholder="cth : SMA Boarding School">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($prog->result() as $p) { ?>
                            <?php }; ?>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Kartu Keluarga <span class="merah">*</span></label>
                                            <input class="form-control" name="kk" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Ijazah Terakhir</label>
                                            <input class="form-control" name="ijazah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Tes Baca Al-Quran</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Rekaman Mengaji Q.S Maryam 1-11 <span class="merah">*</span></label>
                                            <input class="form-control" name="tes" type="file">
                                            <p>File format yang di dukung mp3/aac/wav. <span>Max 10 MB</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button id="submit_karantina" type="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php if ($slug['slug'] == 'Karantina-Quran-6-Bulan') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="karantina" action="<?= base_url('pmb_online/proses_pendaftaran/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-100">
                                <!-- <div class="title">
                                <h3 class="text-center mb-5 ">Formulir Pendaftaran Karantina 6 Bulan <br>
                                    <span style="font-size:35px;">Tahun <?= $tahun ?></span>
                                </h3>
                            </div> -->
                                <div class="card-title ">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program yang
                                                    dipilih <span class="merah">*</span></label>
                                                <?php foreach ($prog->result() as $p) { ?>
                                                    <input disabled type="text" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                    <input type="hidden" name="prog" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                <?php }; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah Juz Hafalan
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="juz" aria-label="Default select example">
                                                    <option value="">-- Pilih Jumlah Juz --</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="16">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Motivasi Mengikuti
                                                    Program Tahfidz Qur'an <span class="merah">*</span></label>
                                                <input type="text" name="motiv" class="form-control" placeholder="cth : Saya ingin memutqinkan hafalan">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-title">
                                <h5>Data Identitas</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <span class="merah">*</span></label>
                                            <input type="text" name="tmptlahir" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir <span class="merah">*</span></label>
                                            <input type="date" name="tgllahir" class="form-control date" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email <span class="merah">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxx@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ayah/Wali <span class="merah">*</span></label>
                                            <input type="text" name="namaayah" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu/Wali<span class="merah">*</span></label>
                                            <input type="text" name="namaibu" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif Orang
                                                Tua/Wali <span class="merah">*</span></label>
                                            <input type="number" name="wawali" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Alamat Lengkap</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Provinsi <span class="merah">*</span></label>
                                            <select class="form-select" id="prov" name="prov" aria-label="Default select example">
                                                <option value="">-- Pilih Provinsi --</option>
                                                <?php foreach ($prov->result() as $pr) : ?>
                                                    <option value="<?= $pr->id ?>"><?= $pr->prov ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kabupaten/Kota <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kab" name="kab" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kecamatan <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kec" name="kec" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RT <span class="merah">*</span></label>
                                            <input type="number" name="rt" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RW <span class="merah">*</span></label>
                                            <input type="number" name="rw" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Alamat <span class="merah">*</span></label>
                                            <input type="text" name="alamat" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode Pos <span class="merah">*</span></label>
                                            <input type="number" name="kdpos" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Pendidikan Akademik</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="SD/MI">SD/MI</option>
                                                <option value="SMP/MTs">SMP/MTs</option>
                                                <option value="MA/SMA/SMK">MA/SMA/SMK</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" class="form-control d-none mt-3" name="pendidikan_hide" placeholder="Silahkan ketik lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah <span class="merah">*</span></label>
                                            <input type="text" name="asalsklh" class="form-control" placeholder="cth : SMA Boarding School">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($prog->result() as $p) { ?>
                            <?php }; ?>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Kartu Keluarga <span class="merah">*</span></label>
                                            <input class="form-control" name="kk" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Ijazah Terakhir</label>
                                            <input class="form-control" name="ijazah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Tes Baca Al-Quran</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Rekaman Mengaji Q.S Maryam 1-11 <span class="merah">*</span></label>
                                            <input class="form-control" name="tes" type="file">
                                            <p>File format yang di dukung mp3/aac/wav. <span>Max 10 MB</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php if ($slug['slug'] == 'SMP-SMA-Tahfidz-Boarding') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="boarding" action="<?= base_url('pmb_online/proses_pendaftaran2/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-100">
                                <!-- <div class="title">
                                <h5 class="text-center mb-5 ">Formulir Pendaftaran Siswa/i Baru <br>
                                    <span style="font-size:30px;">Tahun <?= $tahun ?></span>
                                </h5>
                            </div> -->
                                <div class="card-title">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program
                                                    Boarding School <span class="merah">*</span></label>
                                                <select class="form-select" name="prog" id="prog" aria-label="Default select example">
                                                    <option value="">-- Pilih Program Boarding School --</option>
                                                    <option value="1">SMP Tahfidz Boarding School</option>
                                                    <option value="2">SMA Tahfidz Boarding School</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="jur" class="col-md-6 col-sm-12 d-none">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jurusan <span class="merah">*</span></label>
                                                <input type="text" name="jur" value="IPS - (Ilmu Pengetahuan Sosial)" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Calon Siswa/i</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <span class="merah">*</span></label>
                                            <input type="text" name="tmpt_lahir" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir <span class="merah">*</span></label>
                                            <input type="date" name="tgl_lahir" class="form-control date" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email <span class="merah">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxx@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Anak Ke <span class="merah">*</span></label>
                                            <input type="number" name="anak_ke" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit <span class="merah">*</span></label>
                                            <input type="text" name="rwyt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="container-sm">
                                        <hr class="hr">
                                        <div class="card-title2">
                                            <h5>Data Alamat Lengkap</h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Provinsi
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" id="prov" name="prov" aria-label="Default select example">
                                                            <option value="">-- Pilih Provinsi --</option>
                                                            <?php foreach ($prov->result() as $pr) : ?>
                                                                <option value="<?= $pr->id ?>"><?= $pr->prov ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten /
                                                            Kota <span class="merah">*</span></label>
                                                        <select disabled class="form-select" id="kab" name="kab" aria-label="Default select example">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan
                                                            <span class="merah">*</span></label>
                                                        <select disabled class="form-select" id="kec" name="kec" aria-label="Default select example">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RT <span class="merah">*</span></label>
                                                        <input type="number" name="rt" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RW <span class="merah">*</span></label>
                                                        <input type="number" name="rw" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Alamat
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="alamat" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kode Pos
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="kd_pos" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Riwayat Pendidikan</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">SD</option>
                                                <option value="2">SMP</option>
                                                <option value="3">MA</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" name="pendidikan_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">NISN <span class="merah">*</span></label>
                                            <input type="number" name="nisn" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah <span class="merah">*</span></label>
                                            <input type="text" name="asal_sklh" class="form-control" placeholder="cth : SMA Boarding School">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tahun Kelulusan <span class="merah">*</span></label>
                                            <input type="number" name="thn_lulus" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No. Ijazah</label>
                                            <input type="text" name="no_ijazah" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($prog->result() as $p) { ?>
                            <?php }; ?>
                            <div class="card-title">
                                <h5>Data Orang Tua / Wali</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="container-sm">
                                        <div class="card-title2">
                                            <h5>
                                                Data Ayah
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama Ayah
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="nama_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK / KTP
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="nik_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="pekerjaan_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" name="hasil_ayah" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5"> > 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_ayah_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA Ayah
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="wa_ayah" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title2">
                                            <h5>
                                                Data Ibu
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama Ibu
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="nama_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK/KTP
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="nik_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="pekerjaan_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" name="hasil_ibu" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5"> > 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_ibu_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA Ibu
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="wa_ibu" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title2">
                                            <h5>
                                                Data Wali
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                                            Wali</label>
                                                        <input type="text" name="nama_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK /
                                                            KTP</label>
                                                        <input type="number" name="nik_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                                        <input type="text" name="pekerjaan_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan
                                                        </label>
                                                        <select class="form-select" name="hasil_wali" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5">> 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_wali_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA
                                                            Wali</label>
                                                        <input type="number" name="wa_wali" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Tambahan</h5>
                            </div>
                            <div class="card">
                                <div class="col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mengetahui DHI Boarding
                                            School Dari <span class="merah">*</span></label>
                                        <select type="text" name="tau_drmana" class="form-select">
                                            <option value="">-- Pilih mengetahui DHI boarding school dari --</option>
                                            <option value="1">Sekolah</option>
                                            <option value="2">Teman</option>
                                            <option value="3">Orang Tua/Kerabat</option>
                                            <option value="4">Brosur/Poster</option>
                                            <option value="5">Sepanduk/Banner</option>
                                            <option value="6">Koran/Surat</option>
                                            <option value="7">Internet</option>
                                            <option value="8">Website</option>
                                            <option value="L">Lainnya</option>
                                            <input type="text" name="tau_drmana_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card dok">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal Terbaru <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg. <span>Max 2 MB</span> <br> Warna
                                                background <span> Sesuai Tahun Lahir </span> <br>Tidak pakai
                                                <span>Penutup Wajah </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Identitas/KTP Ibu</label>
                                            <span class="merah">*</span>
                                            <input class="form-control" name="ktp_ibu" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Identitas/KTP Ayah</label>
                                            <span class="merah">*</span>
                                            <input class="form-control" name="ktp_ayah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan SKL/Ijazah Terakhir</label>
                                            <span class="merah">*</span>
                                            <input class="form-control" name="ijazah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                                <br> Sudah di <span>Legalisir</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Akte Kelahiran</label> <span class="merah">*</span>
                                            <input class="form-control" name="akte" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Kartu Keluarga
                                                Terbaru</label> <span class="merah">*</span>
                                            <input class="form-control" name="kk" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                                <br> Sudah ada<span> Barcode</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Raport</label>
                                            <input class="form-control" name="raport" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                                <br><span> Hanya Untuk Siswa Pindahan</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Surat Mutasi/Surat Pindahan dari
                                                Sekolah</label>
                                            <input class="form-control" name="mutasi" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                                <br><span> Hanya Untuk Siswa Pindahan</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button type="submit" id="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php if ($slug['slug'] == 'Program-Online') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="po" action="<?= base_url('pmb_online/proses_pendaftaran3/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-100">
                                <!-- <div class="title">
                                <h3 class="text-center mb-5 ">Formulir Pendaftaran Program Online <br>
                                    <span style="font-size:35px;">Tahun <?= $tahun ?></span>
                                </h3>
                            </div> -->
                                <div class="card-title ">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program yang
                                                    dipilih <span class="merah">*</span></label>
                                                <?php foreach ($prog->result() as $p) { ?>
                                                    <input disabled type="text" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                    <input type="hidden" name="prog" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                <?php }; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kelas Program
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="kelas" aria-label="Default select example">
                                                    <option value="">-- Pilih Kelas Program --</option>
                                                    <option value="1">Kutab Tahfidz Online (Tingkat SD)</option>
                                                    <option value="2">Madrasah Tahfidz Online (Tingkat SMP & SMA)</option>
                                                    <option value="3">Tahsin Online Reguler (3x Pertemuan perpekan)
                                                    </option>
                                                    <option value="4">Tahsin Online Intensif (6x Pertemuan perpekan)
                                                    </option>
                                                    <option value="5">Tahfidz Online Reguler (3x Pertemuan perpekan)
                                                    </option>
                                                    <option value="6">Tahfidz Online Intensif (6x Pertemuan perpekan)
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah Juz Hafalan
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="juz" aria-label="Default select example">
                                                    <option value="">-- Pilih Jumlah Juz --</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="16">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Identitas</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="0">Laki-laki</option>
                                                <option value="1">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Umur <span class="merah">*</span></label>
                                            <input type="number" name="umur" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Daerah <span class="merah">*</span></label>
                                            <input type="text" name="asal" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pekerjaan<span class="merah">*</span></label>
                                            <select class="form-select" name="kerja" aria-label="Default select example">
                                                <option value="">-- Pilih Pekerjaan --</option>
                                                <option value="1">Belum Bekerja</option>
                                                <option value="2">Peg. Swasta</option>
                                                <option value="3">Wiraswasta</option>
                                                <option value="4">PNS</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" name="kerja_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Pendidikan Akademik</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">SD/MI</option>
                                                <option value="2">SMP/MTs</option>
                                                <option value="3">MA/SMA/SMK</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" class="form-control d-none mt-3" name="pendidikan_hide" placeholder="Silahkan ketik lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Tes Baca Al-Quran</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Rekaman Mengaji Q.S Maryam 1-11 <span class="merah">*</span></label>
                                            <input class="form-control" name="tes" type="file">
                                            <p>File format yang di dukung mp3/aac/wav. <span>Max 10 MB</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php if ($slug['slug'] == 'Dauroh-Quran') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="dauroh" action="<?= base_url('pmb_online/proses_pendaftaran/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-100">
                                <!-- <div class="title">
                                <h3 class="text-center mb-5 ">Formulir Pendaftaran Dauroh Qur'an <br>
                                    <span style="font-size:35px;">Tahun <?= $tahun ?></span>
                                </h3>
                            </div> -->
                                <div class="card-title ">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program yang
                                                    dipilih <span class="merah">*</span></label>
                                                <?php foreach ($prog->result() as $p) { ?>
                                                    <input disabled type="text" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                    <input type="hidden" name="prog" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                <?php }; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kelas Program
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="kelas" aria-label="Default select example">
                                                    <option value="">-- Pilih Kelas Program --</option>
                                                    <option value="1">Super Manzil (Ziyadah 30 Juz)</option>
                                                    <option value="2">Super Mutqin (Minimal 3-5 Juz)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Pilihan Waktu
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="waktu" aria-label="Default select example">
                                                    <option value="">-- Pilihan waktu --</option>
                                                    <option value="1">90 Hari</option>
                                                    <option value="2">60 Hari</option>
                                                    <option value="3">30 Hari</option>
                                                    <option value="4">20 Hari</option>
                                                    <option value="5">10 Hari</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jumlah Juz Hafalan
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="juz" aria-label="Default select example">
                                                    <option value="">-- Pilih Jumlah Juz --</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="16">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Motivasi Mengikuti
                                                    Program Tahfidz Qur'an <span class="merah">*</span></label>
                                                <input type="text" name="motiv" class="form-control" placeholder="cth : Saya ingin memutqinkan hafalan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Identitas</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <span class="merah">*</span></label>
                                            <input type="text" name="tmptlahir" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir <span class="merah">*</span></label>
                                            <input type="date" name="tgllahir" class="form-control date" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email <span class="merah">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxx@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ayah/Wali <span class="merah">*</span></label>
                                            <input type="text" name="namaayah" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Ibu/Wali <span class="merah">*</span></label>
                                            <input type="text" name="namaibu" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif Orang
                                                Tua/Wali <span class="merah">*</span></label>
                                            <input type="number" name="wawali" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Alamat Lengkap</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Provinsi <span class="merah">*</span></label>
                                            <select class="form-select" id="prov" name="prov" aria-label="Default select example">
                                                <option value="">-- Pilih Provinsi --</option>
                                                <?php foreach ($prov->result() as $pr) : ?>
                                                    <option value="<?= $pr->id ?>"><?= $pr->prov ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kabupaten/Kota <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kab" name="kab" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kecamatan <span class="merah">*</span></label>
                                            <select disabled class="form-select" id="kec" name="kec" aria-label="Default select example">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RT <span class="merah">*</span></label>
                                            <input type="number" name="rt" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RW <span class="merah">*</span></label>
                                            <input type="number" name="rw" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Alamat <span class="merah">*</span></label>
                                            <input type="text" name="alamat" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode Pos <span class="merah">*</span></label>
                                            <input type="number" name="kdpos" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Pendidikan Akademik</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">SD/MI</option>
                                                <option value="2">SMP/MTs</option>
                                                <option value="3">MA/SMA/SMK</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" class="form-control d-none mt-3" name="pendidikan_hide" placeholder="Silahkan ketik lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah <span class="merah">*</span></label>
                                            <input type="text" name="asalsklh" class="form-control" placeholder="cth : SMA Boarding School">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($prog->result() as $p) { ?>
                            <?php }; ?>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg. <span>Max 2 MB</span> </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Kartu Keluarga <span class="merah">*</span></label>
                                            <input class="form-control" name="kk" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Ijazah Terakhir</label>
                                            <input class="form-control" name="ijazah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Tes Baca Al-Quran</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Rekaman Mengaji Q.S Maryam 1-11 <span class="merah">*</span></label>
                                            <input class="form-control" name="tes" type="file">
                                            <p>File format yang di dukung mp3/mp4. <span>Max 10 MB</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>

<?php if ($slug['slug'] == 'DH-Institute-S1-Double-Gelar') { ?>
    <main class="bg-color pb-30">
        <section class="pendaftaran">
            <div class="container">
                <div class="row">
                    <form id="institute" action="<?= base_url('pmb_online/proses_pendaftaran2_1/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="col-12">
                            <div class="mt-130">
                                <!-- <div class="title">
                                <h5 class="text-center mb-5 ">Formulir PMB DH Institute S1 Double Gelar <br>
                                    <span style="font-size:35px;">Tahun <?= $tahun ?></span>
                                </h5>
                            </div> -->
                                <div class="card-title ">
                                    <h5>Pilihan Program Unggulan</h5>
                                </div>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program yang
                                                    dipilih <span class="merah">*</span></label>
                                                <?php foreach ($prog->result() as $p) { ?>
                                                    <input disabled type="text" value="<?= $p->nama_prog ?>" class="form-control" placeholder="">
                                                    <input type="hidden" name="prog" value="<?= $p->nama_prog ?> class=" form-control" placeholder="">
                                                <?php }; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Sistem Perkuliahan
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="sistem" aria-label="Default select example">
                                                    <option value="">-- Pilih Sistem Perkuliahan --</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Offline</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Program Studi
                                                    <span class="merah">*</span></label>
                                                <select class="form-select" name="prodi" aria-label="Default select example" disabled>
                                                    <option value="">-- Pilih Program Studi --</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-title">
                                <h5>Data Calon Mahasiswa/I</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap <span class="merah">*</span></label>
                                            <input type="text" name="nama" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">NIK <span class="merah">*</span></label>
                                            <input type="number" name="nik" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tempat Lahir <span class="merah">*</span></label>
                                            <input type="text" name="tmpt_lahir" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir <span class="merah">*</span></label>
                                            <input type="date" name="tgl_lahir" class="form-control date" placeholder="mm/dd/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin <span class="merah">*</span></label>
                                            <select class="form-select" name="jkl" aria-label="Default select example">
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kewarganegaraan <span class="merah">*</span></label>
                                            <select class="form-select" name="warga" aria-label="Default select example">
                                                <option value="">-- Pilih Kewarganegaraan --</option>
                                                <option value="1">WNI</option>
                                                <option value="2">WNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email <span class="merah">*</span></label>
                                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="xxx@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No WA Aktif <span class="merah">*</span></label>
                                            <input type="number" name="wa" class="form-control" placeholder="08xxxxxxxxxx">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Status Sipil <span class="merah">*</span></label>
                                            <select class="form-select" name="sipil" aria-label="Default select example">
                                                <option value="">-- Pilih Status --</option>
                                                <option value="1">Belum Menikah</option>
                                                <option value="2">Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pekerjaan <span class="merah">*</span></label>
                                            <select class="form-select" name="kerja" aria-label="Default select example">
                                                <option value="">-- Pilih Pekerjaan --</option>
                                                <option value="1">Belum Bekerja</option>
                                                <option value="2">Peg. Swasta</option>
                                                <option value="3">Wiraswasta</option>
                                                <option value="4">PNS</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" name="kerja_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Bakat/Keahlian</label>
                                            <input type="text" name="bakat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit <span class="merah">*</span></label>
                                            <input type="text" name="rwyt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="container-sm">
                                        <hr class="hr">
                                        <div class="card-title2">
                                            <h5>Data Alamat Lengkap</h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Provinsi
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" id="prov" name="prov" aria-label="Default select example">
                                                            <option value="">-- Pilih Provinsi --</option>
                                                            <?php foreach ($prov->result() as $pr) : ?>
                                                                <option value="<?= $pr->id ?>"><?= $pr->prov ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kabupaten /
                                                            Kota <span class="merah">*</span></label>
                                                        <select disabled class="form-select" id="kab" name="kab" aria-label="Default select example">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan
                                                            <span class="merah">*</span></label>
                                                        <select disabled class="form-select" id="kec" name="kec" aria-label="Default select example">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RT <span class="merah">*</span></label>
                                                        <input type="number" name="rt" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">RW <span class="merah">*</span></label>
                                                        <input type="number" name="rw" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Alamat
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="alamat" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kode Pos
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="kd_pos" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Riwayat Pendidikan</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">SMA</option>
                                                <option value="2">SMK</option>
                                                <option value="3">MA</option>
                                                <option value="4">Diploma</option>
                                                <option value="5">Sarjana</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" name="pendidikan_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jurusan
                                                <span class="merah">*</span></label>
                                            <select class="form-select" name="jurusan" aria-label="Default select example">
                                                <option value="">-- Pilih Pendidikan --</option>
                                                <option value="1">IPA</option>
                                                <option value="2">IPS</option>
                                                <option value="3">Bahasa</option>
                                                <option value="L">Lainnya</option>
                                                <input type="text" name="jurusan_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah <span class="merah">*</span></label>
                                            <input type="text" name="asal_sklh" class="form-control" placeholder="cth : SMA Boarding School">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">NISN <span class="merah">*</span></label>
                                            <input type="number" name="nisn" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No. Ijazah </label>
                                            <input type="text" name="no_ijazah" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tahun Kelulusan <span class="merah">*</span></label>
                                            <input type="number" name="thn_lulus" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Orang Tua / Wali</h5>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="container-sm">
                                        <div class="card-title2">
                                            <h5>
                                                Data Ayah
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama Ayah
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="nama_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK/KTP
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="nik_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="pekerjaan_ayah" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" name="hasil_ayah" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5">> 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_ayah_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA Ayah
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="wa_ayah" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title2">
                                            <h5>
                                                Data Ibu
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama Ibu
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="nama_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK/KTP
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="nik_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan
                                                            <span class="merah">*</span></label>
                                                        <input type="text" name="pekerjaan_ibu" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan
                                                            <span class="merah">*</span></label>
                                                        <select class="form-select" name="hasil_ibu" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5">> 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_ibu_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA Ibu
                                                            <span class="merah">*</span></label>
                                                        <input type="number" name="wa_ibu" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-title2">
                                            <h5>
                                                Data Wali
                                            </h5>
                                        </div>
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                                            Wali</label>
                                                        <input type="text" name="nama_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">NIK/KTP</label>
                                                        <input type="number" name="nik_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                                        <input type="text" name="pekerjaan_wali" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Penghasilan</label>
                                                        <select class="form-select" name="hasil_wali" aria-label="Default select example">
                                                            <option value="">-- Pilih Penghasilan --</option>
                                                            <option value="1">
                                                                < 2 Juta /bulan</option>
                                                            <option value="2">2-3 Juta /bulan</option>
                                                            <option value="3">3-4 Juta /bulan</option>
                                                            <option value="4">5-10 Juta /bulan</option>
                                                            <option value="5">> 10 Juta /bulan</option>
                                                            <option value="L">Lainnya</option>
                                                            <input type="text" name="hasil_wali_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">No. WA
                                                            Wali</label>
                                                        <input type="number" name="wa_wali" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Data Tambahan</h5>
                            </div>
                            <div class="card">
                                <div class="col-md-12 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mengetahui
                                            DH Institute Dari <span class="merah">*</span></label>
                                        <select type="text" name="tau_drmana" class="form-select">
                                            <option value="">-- Pilih mengetahui DH Institute dari --
                                            </option>
                                            <option value="1">Sekolah</option>
                                            <option value="2">Teman</option>
                                            <option value="3">Orang Tua/Kerabat</option>
                                            <option value="4">Brosur/Poster</option>
                                            <option value="5">Sepanduk/Banner</option>
                                            <option value="6">Koran/Surat</option>
                                            <option value="7">Internet</option>
                                            <option value="8">Website</option>
                                            <option value="L">Lainnya</option>
                                            <input type="text" name="tau_drmana_hide" class="form-control mt-2 d-none" placeholder="Silahkan tulis lainnya disini">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title1">
                                <h5>Upload Dokumen Pendukung</h5>
                            </div>
                            <div class="card dok">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 ">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Formal <span class="merah">*</span></label>
                                            <input class="form-control" name="foto" type="file" class="formFile">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span> <br> Warna
                                                background <span> Sesuai Tahun Lahir </span> <br>Tidak pakai
                                                <span>Penutup Wajah </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Foto Identitas/KTP</label> <span class="merah">*</span>
                                            <input class="form-control" name="ktp" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Ijazah Terakhir</label> <span class="merah">*</span>
                                            <input class="form-control" name="ijazah" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                                <br> Sudah di <span>Legalisir</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Kartu Keluarga</label> <span class="merah">*</span>
                                            <input class="form-control" name="kk" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Scan Sertifikat/Syahadah Khataman 30
                                                Juz</label>
                                            <input class="form-control" name="sertifikat" type="file">
                                            <p>File format yang di dukung png/jpg/jpeg. <span>Max 2 MB</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-title">
                                <h5>Biaya Pendaftaran</h5>
                            </div>
                            <?php
                            if ($slug['diskon'] == 0) { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 bayar">
                                                <label for="formFile" class="form-label">Upload Bukti Pembayaran <span class="merah">*</span></label>
                                                <a href="" data-bs-toggle="modal" data-bs-target="#ket_bayar" class="btn btn-primary mb-3">Lihat Cara
                                                    Bayar</a>
                                                <input class="form-control" name="bayar" type="file">
                                                <p>File format yang di dukung jpg/png/jpeg. <span>Max 2 MB</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="mb-3 gratis">
                                                <h5><span class="badge rounded-pill bg-danger">PROMO Gratis Biaya
                                                        Pendaftaran
                                                        Rp.<del>300.000-,</del></span>
                                                </h5>
                                                <input class="form-control" name="bayar" value="promo" type="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                            <div class="card ket">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="text-decoration: underline;"> Keterangan : <span class="merah">*</span>
                                            Wajib di isi </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung jawabkan" type="checkbox" name="cek_1" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Bahwa semua data yang diberikan adalah benar dan bisa dipertanggung
                                                    jawabkan</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-check">
                                            <input class="form-check-input" value="Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia untuk memproses pendaftaran" type="checkbox" name="cek_2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                <p> Saya bersedia dihubungi oleh admin pendaftaran Daarul Huffadz Indonesia
                                                    untuk memproses pendaftaran</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="mb-3">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success w-100">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php } ?>


<!-- modal ket_bayar -->
<div class="modal fade" id="ket_bayar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <img src="<?= base_url() ?>assets/frontend/img/feature/ket_tf.jpg" alt="" srcset="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>