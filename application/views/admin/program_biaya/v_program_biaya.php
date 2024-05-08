<main id="main" class="main">

    <div class="pagetitle">
        <h1>Program Unggulan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Program Unggulan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="tambah">
            <a href="<?= base_url('administrator/tambah_data_program') ?>" class="col-12 btn btn-success">Tambah Data Program</a>
        </div>
        <div class="card1">
            <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Tgl/Waktu</th>
                        <th>Program</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($prog->result() as $i) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $i->craeted_at ?></td>
                            <td><?= $i->nama_prog ?></td>
                            <td><?= $i->sub ?></td>
                            <td><img src="<?= base_url() ?>assets/backend/upload/<?= $i->gbr; ?>" width="150px"></td>
                            <td style="display:inline-block;" class="text-center">
                                <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ket<?= $i->id; ?>">
                                    Detail
                                </a>
                                <a href="<?= base_url('administrator/edit_program/' . $i->id) ?>" class="btn btn-info">Edit</a>
                                <a data-bs-toggle="modal" data-bs-target="#hapus<?= $i->id; ?>" href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- edit data -->


<?php foreach ($prog->result() as $o) { ?>
    <!-- ket detail -->
    <div class="modal fade" id="ket<?= $o->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header head">
                    <h5 class="modal-title bold" id="staticBackdropLabel"><?= $o->nama_prog ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $o->ket; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>


<?php foreach ($prog->result() as $h) { ?>
    <!-- modal hapus -->
    <div class="modal fade" id="hapus<?= $h->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus program ini ?</h5>
                </div>
                <form action="<?= base_url('administrator/hapus_prog') ?>" method="POST">
                    <input type="hidden" name="id_prog" value="<?= $h->id ?>">
                    <input type="hidden" name="gbr" value="<?= $h->gbr ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger">Hapus!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }; ?>