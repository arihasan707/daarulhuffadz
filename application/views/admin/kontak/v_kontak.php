<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $main_title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Data Pesantren</a></li>
                <li class="breadcrumb-item active"><?= $sub_title ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-12">
                    <?php if ($this->session->flashdata('sukses')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Berhasil </strong><?= $this->session->flashdata('sukses') ?>
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
                                    <th>Kota Tinggal</th>
                                    <th>No. Wa</th>
                                    <th>Tujuan Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                    foreach ($kontak->result() as $a) : ?>
                                <tr class="putih">
                                    <td><?= $no++ ?></td>
                                    <td><?= $a->nama ?></td>
                                    <td><?= $a->kota?></td>
                                    <td><?=$a->wa?></td>
                                    <td><?php
                                    switch($a->tujuan){
                                        case '1';
                                        echo "Karantina 1 Tahun";
                                        break;
                                        case '2';
                                        echo "Karantina 6 Bulan";
                                        break;
                                        case '3';
                                        echo "Program Online";
                                        break;
                                        case '4';
                                        echo "SMP & SMA Tahfidz Boarding";
                                        break;
                                        case '5';
                                        echo "DH Institute S1 Double Gelar";
                                        break;
                                }
                                ?></td>
                                    <td> <a data-bs-toggle="modal" data-bs-target="#hapus<?= $a->id; ?>"
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


    <?php foreach ($kontak->result() as $a) { ?>
    <!-- modal hapus -->
    <div class="modal fade" id="hapus<?= $a->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-style: normal;" id="exampleModalLabel">Apakah anda yakin ingin
                        menghapus data kontak ini ?</h5>
                </div>
                <form action="<?= base_url('administrator/hapus_kontak/'. $a->id) ?>" method="POST">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>


</main>