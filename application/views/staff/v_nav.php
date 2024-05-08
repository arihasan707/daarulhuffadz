<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('staff_karyawan') ?>">
                <i class=" bi bi-grid "></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('staff_karyawan/data_pmb_online/') ?>">
                <i class="bi bi-card-list"></i>
                <span>Data PMB Online</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#promosi" data-bs-toggle="collapse" href="#">
                <i class="ri-user-fill"></i><span>Promosi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="promosi" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('staff_karyawan/flayer') ?>">
                        <i class="bi bi-circle"></i><span>Flayer & Popup</span>
                    </a>
                </li>
            </ul>
            <ul id="promosi" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('staff_karyawan/diskon_pendaftaran') ?>">
                        <i class="bi bi-circle"></i><span>Diskon Pendaftaran</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('staff_karyawan/keluar') ?>">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->