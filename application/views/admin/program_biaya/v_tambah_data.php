<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Program</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">Program Unggulan</li>
                <li class="breadcrumb-item active">Tambah Data Program</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <!-- General Form Elements -->
                        <form action="<?= base_url('administrator/simpan_prog') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3 mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nama Program</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_prog" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ket" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="gbr" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 textarea">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Detail</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="ket_detail" rows="100" class="ckeditor" id="ckeditor">
                                </textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 submit">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

</main>