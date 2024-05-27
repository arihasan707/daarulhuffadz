<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator') ?>">
                <i class="ri ri-money-dollar-box-fill"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/akses_login') ?>">
                <i class="ri ri-money-dollar-box-fill"></i>
                <span>Akses Login</span>
            </a>
        </li><!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#data_pondok" data-bs-toggle="collapse" href="#">
                <i class="ri-user-fill"></i><span>Data Pesantren</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="data_pondok" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/program_unggulan') ?>">
                        <i class="bi bi-circle"></i><span>Program Unggulan</span>
                    </a>
                </li>
            </ul>
            <ul id="data_pondok" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/pengurus') ?>">
                        <i class="bi bi-circle"></i><span>Susunan Pengurus</span>
                    </a>
                </li>
            </ul>
            <ul id="data_pondok" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/cabang') ?>">
                        <i class="bi bi-circle"></i><span>Daftar Cabang</span>
                    </a>
                </li>
            </ul>
            <ul id="data_pondok" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/kontak') ?>">
                        <i class="bi bi-circle"></i><span>Daftar Kontak</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#promosi" data-bs-toggle="collapse" href="#">
                <i class="ri-user-fill"></i><span>Promosi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="promosi" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/popup') ?>">
                        <i class="bi bi-circle"></i><span>Popup Iklan</span>
                    </a>
                </li>
            </ul>
            <ul id="promosi" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/diskon') ?>">
                        <i class="bi bi-circle"></i><span>Diskon Pendaftaran</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#galeri" data-bs-toggle="collapse" href="#">
                <i class="ri-user-fill"></i><span>Galeri</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="galeri" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/kategori_foto') ?>">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>
            </ul>
            <ul id="galeri" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="" href="<?= base_url('administrator/album_foto') ?>">
                        <i class="bi bi-circle"></i><span>Album Foto</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('administrator/keluar') ?>">
                <i class="ri-arrow-left-circle-fill"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->