<div class="tp-header-menu-area header-sticky sticky-menu sticky">
    <div class="container">
        <div class="row justify-content-xl-center align-items-center">
            <div class="col-xl-2 col-8 tp-sticky-column">
                <div class="tp-sticky-logo">
                    <a href="<?= base_url('beranda')?>"><img src="<?= base_url(); ?>assets/frontend/img/logo/dhi.png"
                            width="200px" class="img-fluid" alt="logo not found"></a>
                </div>
            </div>
            <div class="col-xl-8 col-4">
                <div class="tp-main-menu-bg">
                    <div class="tp-main-menu bg-white">
                        <nav id="tp-mobile-menu">
                            <ul class="text-center">
                                <li class="menu-item-has-children"><a href="<?= base_url();?>" class="b">Beranda</a>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Tentang Kami</a>
                                    <ul class="sub-menu">
                                        <!-- <li><a href="<?= base_url('tentang/komite_pengurus/'); ?>">Komite Pengurus</a>
                                        </li> -->
                                        <li><a href="<?= base_url('tentang/daftar_cabang/'); ?>">Daftar Cabang</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children p"><a
                                        data-id="<?= base_url('pmb_online/pendaftaran/'. $slug['slug']); ?>"
                                        data-id2="<?= base_url('pmb_online/detail_program/'. $slug['slug']); ?>"
                                        href="<?= base_url('pmb_online/'); ?>">PMB Online</a>
                                </li>
                                <!-- <li><a href="<?= base_url('galeri/') ?>" class="b">Galeri</a></li> -->
                                <li><a href="<?= base_url('biaya/') ?>" class="b">Biaya</a></li>
                                <li><a href="<?= base_url('kontak/') ?>" class="k">Kontak</a></li>
                                <li><a href="<?= base_url('faq/') ?>" class="f">FAQs</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu activation -->
                    <div class="side-menu-icon d-xl-none text-end bg-white">
                        <button class="side-toggle"><i class="far fa-bars"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 tp-sticky-column-btn">
                <div class="tp-sticky-btn text-end">
                    <a href="<?= base_url('pmb_online/') ?>" class="theme-btn justify-content-end"><i
                            class="flaticon-enter"></i> Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
    <marquee class="d-lg-none">
    </marquee>
</div>