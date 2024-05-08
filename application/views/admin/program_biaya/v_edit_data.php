<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Data Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">Program Unggulan</li>
                <li class="breadcrumb-item active">Edit Data Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($prog as $p) { ?>
                    <div class="card">
                        <div class="card-body">
                            <!-- General Form Elements -->
                            <form action="<?= base_url('administrator/proses_ubah_program/' . $p->id) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3 mt-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Program</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama_prog" value="<?= $p->nama_prog ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="ket" value="<?= $p->sub ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="gbr" type="file" id="formFile">
                                        <input type="hidden" name="gbr_lama" value="<?= $p->gbr ?>">
                                        <img src="<?= base_url() ?>assets/backend/upload/<?= $p->gbr ?>" width="300px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 textarea">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Detail</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="ket_detail" rows="100" class="ckeditor" id="ckeditor"><?= $p->ket ?>
                                </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 submit">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->
                        <?php }; ?>

</main>