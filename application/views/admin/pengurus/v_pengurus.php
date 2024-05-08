<main id="main" class="main">

    <div class="pagetitle">
        <h1>Susunan Pengurus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Susunan Pengurus</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="col-12">
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil ! </strong> Data Telah <?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
            <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> Gagal ! </strong> <?= $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
        </div>
        <div class="tambah">
            <a href="" data-bs-toggle="modal" data-bs-target="#tambah" class="col-12 btn btn-success">Tambah Data
                Pengurus</a>
        </div>
        <div class="card1">
            <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($k->result() as $i) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $i->nama ?></td>
                        <td><?= $i->jab ?></td>
                        <td><img src="<?= base_url() ?>assets/backend/upload/<?= $i->foto ?> " width="150px" alt=""
                                srcset=""></td>
                        <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#hapus<?= $i->id; ?>" href=""
                                class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header head">
                <h5 class="modal-title bold" id="exampleModalLabel">Tambah Data Pengurus</h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('administrator/tambah_karyawan') ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Nama
                            Pengurus<span>*</span></label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nama Lengkap Pengurus">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">jabatan<span>*</span></label>
                        <input type="text" name="jab" class="form-control" id="exampleFormControlInput1"
                            placeholder="Jabatan Pengurus">
                    </div>
                    <div class="form-text">
                        <b><i> Keterangan: <i></b><br><span>*</span>Wajib di isi.
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>


<?php foreach ($k->result() as $h) { ?>
<!-- modal hapus -->
<div class="modal fade" id="hapus<?= $h->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-style: normal;" id="exampleModalLabel">Apakah anda yakin ingin
                    menghapus data pengurus ini ?</h5>
            </div>
            <form action="<?= base_url('administrator/hapus_karyawan') ?>" method="POST">
                <input type="hidden" name="id_karyawan" value="<?= $h->id ?>">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger">Hapus!</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>