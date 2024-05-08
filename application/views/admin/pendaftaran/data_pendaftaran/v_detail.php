<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Pendaftaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Detail Pendaftaran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php foreach ($detail->result() as $d) : ?>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="<?= base_url() ?>assets/backend/upload/<?= $d->foto ?>" alt="Profile"
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
                                <p class="small fst-italic"><?= $d->motivasi ?></p>

                                <h5 class="card-title">Pilihan Program Unggulan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Program yang dipilih</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->prog ?></div>
                                </div>
                                <h5 class="card-title">Hafalan Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Jumlah Juz Hafalan</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->juz ?> Juz</div>
                                </div>
                                <h5 class="card-title">Data Identitas Utama</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->nama ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->jkl ?></div>
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
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->email ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomor Telepon / WhatsApp</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ayah / Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->ayah ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Ibu / Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->ibu ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Anak Ke</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->anak_ke ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Dari</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->dari ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomor Telepon / WhatsApp Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa_wali ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomor Telepon / WhatsApp Wali</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->wa_wali ?></div>
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
                                    <div class="col-lg-9 col-md-8"><?= $d->pend_trakhir ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Asal Sekolah</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->asal_sklh ?></div>
                                </div>
                                <h5 class="card-title">Data Dokumen Pendukung</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Formal</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('administrator/download_foto/' . $d->id_pendaftaran) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Foto Identitas / KTP</div>
                                    <?php
                                        $noktp .= '<div class="col-lg-9 col-md-8">' . $d->ktp . '</div>';
                                        if ($d->ktp == 'Afwan Belum Punya KTP') {
                                            echo $noktp;
                                        } else { ?>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('administrator/download_ktp/' . $d->id_pendaftaran) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                    <?php } ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ijazah Terakhir</div>
                                    <?php
                                        $noijazah .= '<div class="col-lg-9 col-md-8">' . $d->ijazah . '</div>';
                                        if ($d->ijazah == 'Afwan Belum Punya Ijazah') {
                                            echo $noijazah;
                                        } else { ?>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('administrator/download_ijazah/' . $d->id_pendaftaran) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                    <?php } ?>
                                </div>
                                <h5 class="card-title">Tes Baca Al-Qur'an</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Rekaman Mengaji Q.S Maryam 1-11</div>
                                    <div class="col-lg-9 col-md-8"><a
                                            href="<?= base_url('administrator/download_ngaji/' . $d->id_pendaftaran) ?>"
                                            class="btn btn-primary">Klik Unduh</a></div>
                                </div>
                                <h5 class="card-title">Ketentuan dan Persyaratan</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Calon Pendaftar Setuju:</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->cek_1 ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Calon Pendaftar Setuju:</div>
                                    <div class="col-lg-9 col-md-8"><?= $d->cek_2 ?></div>
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