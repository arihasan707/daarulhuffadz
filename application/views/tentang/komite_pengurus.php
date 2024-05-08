<main class="bg-color bg-light">
    <!-- breadcrumb area start -->
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>Komite Pengurus</h3>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- service area start here -->
    <section class="tp-service-area-two pt-30">
        <div class="container">
            <div class="row tags">
                <div class="col-lg-12 text-center pembina">
                    <div class="section-title-wrapper-two mb-40 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="tp-section-title mb-3">Dewan Pembina</h3>
                        <h5 class="bold">Prof. Dr KH. Didin Hafiduddin, M.Sc</h5>
                        <h5>Dr. H. Ibdalsyah, M.A</h5>
                        <h5>Dr. Zahid Mubarok, S.TH.I,M.E.I</h5>
                        <h5>Dr. KH. Deden Muhammad Makhyaruddin.M.A</h5>
                        <h5>Dr. Hendri Tanjung, MM. M.Ag. M.Phil.,Ph.D</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-title-wrapper-two mb-40 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="tp-section-title mb-3">Dewan Penasehat</h3>
                        <h5 class="mb-2">Dr. Ir. H. Yogi Sirodz Gaos, M.T</h5>
                        <h5>iR. H. Helmi Najamuddin, M.Eng.Sc</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-title-wrapper-two mb-40 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="tp-section-title mb-3">Pengawas</h3>
                        <h5>Dra. Hj. Sri Suwartati</h5>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-title-wrapper-two mb-40 text-center wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="tp-section-title mb-3">Susunan Pengurus</h3>
                        <div class="row">
                            <?php foreach ($pengurus->result() as $p) { ?>
                            <div class="col-lg-4 col-md-6 pengurus mb-2">
                                <h5><?=$p->nama?></h5>
                                <span class="jab"><?=$p->jab?></span>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end here -->
</main>