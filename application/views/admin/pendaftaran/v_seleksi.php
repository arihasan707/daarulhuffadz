<main id="main" class="main">

    <div class="pagetitle">
        <h1>Proses Validasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Proses Validasi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="col-12">
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
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
                            ?> <span class=" badge rounded-pill bg-warning text-dark"><?php if($s->status == '0'){
                                echo "Proses";
                            }  ?></span></td>
                        <td class="text-center">
                            <a href="<?= base_url('administrator/detail_seleksi/' . $s->id_pendaftaran) ?>"
                                class="btn btn-primary btn-sm"><i class="bi bi-eye-fill"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=<?= '62' . $s->wa ?>"
                                class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#konfirm<?= $s->id_pendaftaran; ?>" href="#"
                                class="btn btn-danger btn-sm">Konfirm</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php foreach ($seleksi as $s) { ?>
<!-- modal hapus -->
<div class="modal fade" id="konfirm<?= $s->id_pendaftaran; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header head">
                <h5 class="modal-title bold" id="exampleModalLabel">Yakin ingin konfirmasi data berikut :
                </h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('administrator/konfirmasi/'. $s->id_pendaftaran) ?>">
                    <div class=" mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Pilihan
                            Program :</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$s->prog?>"
                            disabled>
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label bold">Nama Lengkap
                            :</label>
                        <input type="text" value="<?=$s->nama?>" class="form-control" id="exampleFormControlInput1"
                            disabled>
                    </div>
                    <div class="form-text">
                        <b><i> Keterangan: <i></b><br>Sebelum konfirmasi, silahkan proses data ini
                        terlebih dahulu
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Konfirmasi</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php } ?>