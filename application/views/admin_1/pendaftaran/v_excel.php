<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Report Data Pendaftaran Santri DHI.xls");
?>
<h2>Report Data Pendaftaran Santri DHI</h2>
 <table border="9">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Pilihan Program</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. WhatsApp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pndaftaran->result() as $p) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p->nama ?></td>
                            <td><?= $p->prog ?></td>
                            <td><?= $p->tgl_lahir ?></td>
                            <td><?= $p->jkl ?></td>
                            <td><?= $p->alamat ?></td>
                            <td><?= $p->wa ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>