<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link dashboard collapsed" href="<?= base_url('admin_tiga') ?>">
                <i class=" bi bi-grid "></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_tiga/pmb_online') ?>">
                <?php if ($validasi) {?>
                <span class="notif"></span>
                <?php } ?>
                <i class="bi bi-card-list"></i>
                <span>PMB Online</span>
            </a>
        </li>
        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_tiga/keluar') ?>">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->