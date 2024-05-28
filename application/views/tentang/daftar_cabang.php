<main class="bg-gray-light">
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>Daftar Cabang</h3>
            </div>
        </div>
    </section>
    <!-- Choose area start here -->

    <section class="tp-choose-area position-relative pt-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="row">
                        <?php foreach($cbng as $row) { ?>
                        <div class="col-sm-3">
                            <div class="tp-choose-timeline ml-15 mb-30">
                                <div class="tp-choose-timeline-single mb-55 pl-35 wow fadeInUp" data-wow-delay=".4s">
                                    <h4 class="tp-choose-timeline-single-title mb-15 hover-theme-color"><a
                                            href=""><?= $row->nm_cbng?></a></h4>
                                    <p><?= $row->alamat?></p>
                                    <?php if($row->map_google != NULL) { { ?>
                                    <div class="maps btn btn-costum">
                                        <a href="<?= $row->map_google?>">Lokasi Maps</a>
                                    </div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
    </section>
</main>
<!-- Choose area end here -->