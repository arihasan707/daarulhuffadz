<main class="bg-gray-light">
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>Daftar Cabang</h3>
            </div>
        </div>
    </section>
    <!-- Choose area start here -->

    <section class="tp-choose-area position-relative pt-30 pb-30">
        <div class="container">
            <div class="row">
                <?php foreach($cbng as $row) { ?>
                <div class="col-lg-3 mb-4">
                    <div class=" wow fadeInUp" data-wow-delay=".4s">
                        <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><?= $row->nm_cbng?></h4>
                        <p><?= $row->alamat?></p>
                        <?php if($row != NULL) { { ?>
                        <div class="maps btn btn-costum">
                            <a href="<?= $row->map_google?>">Lokasi Maps</a>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
    </section>
</main>
<!-- Choose area end here -->