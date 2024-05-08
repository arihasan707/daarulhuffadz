<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_satu') ?>">
                <i class=" bi bi-grid "></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_satu/pmb_online') ?>">
                <?php if ($validasi) {?>
                <span class="notif"></span>
                <?php } ?>
                <i class="bi bi-card-list"></i>
                <span>PMB Online</span>
            </a>
        </li>
        <!-- End Blank Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admin_satu/keluar') ?>">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Keluar</span>
            </a>
        </li><!-- End Blank Page Nav -->
    </ul>

</aside><!-- End Sidebar-->