<main id="main" class="main">

    <div class="pagetitle">
        <h1><?=$head?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin_satu/') ?>">Beranda</a></li>
                <li class="breadcrumb-item"><?=$head?></li>
                <li class="breadcrumb-item active"><?=$sub?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="tambah">
        <a href="<?= base_url('admin_satu/excel')?>" class="col-lg-3 btn btn-primary"><b>Cetak data to Excel
            </b></a>
    </div>
    <div class="col-12">
        <div class="col-12">
            <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Berhasil ! </strong> Data telah <?= $this->session->flashdata('success') ?>
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
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No</th>
                        <th>Tgl/Waktu</th>
                        <th>Pilihan Program</th>
                        <th>Nama Lengkap</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($seleksi as $s) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= date('d M Y, h:i',strtotime($s->created_at) )  ?> WIB</td>
                        <td><?= $s->prog ?></td>
                        <td><?= $s->nama ?></td>
                        <td> <?php 
                            ?> <span class=" badge rounded-pill bg-success"><?php if($s->status == '1'){
                                echo "Verifed";
                            }  ?></span></td>
                        <td>
                            <a href="<?= base_url('admin_satu/detail_data/' . $s->id_pendaftaran) ?>"
                                class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=<?= '62' . $s->wa ?>"
                                class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#hapus<?= $s->id_pendaftaran; ?>" href=""
                                class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php foreach ($seleksi as $s) { ?>
    <!-- modal hapus -->
    <div class="modal fade" id="hapus<?= $s->id_pendaftaran; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-style: normal;" id="exampleModalLabel">Anda yakin ingin
                        menghapus data pendaftaran ini ?</h5>
                </div>
                <form action="<?= base_url('admin_satu/hapus_data/' . $s->id_pendaftaran) ?>" method="POST">
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