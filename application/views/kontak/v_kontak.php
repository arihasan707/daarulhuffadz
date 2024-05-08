<main class="bg-gray-light">
    <!-- breadcrumb area start -->
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>Kontak</h3>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <div class="flash-kontak" data-flashdata="<?= $this->session->flashdata('sukses') ?>"></div>

    <!-- contact area start here -->
    <section class="tp-contact-area pb-50 pt-40 bg-light">
        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 custom-pad-20 text-center">
                        <div class="tp-contact-info mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <div class="tp-contact-info-text">
                                <h4 class="tp-contact-info-title">Alamat Kantor Pusat</h4>
                                <p>Jl. Batu Hulung No.54, RT.02/RW.01, Margajaya, Kec. Bogor Barat., Kota Bogor, Jawa
                                    Barat 16116</p>
                            </div>
                        </div>
                        <div class="tp-contact-info mb-40 wow fadeInUp d-flex justify-content-center"
                            data-wow-delay=".4s">
                            <div class="tp-contact-info-text">
                                <h4 class="tp-contact-info-title mb-3">Hubungi Kami</h4>
                                <a href="https://api.whatsapp.com/send?phone=6282133558441"
                                    class="admin_kontak mb-3">Admin 1 - 0821 3355 8441</a>
                                <a href="https://api.whatsapp.com/send?phone=6282122022948" class="admin_kontak">Admin
                                    2 - 0821 2202 2948</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- map area start here -->
                        <div class="tp-contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.639391602789!2d106.74507531008766!3d-6.5671170641689995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5dccfcf0d1f%3A0x89b97038a279929c!2sPondok%20Syahir!5e0!3m2!1sen!2sid!4v1714466356244!5m2!1sen!2sid"
                                width="600" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- map area end here -->
        <!-- <div class="col-lg-8">
                 <div class="tp-contact-form">
                     <form action="<?= base_url('kontak/kirim_pesan') ?>" method="post">
                         <div class="row custom-mar-20">
                             <div class="col-md-6 custom-pad-20">
                                 <div class="tp-contact-form-field mb-20">
                                     <input type="text" name="nama" placeholder="Nama Lengkap">
                                 </div>
                             </div>
                             <div class="col-md-6 custom-pad-20">
                                 <div class="tp-contact-form-field mb-20">
                                     <input type="text" name="wa" placeholder="(08xx) Nomor Telepon">
                                 </div>
                             </div>
                             <div class="col-md-12 custom-pad-20">
                                 <div class="tp-contact-form-field mb-20">
                                     <textarea name="pesan" placeholder="Tulis isi pesan anda"></textarea>
                                 </div>
                             </div>
                             <div class="col-md-12 custom-pad-20">
                                 <div class="tp-contact-form-field">
                                     <button type="submit" class="theme-btn2 w-100"><i class="flaticon-enter"></i> Kirim
                                         Pesan</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div> -->
        </div>
    </section>
    <!-- contact area end here -->
</main>