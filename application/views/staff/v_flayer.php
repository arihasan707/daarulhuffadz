<main id="main" class="main">

    <div class="pagetitle">
        <h1>Flayer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('staff_karyawan/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">Promosi</li>
                <li class="breadcrumb-item active">Flayer</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div id="ditambah" data-id="<?= $this->session->flashdata('sukses')?>"></div>
    <div class="col-lg-12 mb-2 d-flex justify-content-end">
        <a data-bs-toggle="modal" data-bs-target="#tambah" class="btn bold btn-primary">Tambah Flayer</a>
    </div>
    <div class="col-12">
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($flayer as $f) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="bold"><?= $f->judul ?></td>
                        <td><img src="<?= base_url()?>assets/backend/upload/flayer/<?=$f->gbr?>" width="180px"></td>
                        <td> <span class="badge rounded-pill bg-success">Aktif</span></td>
                        <td><a id="hapus_flayer" data-id="<?=$f->id?>" class="btn btn-sm btn-danger"><i
                                    class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header head">
                    <h5 class="modal-title bold" id="exampleModalLabel">Tambah Flayer Baru
                    </h5>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('staff_karyawan/tambah_flayer/') ?>" enctype="multipart/form-data"
                        method="POST">
                        <div class=" mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Judul :</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="masukan judul" name="judul" required>
                        </div>
                        <div class="mb-2">
                            <label for="exampleFormControlInput1" class="form-label bold">Upload Image :</label>
                            <input type="file" name="gbr" class="form-control" required>
                        </div>
                        <div class="form-text">
                            <b><i> Keterangan: <i></b><br>1. Ukuran image 929 X 929 Pixel <br> 2. Ketika image
                            terupload,
                            otomatis Aktif tampil di beranda web
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary btn-sm bold">Upload!</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</main><!-- End #main -->