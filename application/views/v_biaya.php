<main class="bg-gray-light">
    <!-- breadcrumb area start -->
    <section class="breadcrumb bg">
        <div class="row">
            <div class="col">
                <h3>Biaya Tahfidz</h3>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <section class="pendaftaran overflow-hidden pt-30 pb-30">
        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="container">
                <div class="row">
                    <form id="biaya" action="<?= base_url('biaya/download/') ?>" method="POST">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 col-sm-10">
                                <div class="card-title">
                                    <h5 class="text-center">Untuk informasi biaya silahkan bisa mengisi formulir dibawah
                                        ini
                                        :
                                    </h5>
                                </div>
                                <div class="card">
                                    <div class="mb-2 row d-flex justify-content-center">
                                        <label class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama" placeholder="Masukan nama"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-2 row d-flex justify-content-center">
                                        <label class="col-sm-4 col-form-label">Kota Tinggal</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="kota" placeholder="Masukan kota tinggal"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-2 row d-flex justify-content-center">
                                        <label class="col-sm-4 col-form-label">Nomor Whatsapp</label>
                                        <div class="col-sm-6">
                                            <input type="number" name="wa" placeholder="Masukan nomor whatsapp"
                                                class="form-control" required>
                                            <p>
                                                Format 08123....
                                                Silakan masukkan nomor Whatsapp aktif.</p>
                                        </div>
                                    </div>
                                    <div class="mb-4 row d-flex justify-content-center">
                                        <label class="col-sm-4 col-form-label">Tujuan
                                            Pendaftaran</label>
                                        <div class="col-sm-6">
                                            <select name="tujuan" class="form-select" required>
                                                <option value="">-- Silahkan Pilih Tujuan --</option>
                                                <option value="1">Karantina 1 Tahun</option>
                                                <option value="2">Karantina 6 Bulan</option>
                                                <option value="3">Program Online</option>
                                                <option value="4">SMP & SMA Tahfidz Boarding</option>
                                                <option value="5">DH Institute S1 Double Gelar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-costum w-25">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

</main>