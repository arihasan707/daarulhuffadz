<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link dashboard collapsed" href="<?= base_url('admin_dua') ?>">
                <i class=" bi bi-grid "></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pesan" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope"></i><span>Pesan Masuk</span>
                <p class="badge bg-danger badge-number"><?php 
                        if ($inbox){
                            echo 'New';
                        }else{
                            echo '';
                        }
                        ?></p><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pesan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('admin_dua/pesan_belum_dibalas') ?>">
                        <i class="bi bi-circle"></i><span>Belum dibalas</span>
                        <p class="badge bg-danger badge-number"><?php 
                        if ($inbox){
                            echo 'New';
                        }else{
                            echo '';
                        }
                        ?></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('admin_dua/pesan_sudah_dibalas') ?>">
                        <i class="bi bi-circle"></i><span>Sudah dibalas</span>
                    </a>
                </li>
            </ul>
        </li>End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pmb" data-bs-toggle="collapse" href="#">
                <i class="bi bi-envelope"></i><span>PMB Online</span>
                <p class="badge bg-danger badge-number"></p><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pmb" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('admin_dua/pmb_online_institute') ?>">
                        <i class="bi bi-circle"></i><span>PMB DH Institute</span>
                        <p class="badge bg-danger badge-number"></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('admin_dua/pmb_online_boarding') ?>">
                        <i class="bi bi-circle"></i><span>PMB Boarding School</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_dua/keluar') ?>">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->