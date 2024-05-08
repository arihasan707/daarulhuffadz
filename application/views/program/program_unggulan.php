  <main class="bg-color bg-image">
      <!-- hero area start here -->
      <section class="tp-slider-area fix pt-100">
          <div class="container">
              <div class="row">
                  <div class="img wow fadeInUp" data-wow-delay=".6s">
                      <img src="<?=base_url()?>assets/frontend/img/slider/hero4.jpg">
                  </div>
              </div>
          </div>
      </section>
      <!-- hero area end here -->
      <section class="tp-service-area-three pt-4 ">
          <div class="container">
              <div class="row">
                  <?php foreach ($prog->result() as $p) { ?>
                  <div class="col-lg-6">
                      <div class="tp-service-three mb-30 wow fadeInUp" data-wow-delay=".6s">
                          <div class="tp-service-three-img">
                              <img src="<?= base_url() ?>assets/backend/upload/<?= $p->gbr; ?>" class="img-fluid">
                          </div>
                          <div class="tp-service-three-text fix">
                              <h4 class="tp-service-three-title mb-20"><?= $p->nama_prog ?></h4>
                              <p class="mb-30"><?= $p->sub ?></p>

                          </div>
                      </div>
                      <div class="col-lg-12">
                          <div class="wow fadeInUp" data-wow-delay=".6s">
                              <div class="tp-service-three-text-btn">
                                  <a href="<?=base_url('pmb_online/detail_program/'.$p->slug)?>" class="red-btn">Detail
                                      Program</a>
                                  <?php
                                  switch($p->slug){
                                    case 'Karantina-Quran-1-Tahun':
                                      echo  "<a href=".base_url('pmb_online/download_karantina_1/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                    case 'DH-Institute-S1-Double-Gelar':
                                      echo  "<a href=".base_url('pmb_online/download_institute/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                    case 'Program-Online':
                                      echo  "<a href=".base_url('pmb_online/download_po/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                    case 'Dauroh-Quran-30-Hari':
                                      echo  "<a href=".base_url('pmb_online/download_dauroh/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                    case 'SMP-SMA-Tahfidz-Boarding':
                                      echo  "<a href=".base_url('pmb_online/download_smp_sma/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                        default:
                                        echo  "<a href=".base_url('pmb_online/download_karantina_6/')." class='kuning-btn'>Brosur</a>";
                                        break;
                                  }
                                  ?>
                                  <a href="<?= base_url('pmb_online/pendaftaran/' . $p->slug) ?> "
                                      class="blue-btn">Daftar</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php }; ?>
              </div>
          </div>
      </section>