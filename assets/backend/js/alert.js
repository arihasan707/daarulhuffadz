$(document).ready(function() {
   const k = $('#konfrim').data('id');
   if (k) {
    Swal.fire(
        "Konfirmasi Berhasil",
        "Data telah di perbaharui",
        "success"
    );
}

   const f = $('#ditambah').data('id');
   if (f) {
    Swal.fire(
        "Berhasil",
        "Flayer telah ditambahkan",
        "success"
    );
    
}

});