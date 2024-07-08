<main id="main" class="main">

    <div class="pagetitle">
        <h1>PMB DH Institute</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin_dua/') ?>">Beranda</a></li>
                <li class="breadcrumb-item"><?= $head ?></li>
                <li class="breadcrumb-item active">PMB DH Institute</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div id="konfrim" data-id="<?= $this->session->flashdata('sukses') ?>"></div>
    <div class="col-12">
        <div class="card1">
            <table id="inbox" class="ui celled table" style=" width:100%; padding:0px;">
                <thead>
                    <tr style=" background-color:#0d6efd; color:white;">
                        <th>No.</th>
                        <th>Tgl/Waktu</th>
                        <th>Jurusan</th>
                        <th>Nama Lengkap</th>
                        <th>Status</th>
                        <th>Bukti Tf</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pmb as $s) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= date('d M Y', strtotime($s->created_at))  ?></td>
                            <?php
                            switch ($s->prodi) {
                                case "1":
                                    echo "<td class='bold'>Pendidikan Agama Islam</td>";
                                    break;
                                case "2":
                                    echo "<td class='bold'>Ilmu Al-Qur'an dan Tafsir</td>";
                                    break;
                                case "3":
                                    echo "<td class='bold'>Pendidikan Bahasa Arab</td>";
                                    break;
                                case "4":
                                    echo "<td class='bold'>Komunikasi dan Penyiaran Islam</td>";
                                    break;
                                case "5":
                                    echo "<td class='bold'>Syariah (Akhwal Sakhsiyah)</td>";
                                    break;
                                case "6":
                                    echo "<td class='bold'>Ekonomi Syariah</td>";
                                    break;
                                default:
                                    echo "<td class='bold'>PAI Plus - Pendidikan Agama Islam</td>";
                                    break;
                            }
                            ?>
                            <td><?= $s->nama ?></td>
                            <td>
                                <?php
                                if ($s->status == '0') {
                                    echo "<span class='badge rounded-pill bg-warning text-dark'>PROSES </span>";
                                } else {
                                    echo "<span class='badge rounded-pill bg-success'>OK </span>";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                switch ($s->bukti_tf) {
                                    case 'promo':
                                        echo "<span class='badge rounded-pill bg-danger'>Promo PMB</span>";
                                        break;
                                    default:
                                        echo "<a data-bs-toggle='modal' data-bs-target='#bukti_tf" . $s->id_pmb . "'
                                class='btn btn-secondary btn-sm'><i class='bi bi-eye-fill'>Lihat</i></a>";
                                        break;
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= base_url('admin_dua/detail_pmb_institute/') . $s->id_pmb ?>" class='btn btn-primary btn-sm'><i class='bx bx-detail'></i></a>
                                <a target="blank" href="https://api.whatsapp.com/send?phone=<?= '62' . $s->wa ?>" class="btn btn-success btn-sm"><i class="bi bi-whatsapp"></i></a>
                                <?php
                                if ($s->status == '0') {
                                    echo "<a data-bs-toggle='modal' data-bs-target='#konfirm$s->id_pmb' href='#'
                                        class='btn btn-secondary btn-sm'>Konfirm</a>";
                                } else {
                                    echo "<a id='hapus_institute' data-id='$s->id_pmb' href='#'
                                        class='btn btn-danger btn-sm'><i class='bi bi-trash3-fill'></i></a>";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


    <?php foreach ($pmb as $s) { ?>
        <!-- Konfirmasi -->
        <div class="modal fade" id="konfirm<?= $s->id_pmb; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header head">
                        <h5 class="modal-title bold" id="exampleModalLabel">Yakin ingin konfirmasi data berikut :
                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('admin_dua/konfirmasi_institute/' . $s->id_pmb) ?>">
                            <div class=" mb-2">
                                <label for="exampleFormControlInput1" class="form-label bold">Jurusan :</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php
                                                                                                                switch ($s->prodi) {
                                                                                                                    case "1":
                                                                                                                        echo "Pendidikan Agama Islam";
                                                                                                                        break;
                                                                                                                    case "2":
                                                                                                                        echo "Ilmu Al-Qur'an dan Tafsir";
                                                                                                                        break;
                                                                                                                    case "3":
                                                                                                                        echo "Pendidikan Bahasa Arab";
                                                                                                                        break;
                                                                                                                    case "4":
                                                                                                                        echo "Komunikasi dan Penyiaran Islam";
                                                                                                                        break;
                                                                                                                    case "5":
                                                                                                                        echo "Syariah (Akhwal Sakhsiyah)";
                                                                                                                        break;
                                                                                                                    case "6":
                                                                                                                        echo "Ekonomi Syariah";
                                                                                                                        break;
                                                                                                                    default:
                                                                                                                        echo "PAI Plus - Pendidikan Agama Islam";
                                                                                                                        break;
                                                                                                                }
                                                                                                                ?>" disabled>
                            </div>
                            <div class="mb-2">
                                <label for="exampleFormControlInput1" class="form-label bold">Nama Lengkap
                                    :</label>
                                <input type="text" value="<?= $s->nama ?>" class="form-control" id="exampleFormControlInput1" disabled>
                            </div>
                            <div class="form-text">
                                <b><i> Keterangan: <i></b><br>Sebelum konfirmasi, silahkan cek bukti transfer terlebih
                                dahulu
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-danger btn-sm bold">Ya Konfirmasi!</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bukti TF -->
        <div class="modal fade" id="bukti_tf<?= $s->id_pmb; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header head">
                        <h1 class="modal-title fs-5 bold" id="exampleModalLabel">Pastikan bukti transfer sudah benar</h1>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <img src="<?= base_url() ?>assets/backend/upload/boarding_institute/<?= $s->bukti_tf ?>" width="240px">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>



</main>