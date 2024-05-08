<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator') ?>">
                <i class=" ri-computer-fill "></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/kotak_masuk') ?>">
                <i class="ri ri-mail-fill"></i>
                <span>Kotak Masuk</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="ri ri-account-pin-circle-line"></i><span>Pendaftaran Online</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('administrator/proses_validasi') ?>">
                        <i class="bi bi-circle"></i><span>Proses Validasi</span>
                    </a>
                </li>
            </ul>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Data Pendaftaran</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/program_biaya') ?>">
                <i class="ri ri-money-dollar-box-fill"></i>
                <span>Program & Biaya</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/cabang') ?>">
                <i class="ri ri-home-2-fill"></i>
                <span>Daftar Cabang</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/keluar') ?>">
                <i class="ri-arrow-left-circle-fill"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->