<main id="main" class="main">

    <div class="pagetitle">
        <h1>Daftar Cabang</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Cabang</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="col-12">
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil!!! </strong> Data Telah <?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
            <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> Gagal!!! </strong> <?= $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php }; ?>
        </div>
        <div class="tambah">
            <a href="" data-bs-toggle="modal" data-bs-target="#tambah" class="col-12 btn btn-success">Tambah Data
                Cabang</a>
        </div>
        <div class="card1">
            <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Nama Cabang</th>
                        <th>Alamat</th>
                        <th>Google Maps</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($cabang->result() as $c) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $c->nm_cbng ?></td>
                        <td><?= $c->alamat ?></td>
                        <td><?= $c->map_google ?></td>
                        <td class="text-center"><a data-bs-toggle="modal" data-bs-target="#hapus<?= $c->id; ?>" href=""
                                class="btn btn-danger"><i class="bi bi-trash"></i></a>
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
                <h5 class="modal-title bold" id="exampleModalLabel">Tambah Data Cabang</h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('administrator/tambah_cabang') ?>" method="POST">
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Nama Cabang<span>*</span></label>
                        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan nama cabang">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Alamat<span>*</span></label>
                        <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan alamat cabang">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Link Google
                            Maps<span>*</span></label>
                        <input type="text" name="maps" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan link google maps">
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


<?php foreach ($cabang->result() as $h) { ?>
<!-- modal hapus -->
<div class="modal fade" id="hapus<?= $h->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-style: normal;" id="exampleModalLabel">Apakah anda yakin ingin
                    menghapus data cabang ini ?</h5>
            </div>
            <form action="<?= base_url('administrator/hapus_cabang/' . $h->id) ?>" method="POST">
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