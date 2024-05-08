<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>Daarul Huffadz Indonesia</span></strong>
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <span style="color:blue;"> AR</span>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script type="text/javascript" src="<?= base_url()?>assets/backend/js/jquery.js"></script>
<!-- Vendor JS Files -->
<script type="text/javascript" src="<?= base_url(); ?>assets/backend/vendor/DataTables/datatables.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/chart.js/chart.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/quill/quill.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/vendor/php-email-form/validate.js"></script>

<script src="<?= base_url(); ?>assets/backend/vendor/ckeditor/ckeditor.js"></script>

<!-- sweetalert -->
<script src="<?= base_url() ?>assets/frontend/vendor/sweet/sweetalert2.all.min.js"></script>
<script src="<?= base_url(); ?>assets/backend/js/alert.js"></script>
<script src="<?= base_url(); ?>assets/backend/js/hapus.js"></script>

<!-- Template Main JS File -->
<script>
$(document).ready(function() {
    $('#inbox').DataTable();
});

$('#inbox').DataTable({
    responsive: true
});
</script>

<script src="<?= base_url(); ?>assets/backend/js/main.js"></script>

</body>

</html>