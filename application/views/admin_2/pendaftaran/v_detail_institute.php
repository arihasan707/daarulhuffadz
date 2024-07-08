<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail PMB Online</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin_satu/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">PMB Online</li>
                <li class="breadcrumb-item">PMB DH Institute</li>
                <li class="breadcrumb-item active">Detail PMB Online</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php foreach ($detail->result() as $d) : ?>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="<?= base_url() ?>assets/backend/upload/boarding_institute/<?= $d->foto ?>"
                            alt="Profile" class="rounded-circle">
                        <h2><?= $d->nama ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->

                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Pilihan Program Unggulan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Program yang dipilih</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?= $d->prog ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Jalur Masuk</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?php
                                            switch ($d->jalur) {
                                                case "1":
                                                    echo "Reguler";
                                                    break;
                                                case "2":
                                                    echo "Reguler (Alumni DHI)";
                                                    break;
                                                case "3":
                                                    echo "Beasiswa Subsidi";
                                                    break;
                                                case "":
                                                    echo "-";
                                                    break;
                                                default:
                                                    echo "Beasiswa Full (Alumni)";
                                                    break;
                                            }
                                            ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Sistem Perkuliahan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->sistem) {
                                                                            case "1":
                                                                                echo "Double Degree - Online";
                                                                                break;
                                                                            case "2":
                                                                                echo "Double Degree - Offline";
                                                                                break;
                                                                            default:
                                                                                echo "PAI Plus - Online";
                                                                                break;
                                                                        }
                                                                        ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Jurusan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->prodi) {
                                                                            case "1":
                                                                                echo "Pendidikan Agama Islam";
                                                                                break;
                                                                            case "2":
                                                                                echo "Ilmu Al-Qur'an dan Tafsir";
                                                                                break;
                                                                            case "3":
                                                                                echo "Pendidikan Bahasa Arab";
                                                                                break;
                                                                            case "4":
                                                                                echo "Komunikasi dan Penyiaran Islam";
                                                                                break;
                                                                            case "5":
                                                                                echo "Syariah (Akhwal Sakhsiyah)";
                                                                                break;
                                                                            case "6":
                                                                                echo "Ekonomi Syariah";
                                                                                break;
                                                                            default:
                                                                                echo "PAI Plus - Pendidikan Agama Islam";
                                                                                break;
                                                                        }
                                                                        ?></div>
                                </div>
                                <h5 class="card-title">Data Identitas Utama</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nama ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">NIK</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nik ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->tmpt_lahir ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->tgl_lahir ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->jkl) {
                                                                            case '1':
                                                                                echo 'Laki-laki';
                                                                                break;
                                                                            default:
                                                                                echo 'Perempuan';
                                                                                break;
                                                                        }
                                                                        ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kewarganegaraan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->warga) {
                                                                            case '1':
                                                                                echo 'WNI';
                                                                                break;
                                                                            default:
                                                                                echo 'WNA';
                                                                                break;
                                                                        }
                                                                        ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->email ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomor WA Aktif</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Sipil</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->sipil == '1' ? 'Belum Menikah' : 'Menikah' ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->kerja) {
                                                                            case "1":
                                                                                echo "Belum Bekerja";
                                                                                break;
                                                                            case "2":
                                                                                echo "Peg. Swasta";
                                                                                break;
                                                                            case "3":
                                                                                echo "Wiraswasta";
                                                                                break;
                                                                            case "4":
                                                                                echo "PNS";
                                                                                break;
                                                                            default:
                                                                                echo $d->kerja;
                                                                                break;
                                                                        }
                                                                        ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Bakat/Keahlian</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->bakat ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Riwayat Penyakit</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->rwyt ?></div>
                                </div>
                                <h5 class="card-title">Data Alamat Lengkap</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Provinsi</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->prov ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->kab ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->kec ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rt</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->rt ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rw</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->rw ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->alamat ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->kd_pos ?></div>
                                </div>
                                <h5 class="card-title">Data Pendidikan Akademik</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->pendidikan) {
                                                                            case '1':
                                                                                echo "SMA";
                                                                                break;
                                                                            case '2':
                                                                                echo "SMK";
                                                                                break;
                                                                            case '3':
                                                                                echo "MA";
                                                                                break;
                                                                            case '4':
                                                                                echo "Diploma";
                                                                                break;
                                                                            case '5':
                                                                                echo "Sarjana";
                                                                                break;
                                                                            default:
                                                                                echo $d->pendidikan;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jurusan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->jurusan) {
                                                                            case '1':
                                                                                echo "IPA";
                                                                                break;
                                                                            case '2':
                                                                                echo "IPS";
                                                                                break;
                                                                            case '3':
                                                                                echo "Bahasa";
                                                                                break;
                                                                            default:
                                                                                echo $d->jurusan;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->asal_sklh ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">NISN</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nisn ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Ijazah</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->no_ijazah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tahun Kelulusan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->thn_lulus ?></div>
                                </div>
                                <h5 class="card-title">Data Orang Tua/Wali</h5>
                                <h5 class="card-title">Data Ayah</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ayah</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nama_ayah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">NIK/KTP</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nik_ayah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->pekerjaan_ayah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Penghasilan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->hasil_ayah) {
                                                                            case '1':
                                                                                echo "< 2 Juta /bulan";
                                                                                break;
                                                                            case '2':
                                                                                echo "2-3 Juta /bulan";
                                                                                break;
                                                                            case '3':
                                                                                echo "3-4 Juta /bulan";
                                                                                break;
                                                                            case '4':
                                                                                echo "5-10 Juta /bulan";
                                                                                break;
                                                                            case '5':
                                                                                echo " > 10 Juta /bulan";
                                                                                break;
                                                                            default:
                                                                                echo $d->hasil_ayah;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Wa Ayah</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa_ayah ?></div>
                                </div>
                                <h5 class="card-title">Data Ibu</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ibu</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nama_ibu ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">NIK/KTP</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nik_ibu ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->pekerjaan_ibu ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Penghasilan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->hasil_ibu) {
                                                                            case '1':
                                                                                echo "< 2 Juta /bulan";
                                                                                break;
                                                                            case '2':
                                                                                echo "2-3 Juta /bulan";
                                                                                break;
                                                                            case '3':
                                                                                echo "3-4 Juta /bulan";
                                                                                break;
                                                                            case '4':
                                                                                echo "5-10 Juta /bulan";
                                                                                break;
                                                                            case '5':
                                                                                echo " > 10 Juta /bulan";
                                                                                break;
                                                                            default:
                                                                                echo $d->hasil_ibu;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Wa Ibu</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa_ibu ?></div>
                                </div>
                                <h5 class="card-title">Data Wali</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nama_wali ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">NIK/KTP</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nik_wali ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->pekerjaan_wali ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Penghasilan</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->hasil_wali) {
                                                                            case '1':
                                                                                echo "< 2 Juta /bulan";
                                                                                break;
                                                                            case '2':
                                                                                echo "2-3 Juta /bulan";
                                                                                break;
                                                                            case '3':
                                                                                echo "3-4 Juta /bulan";
                                                                                break;
                                                                            case '4':
                                                                                echo "5-10 Juta /bulan";
                                                                                break;
                                                                            case '5':
                                                                                echo " > 10 Juta /bulan";
                                                                                break;
                                                                            default:
                                                                                echo $d->hasil_wali;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. Wa Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa_wali ?></div>
                                </div>
                                <h5 class="card-title">Data Tambahan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Mengetahui DH Institute Dari</div>
                                    <div class="col-lg-9 col-md-8"><?php
                                                                        switch ($d->tau_drmana) {
                                                                            case '1':
                                                                                echo "Sekolah";
                                                                                break;
                                                                            case '2':
                                                                                echo "Teman";
                                                                                break;
                                                                            case '3':
                                                                                echo "Orang Tua/Kerabat";
                                                                                break;
                                                                            case '4':
                                                                                echo "Brosur/Poster";
                                                                                break;
                                                                            case '5':
                                                                                echo "Sepanduk/Banner";
                                                                                break;
                                                                            case '6':
                                                                                echo "Koran/Surat";
                                                                                break;
                                                                            case '7':
                                                                                echo "Internet";
                                                                                break;
                                                                            case '8':
                                                                                echo "Website";
                                                                                break;
                                                                            default:
                                                                                echo $d->tau_drmana;
                                                                                break;
                                                                        } ?></div>
                                </div>
                                <h5 class="card-title">Data Dokumen Pendukung</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Formal</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_dua/download_foto/' . $d->id_pmb) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Identitas/KTP</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_dua/download_ktp/' . $d->id_pmb) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ijazah Terakhir</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_dua/download_ijazah/' . $d->id_pmb) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kartu Keluarga</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_dua/download_kk/' . $d->id_pmb) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Scan Sertifikat/Syahadah Khataman 30
                                        Juz</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?php
                                            switch ($d->sertifikat) {
                                                case NULL:
                                                    echo "<div class='empty'>File Kosong</div>";
                                                    break;
                                                default:
                                                    echo "<a href=" . base_url('admin_dua/download_sertifikat/') . $d->id_pmb . " class='btn btn-primary'>Klik Unduh</a>";
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endforeach; ?>


</main>