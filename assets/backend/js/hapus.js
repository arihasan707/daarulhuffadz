$(document).ready(function () {
	const base_url = "https://daarulhuffadz.com/";

	$("a#hapus_karantina").on("click", function (e) {
		e.preventDefault();
		const id = $(this).data("id");
		console.log(id);
		Swal.fire({
			title: "Yakin ingin hapus data ini?",
			text: "Data akan terhapus permanen!",
			icon: "warning",
			showCancelButton: true,
			cancelButtonColor: "#6c757d",
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya Hapus!",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					url: base_url + "/admin_satu/hapus_pmb/" + id,
					data: { id: id },
					success: function () {
						Swal.fire({
							title: "Terhapus!",
							text: "Data telah berhasil di hapus.",
							icon: "success",
						});
						setInterval(() => {
							location.reload();
						}, 1000);
					},
				});
			}
		});
	});

	$("a#hapus_po").on("click", function (e) {
		e.preventDefault();
		const id = $(this).data("id");
		console.log(id);
		Swal.fire({
			title: "Yakin ingin hapus data ini?",
			text: "Data akan terhapus permanen!",
			icon: "warning",
			showCancelButton: true,
			cancelButtonColor: "#6c757d",
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya Hapus!",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					url: base_url + "/admin_tiga/hapus_pmb/" + id,
					data: { id: id },
					success: function () {
						Swal.fire({
							title: "Terhapus!",
							text: "Data telah berhasil di hapus.",
							icon: "success",
						});
						setInterval(() => {
							location.reload();
						}, 1000);
					},
				});
			}
		});
	});

	$("a#hapus_institute").on("click", function (e) {
		e.preventDefault();
		const id = $(this).data("id");
		console.log(id);
		Swal.fire({
			title: "Yakin ingin hapus data ini?",
			text: "Data akan terhapus permanen!",
			icon: "warning",
			showCancelButton: true,
			cancelButtonColor: "#6c757d",
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya Hapus!",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					url: base_url + "/admin_dua/hapus_pmb_institute/" + id,
					data: { id: id },
					success: function () {
						Swal.fire({
							title: "Terhapus!",
							text: "Data telah berhasil di hapus.",
							icon: "success",
						});
						setInterval(() => {
							location.reload();
						}, 1000);
					},
				});
			}
		});
	});

	$("a#hapus_boarding").on("click", function (e) {
		e.preventDefault();
		const id = $(this).data("id");
		console.log(id);
		Swal.fire({
			title: "Yakin ingin hapus data ini?",
			text: "Data akan terhapus permanen!",
			icon: "warning",
			showCancelButton: true,
			cancelButtonColor: "#6c757d",
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya Hapus!",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					url: base_url + "/admin_dua/hapus_pmb_boarding/" + id,
					data: { id: id },
					success: function () {
						Swal.fire({
							title: "Terhapus!",
							text: "Data telah berhasil di hapus.",
							icon: "success",
						});
						setInterval(() => {
							location.reload();
						}, 1000);
					},
				});
			}
		});
	});

	$("a#hapus_flayer").on("click", function (e) {
		e.preventDefault();
		const id = $(this).data("id");
		console.log(id);
		Swal.fire({
			title: "Yakin ingin hapus data ini?",
			text: "Data akan terhapus permanen!",
			icon: "warning",
			showCancelButton: true,
			cancelButtonColor: "#6c757d",
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya Hapus!",
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					type: "POST",
					url: base_url + "/staff_karyawan/hapus_flayer/" + id,
					data: { id: id },
					success: function () {
						Swal.fire({
							title: "Terhapus!",
							text: "Data telah berhasil di hapus.",
							icon: "success",
						});
						setInterval(() => {
							location.reload();
						}, 1000);
					},
				});
			}
		});
	});
});

//load data dinamis
// function load_data() {
//     $.ajax({
//         type: "GET",
//         url: "http://localhost/daarul/admin_satu/load_data/",
//         data: "data",
//         success: function (response) {
//             $('#mytable').html(response);
//         }
//     });
// }
