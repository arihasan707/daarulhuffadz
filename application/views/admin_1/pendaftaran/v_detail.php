<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail PMB Online</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin_satu/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Detail PMB Online</li>
                <li class="breadcrumb-item"><?php $h = $detail->row(); 
                                            echo $h->nama;?>
                </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php foreach ($detail->result() as $d) : ?>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="<?= base_url() ?>assets/backend/upload/karantina_dauroh/<?= $d->foto ?>" alt="Profile"
                            class="rounded-circle">
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
                                <h5 class="card-title">Motivasi Mengikuti Program Tahfidz</h5>
                                <p class="isi_detail mb-4">"<?= $d->motiv ?>"</p>
                                <h5 class="card-title">Pilihan Program Unggulan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Program yang dipilih</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->prog ?></div>
                                </div>
                                <?php if($d->prog == "Dauroh Qur'an 30 Hari") { ?>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Kelas Program</div>
                                    <?php
                                    switch($d->kelas){
                                        case "1";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail'>Super Manzil (Ziyadah 30 Juz)</div>";
                                        break;
                                        case "2";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail'>Super Mutqin (Minimal 3-5 Juz)</div>";
                                        break;
                                        }
                                ?>
                                </div>
                                <?php } ?>
                                <?php if($d->prog == "Dauroh Qur'an 30 Hari") { ?>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Pilihan Waktu</div>
                                    <?php
                                    switch($d->waktu){
                                        case '1';
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>90 hari</div>";
                                        break;
                                        case '2';
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>60 hari</div>";
                                        break;
                                        case '3';
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>30 hari</div>";
                                        break;
                                        case '4';
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>20 hari</div>";
                                        break;
                                        case '5';
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>10 hari</div>";
                                        break;
                                }
                                ?>
                                </div>
                                <?php } ?>
                                <h5 class="card-title">Hafalan Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Jumlah Juz Hafalan</div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-2"><?= $d->juz ?> Juz
                                    </div>
                                </div>
                                <h5 class="card-title">Identitas Utama</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->nama ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                    <div class="col-lg-9 col-md-8 isi_detail">
                                        <?php if ($d->jkl == '1') {
                                            echo "Laki-laki";
                                        } else {
                                            echo "Perempuan";
                                        }
                                    
                                    ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->tmp_lahir?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                                    <div class="col-lg-9 col-md-8 isi_detail">
                                        <?= date('d M Y',strtotime($d->tgl_lahir)) ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->email ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No WA Aktif</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->wa ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ayah / Wali</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->nama_ayah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ibu / Wali</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->nama_ibu ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No. WA Aktif Orang Tua/Wali
                                    </div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-4"><?= $d->wa_ortu ?>
                                    </div>
                                </div>
                                <h5 class="card-title">Alamat Lengkap</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Provinsi</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->prov ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kabupaten</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->kab ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kecamatan</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->kec ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rt</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->rt ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rw</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->rw ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->alamat ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kode Pos</div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-3"><?= $d->kd_pos ?>
                                    </div>
                                </div>
                                <h5 class="card-title">Pendidikan Akademik</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?php
                                    if ($d->pendidikan == '1') {
                                        echo 'SD/MI';
                                    } elseif ($d->pendidikan == '2') {
                                        echo 'SMP/MTs';
                                    } elseif ($d->pendidikan == '3') {
                                        echo 'MA/SMA/SMK';
                                    } else {
                                        echo $d->pendidikan;
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-4"><?= $d->asal_sklh ?>
                                    </div>
                                </div>
                                <h5 class="card-title">Dokumen Pendukung</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Formal</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_satu/download_foto/' . $d->id_pmb_karantina) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kartu Keluarga</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_satu/download_kk/' . $d->id_pmb_karantina) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 mb-4 label">Ijazah Terakhir</div>
                                    <?php
                                        $noijazah = '<div class="col-lg-9 col-md-8 empty">File Kosong</div>';
                                        if ($d->ijazah == null) {
                                            echo $noijazah;
                                        } else { ?>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_satu/download_ijazah/' . $d->id_pmb_karantina) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a></div>
                                    <?php } ?>
                                </div>
                                <h5 class="card-title">Tes Baca Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rekaman Mengaji Q.S Maryam 1-11
                                    </div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('admin_satu/download_ngaji/' . $d->id_pmb_karantina) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a></div>
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