<main id="main" class="main">

    <div class="pagetitle">
        <h1>Diskon Pendaftaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('staff_karyawan/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">Promosi</li>
                <li class="breadcrumb-item active">Diskon Pendaftaran</li>
            </ol>
        </nav>

        <div class="row">
            <?php foreach($prog as $p) { ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php
                                if ($p->diskon == 1) { ?>
                                <div class="col d-flex justify-content-center mb-2"> <span
                                        class="badge rounded-pill bg-success">Aktif</span></div>

                                <?php }?>
                                <label for="inputEmail3"
                                    class="col-sm-12 col-form-label text-center"><?=$p->nama_prog?></label>
                                <div class="col-sm-12">
                                    <?php
                                switch($p->diskon){
                                    case 0:
                                    echo "<a href=" . base_url('staff_karyawan/set_diskon_pendaftaran/' . $p->id) . " class='btn btn-primary w-100'>Pasang Diskon</a>";
                                    break;
                                    case 1:
                                    echo "<a href=" . base_url('staff_karyawan/unset_diskon_pendaftaran/' . $p->id) . " class='btn btn-danger w-100'>Lepas Diskon</a>";
                                    break;
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-text">
                            <b>Keterangan :</b><br>
                            Pilih lalu klik program yang ingin di pasang diskon pendaftaran ( free biaya pendaftaran )
                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>