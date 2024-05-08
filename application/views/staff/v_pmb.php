<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data PMB Online</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('staff_karyawan/') ?>">Beranda</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Program</th>
                        <th>Nama Lengkap</th>
                        <th>Motivasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pmb as $s) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="bold"><?= $s->prog ?></td>
                        <td><?= $s->nama ?></td>
                        <td><?=$s->motiv?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</main><!-- End #main -->