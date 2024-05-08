<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail PMB</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin_tiga/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">PMB Online</li>
                <li class="breadcrumb-item active">Detail PMB
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
                        <img src="<?= base_url() ?>assets/backend/upload/po/<?= $d->foto ?>" alt="Profile"
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
                                <h5 class="card-title">Pilihan Program Unggulan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Program yang dipilih</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->prog ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Kelas Program</div>
                                    <?php
                                    switch($d->kelas){
                                        case "1";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Kutab Tahfidz Online (Tingkat SD)</div>";
                                        break;
                                        case "2";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Madrasah Tahfidz Online (Tingkat SMP & SMA)</div>";
                                        break;
                                        case "3";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Tahsin Online Reguler (3x Pertemuan perpekan)</div>";
                                        break;
                                        case "4";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Tahsin Online Intensif (6x Pertemuan perpekan)</div>";
                                        break;
                                        case "5";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Tahfidz Online Reguler (3x Pertemuan perpekan)</div>";
                                        break;
                                        case "6";
                                        echo "<div class='col-lg-9 col-md-8 isi_detail mb-4'>Tahfidz Online Intensif (6x Pertemuan perpekan)</div>";
                                        break;
                                        }
                                    ?>
                                </div>
                                <h5 class="card-title">Hafalan Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Jumlah Juz Hafalan</div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-4"><?= $d->juz ?>
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
                                        <?php if ($d->jkl == '0') {
                                            echo "Laki-laki";
                                        } else {
                                            echo "Perempuan";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Umur</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->umur?> Tahun</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">No WA Aktif</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->wa ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Asal</div>
                                    <div class="col-lg-9 col-md-8 isi_detail"><?= $d->asal ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pekerjaan
                                    </div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-4"><?= $d->kerja ?>
                                    </div>
                                </div>
                                <h5 class="card-title">Pendidikan Akademik</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Pendidikan Terakhir</div>
                                    <div class="col-lg-9 col-md-8 isi_detail mb-4"><?php
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
                                <h5 class="card-title">Dokumen Pendukung</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Formal</div>
                                    <div class="col-lg-9 col-md-8 mb-4">
                                        <a href="<?= base_url('admin_tiga/download_foto/' . $d->id_pmb_po) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a>
                                    </div>
                                </div>
                                <h5 class="card-title">Tes Baca Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rekaman Mengaji Q.S Maryam 1-11
                                    </div>
                                    <div class="col-lg-9 col-md-8">
                                        <a href="<?= base_url('admin_tiga/download_ngaji/' . $d->id_pmb_po) ?>"
                                            class="btn btn-primary btn-sm">Klik Unduh</a>
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