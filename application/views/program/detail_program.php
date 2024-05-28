<main class="bg-gray-light">
    <!-- breadcrumb area start -->
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>detail program</h3>
            </div>
        </div>
    </section>

    <!-- faq area start here -->
    <section class="tp-service-details-area pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="tp-service-details">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="tp-service-details-img mb-30">
                                    <?php
                                    switch($slug['slug']){
                                        case 'Karantina-Quran-1-Tahun':
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/1.jpg alt='img not
                                        found'>";
                                        break;
                                        case 'Karantina-Quran-6-Bulan':
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/2.jpg alt='img not
                                        found'>";
                                        break;
                                        case 'Dauroh-Quran':
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/3.jpg alt='img not
                                        found'>";
                                        break;
                                        case 'SMP-SMA-Tahfidz-Boarding':
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/4.jpg alt='img not
                                        found'>";
                                        break;
                                        case 'DH-Institute-S1-Double-Gelar':
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/5.jpg alt='img not
                                        found'>";
                                        break;
                                        default:
                                        echo "<img src= " . base_url()."assets/frontend/img/prog/6.jpg alt='img not
                                        found'>";
                                        break;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h2 class="tp-section-title pt-10 mb-20"><?= $slug['nama_prog']?></h2>
                            <p><?=$slug['ket']?></p>
                        </div>
                        <?php
                        switch($slug['slug']){
                        case 'Karantina-Quran-1-Tahun':
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        case 'Karantina-Quran-6-Bulan':
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        case 'Dauroh-Quran':
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        case 'SMP-SMA-Tahfidz-Boarding':
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        case 'DH-Institute-S1-Double-Gelar':
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        default:
                            echo "<a href=". base_url('pmb_online/pendaftaran/'. $slug['slug']) ." class='btn btn-costum w-100 mt-4 mb-4'>Klik Untuk Mendaftar</a>";
                        break;
                        }
                        ?>

                        <!-- <div class="tp-service-details-img mb-30 position-relative">
                            <img src="<?=base_url()?>assets/frontend/img/service/service-details-3.jpg"
                                alt="img not found">
                            <div class="tp-service-details-img-overlay">
                                <div class="tp-service-details-img-overlay-icon">
                                    <a class="venobox" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/o4GuSJYSzrY"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- <h3 class="tp-service-details-subtitle mb-20">Why Choose us</h3>
                        <p class="mb-35">Sem sollicitudin penatibus ullamcorper mauris sociis ac primis potenti nam
                            dictum, primis leo aenean volutpat adipiscing metus elite Feugiat cras cursus iaculis nulla
                            tortor dictumst sociosqu malesuada nostra scelerisque</p>
                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <div class="tp-service-details-feature text-center bg-gray-light mb-40">
                                    <div class="tp-feature-three-icon mb-25">
                                        <img src="assets/img/icon/service-feature.png" class="img-fluid"
                                            alt="img not found">
                                        <i class="flaticon-booking"></i>
                                    </div>
                                    <h4 class="tp-service-details-feature-title"><a
                                            href="service-details.html">Information for Any <br>Services</a></h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="tp-service-details-feature text-center bg-gray-light mb-40">
                                    <div class="tp-feature-three-icon mb-25">
                                        <img src="assets/img/icon/service-feature.png" class="img-fluid"
                                            alt="img not found">
                                        <i class="flaticon-delivery-box"></i>
                                    </div>
                                    <h4 class="tp-service-details-feature-title"><a href="service-details.html">Customer
                                            Support <br>Live Chat</a></h4>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4">
                                <div class="tp-service-details-feature text-center bg-gray-light mb-40">
                                    <div class="tp-feature-three-icon mb-25">
                                        <img src="assets/img/icon/service-feature.png" class="img-fluid"
                                            alt="img not found">
                                        <i class="flaticon-boy"></i>
                                    </div>
                                    <h4 class="tp-service-details-feature-title"><a href="service-details.html">Book
                                            Appointment <br>in online</a></h4>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="tp-faqs-left">
                        <div class="card">
                            <div class="tp-faqs-left-sidebar tp-services-sidebar mb-30">
                                <h4 class="tp-faqs-left-sidebar-title">Lihat Detail Program Lainnya</h4>
                                <ul>
                                    <?php foreach($prog_all as $p) { ?>
                                    <li><a href="<?=base_url('pmb_online/detail_program/'.$p->slug)?>"><?=$p->nama_prog?>
                                            <i class="fas fa-arrow-circle-right"></i></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- faq area end here -->

</main>