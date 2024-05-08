<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $main_title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><?= $sub_title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="tambah">
        <a href="" data-bs-toggle="modal" data-bs-target="#tambah" class="col-lg-3 btn btn-primary"><span>Tambah Akses
            </span></a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-12">
                    <?php if ($this->session->flashdata('sukses_hapus')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Berhasil </strong><?= $this->session->flashdata('sukses_hapus') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php }; ?>
                    <?php if ($this->session->flashdata('sukses_tambah')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Berhasil </strong><?= $this->session->flashdata('sukses_tambah') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php }; ?>
                </div>
                <div class="card1">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table id="inbox" class="ui celled table">
                            <thead>
                                <tr style=" background-color:#0d6efd; color:white;">
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Hak Akses</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                    foreach ($admin->result() as $a) : ?>
                                <tr class="putih">
                                    <td><?= $no++ ?></td>
                                    <td><?= $a->nama ?></td>
                                    <td><?= $a->username?></td>
                                    <td><?php 
                                    switch($a->hak_akses){
                                        case '1':
                                            echo "Administrator";
                                            break;
                                        case '2':
                                          echo "Admin 1 - Karantina Qur'an";
                                            break;
                                        case '3':
                                           echo "Admin 2 - Institute & Boarding";
                                            break;
                                        case '4':
                                           echo "Admin 3 - Program Online";
                                            break;
                                        default:
                                          echo "Staff / Karyawan DHI";
                                            break;
                                    }
                                    ?></td>
                                    <td><?= date('d M Y, h:i:s' , strtotime($a->created_at) )  ?></td>
                                    <td> <a data-bs-toggle="modal" data-bs-target="#hapus<?= $a->id; ?>" href=""
                                            class="btn btn-danger btn-sm"><i class="bi bi-trash text-white"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header head">
                    <h5 class="modal-title bold" id="exampleModalLabel">Buat Akses Admin</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('administrator/tambah_akses') ?>" method="post">
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Nama
                                Lengkap<span>*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan nama lengkap">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Hak Akses</label>
                            <select class="form-select" aria-label="Default select example" name="hk" required>
                                <option selected>-- Pilih Hak Akses --</option>
                                <option value="2">Admin 1 - Karantina Qur'an</option>
                                <option value="3">Admin 2 - Institute & Boarding</option>
                                <option value="4">Admin 3 - Program Online</option>
                                <option value="5">Staff / Karyawan</option>
                                <option value="1">Administrator</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Username<span>*</span></label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan username">
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Password<span>*</span></label>
                            <input type="password" name="pass" class="form-control" placeholder="Masukan password">
                        </div>
                        <div class="form-text mb-4">
                            <b><i> Keterangan: <i></b><br><span>*</span>Wajib di isi.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal hapus -->
    <?php foreach ($admin->result() as $a) { ?>
    <div class="modal fade" id="hapus<?= $a->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus akses login
                        <strong> <?= $a->nama?></strong>
                        ?
                    </h5>
                </div>
                <form action="<?= base_url('administrator/hapus_akses/' . $a->id) ?>" method="POST">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

</main>