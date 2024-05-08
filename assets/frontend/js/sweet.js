$(document).ready(function () {
	const flashdata = $(".flash-data").data("flashdata");
	const flashkontak = $(".flash-kontak").data("flashdata");
	if (flashdata) {
		Swal.fire(
			"Pendaftaran Berhasil",
			"Admin Kami Akan Segera Menghubungi Kamu",
			"success"
		);
	}

	if (flashkontak) {
		Swal.fire("Berhasil Terkirim", "Terima Kasih Atas Masukannya", "success");
	}
});
