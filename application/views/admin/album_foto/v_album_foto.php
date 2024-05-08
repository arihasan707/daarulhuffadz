<main id="main" class="main">

    <div class="pagetitle">
        <h1><?= $head?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('administrator/') ?>">Beranda</a></li>
                <li class="breadcrumb-item">Galeri</li>
                <li class="breadcrumb-item active"><?=$head?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="col-12">
        <div class="card1">
            <table id="inbox" class="ui celled table" style="width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Foto</th>
                        <th>A</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</main>