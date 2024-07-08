$(document).ready(function () {
	//INSTITUTE PRODI
	$("select[name='sistem']").on("change", function () {
		const sistem = $(this, "option:selected").val();
		const prodi = $("select[name='prodi'] option");
		const prodiP = $("select[name='prodi']");
		if (sistem == "3") {
			prodi.detach();
			prodiP.append("<option value = ''>-- Pilih Jurusan --</option>");
			prodiP.append("<option value = '7'>Pendidikan Agama Islam</option>");
		} else {
			prodi.detach();
			prodiP.append("<option value = ''>-- Pilih Jurusan --</option>");
			prodiP.append("<option value = '1'>Pendidikan Agama Islam</option>");
			prodiP.append("<option value = '2'>Ilmu Al-Qur'an dan Tafsir</option>");
			prodiP.append("<option value = '3'>Pendidikan Bahasa Arab</option>");
			prodiP.append(
				"<option value = '4'>Komunikasi dan Penyiaran Islam</option>"
			);
			prodiP.append("<option value = '5'>Syariah (Akhwal Sakhsiyah)</option>");
			prodiP.append("<option value = '6'>Ekonomi Syariah</option>");
		}
	});

	//PILIHAN LAINNYA PENDIDIKAN
	$("select[name='pendidikan']").on("change", () => {
		const h = $("select[name='pendidikan'] option:selected").val();
		if (h === "L") {
			$("input[name='pendidikan_hide']").removeClass("d-none");
			$("input[name='pendidikan_hide']").attr("name", "pendidikan");
			$("select[name='pendidikan']").attr("name", "pendidikan_hide");
		} else {
			$("input[name='pendidikan']").addClass("d-none");
			$("input[name='pendidikan']").attr("name", "pendidikan_hide");
			$("select[name='pendidikan_hide']").attr("name", "pendidikan");
		}
	});

	//PILIHAN LAINNYA PEKERJAAN
	$("select[name='kerja']").on("change", () => {
		const h = $("select[name='kerja'] option:selected").val();
		if (h === "L") {
			$("input[name='kerja_hide']").removeClass("d-none");
			$("input[name='kerja_hide']").attr("name", "kerja");
			$("select[name='kerja']").attr("name", "kerja_hide");
		} else {
			$("input[name='kerja']").addClass("d-none");
			$("input[name='kerja']").attr("name", "kerja_hide");
			$("select[name='kerja_hide']").attr("name", "kerja");
		}
	});

	//PILIHAN LAINNYA JURUSAN
	$("select[name='jurusan']").on("change", function () {
		const h = $(this, "option:selected").val();
		if (h === "L") {
			$(this).attr("name", "jurusan_hide");
			$("input[name='jurusan_hide']").removeClass("d-none");
			$("input[name='jurusan_hide']").attr("name", "jurusan");
		} else {
			$("input[name='jurusan']").addClass("d-none");
			$("input[name='jurusan']").attr("name", "jurusan_hide");
			$("select[name='jurusan_hide']").attr("name", "jurusan");
		}
	});

	//PILIHAN LAINNYA AYAH
	$("select[name='hasil_ayah']").on("change", function () {
		const h = $(this, "option:selected").val();
		if (h === "L") {
			$(this).attr("name", "hasil_ayah_hide");
			$("input[name='hasil_ayah_hide']").removeClass("d-none");
			$("input[name='hasil_ayah_hide']").attr("name", "hasil_ayah");
		} else {
			$("input[name='hasil_ayah']").addClass("d-none");
			$("input[name='hasil_ayah']").attr("name", "hasil_ayah_hide");
			$("select[name='hasil_ayah_hide']").attr("name", "hasil_ayah");
		}
	});

	//PILIHAN LAINNYA IBU
	$("select[name='hasil_ibu']").on("change", function () {
		const h = $(this, "option:selected").val();
		if (h === "L") {
			$(this).attr("name", "hasil_ibu_hide");
			$("input[name='hasil_ibu_hide']").removeClass("d-none");
			$("input[name='hasil_ibu_hide']").attr("name", "hasil_ibu");
		} else {
			$("input[name='hasil_ibu']").addClass("d-none");
			$("input[name='hasil_ibu']").attr("name", "hasil_ibu_hide");
			$("select[name='hasil_ibu_hide']").attr("name", "hasil_ibu");
		}
	});

	//PILIHAN LAINNYA WALI
	$("select[name='hasil_wali']").on("change", function () {
		const h = $(this, "option:selected").val();
		if (h === "L") {
			$(this).attr("name", "hasil_wali_hide");
			$("input[name='hasil_wali_hide']").removeClass("d-none");
			$("input[name='hasil_wali_hide']").attr("name", "hasil_wali");
		} else {
			$("input[name='hasil_wali']").addClass("d-none");
			$("input[name='hasil_wali']").attr("name", "hasil_wali_hide");
			$("select[name='hasil_wali_hide']").attr("name", "hasil_wali");
		}
	});

	//PILIHAN LAINNYA TAU DARI MANA TENTANG DHI
	$("select[name='tau_drmana']").on("change", function () {
		const h = $(this, "option:selected").val();
		if (h === "L") {
			$(this).attr("name", "tau_drmana_hide");
			$("input[name='tau_drmana_hide']").removeClass("d-none");
			$("input[name='tau_drmana_hide']").attr("name", "tau_drmana");
		} else {
			$("input[name='tau_drmana']").addClass("d-none");
			$("input[name='tau_drmana']").attr("name", "tau_drmana_hide");
			$("select[name='tau_drmana_hide']").attr("name", "tau_drmana");
		}
	});

	$.validator.addMethod("fileSize", function (value, element, limit) {
		return !element.files[0] || element.files[0].size <= limit;
	});

	$("#karantina").validate({
		rules: {
			prog: "required",
			juz: "required",
			motiv: "required",
			nama: "required",
			jkl: "required",
			tmptlahir: "required",
			tgllahir: "required",
			email: { required: true, email: true },
			wa: {
				required: true,
				number: true,
			},
			namaayah: "required",
			namaibu: "required",
			anakke: "required",
			brpa: "required",
			wawali: "required",
			prov: "required",
			kab: "required",
			kec: "required",
			rt: "required",
			rw: "required",
			alamat: "required",
			kdpos: "required",
			pendidikan: "required",
			asalsklh: "required",
			foto: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			kk: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ijazah: { extension: "png|jpg|jpeg", fileSize: 2000000 },
			tes: {
				required: true,
				extension: "mp3|aac|wav",
				fileSize: 10000000,
			},
			bayar: {
				required: true,
				extension: "png|jpg|jpeg",
				fileSize: 2000000,
			},
			cek_1: "required",
			cek_2: "required",
		},
		messages: {
			prog: "<div class='validasi'>Pilihan program harus di isi !<div>",
			juz: "<div class='validasi'>Juz hafalan harus di isi !<div>",
			motiv: "<div class='validasi'>Motivasi harus di isi !<div>",
			nama: "<div class='validasi'>Nama lengkap harus di isi !<div>",
			jkl: "<div class='validasi'>Jenis kelamin harus di isi !<div>",
			tmptlahir: "<div class='validasi'>Tempat lahir harus di isi !<div>",
			tgllahir: "<div class='validasi'>Tanggal lahir harus di isi !<div>",
			email: {
				required: "<div class='validasi'>Email harus di isi !<div>",
				email: "<div class='validasi'>Format email salah !<div>",
			},
			wa: {
				required: "<div class='validasi'>No WA Aktif harus di isi !<div>",
				number: "<div class='validasi'>No WA Aktif harus berupa angka !<div>",
			},
			namaayah: "<div class='validasi'>Nama ayah/wali harus di isi !<div>",
			namaibu: "<div class='validasi'>Nama ibu/wali harus di isi !<div>",
			wawali: "<div class='validasi'>No WA Aktif wali harus di isi !<div>",
			anakke: "<div class='validasi'>Harus di isi !<div>",
			brpa: "<div class='validasi'>Harus di isi !<div>",
			prov: "<div class='validasi'>Provinsi harus di isi !<div>",
			kab: "<div class='validasi'>Kabupaten harus di isi !<div>",
			kec: "<div class='validasi'>Kecamatan harus di isi !<div>",
			rt: "<div class='validasi'>Rt harus di isi !<div>",
			rw: "<div class='validasi'>Rw harus di isi !<div>",
			alamat: "<div class='validasi'>Alamat harus di isi !<div>",
			kdpos: "<div class='validasi'>Kode pos harus di isi !<div>",
			pendidikan: "<div class='validasi'>Pendidikan harus di isi !<div>",
			asalsklh: "<div class='validasi'>Asal Sekolah harus di isi !<div>",
			foto: {
				required: "<div class='validasi'>Foto harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			kk: {
				required: "<div class='validasi'>kartu keluarga harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ijazah: {
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			tes: {
				required: "<div class='validasi'>Rekaman mengaji harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe mp3/aac/wav !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 10 Mb !</div>",
			},
			bayar: {
				required: "<div class='validasi'>Bukti pembayaran harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			cek_1: "<div class='validasi'>!<div>",
			cek_2: "<div class='validasi'>!<div>",
		},
	});

	$("form#po").validate({
		rules: {
			prog: "required",
			kelas: "required",
			juz: "required",
			nama: "required",
			jkl: "required",
			umur: "required",
			wa: {
				required: true,
				number: true,
			},
			asal: "required",
			kerja: "required",
			pendidikan: "required",
			foto: {
				required: true,
				extension: "png|jpg|jpeg",
				fileSize: 2000000,
			},
			tes: {
				required: true,
				extension: "mp3|aac|wav",
				fileSize: 10000000,
			},
			bayar: {
				required: true,
				extension: "png|jpg|jpeg",
				fileSize: 2000000,
			},
			cek_1: "required",
			cek_2: "required",
		},
		messages: {
			prog: "<div class='validasi'>Pilihan program harus di isi !<div>",
			kelas: "<div class='validasi'>Kelas program harus di pilih !<div>",
			juz: "<div class='validasi'>Juz hafalan harus di pilih !<div>",
			nama: "<div class='validasi'>Nama lengkap harus di isi !<div>",
			jkl: "<div class='validasi'>Jenis kelamin harus di pilih !<div>",
			umur: "<div class='validasi'>Umur harus di isi !<div>",
			wa: {
				required: "<div class='validasi'>No WA Aktif harus di isi !<div>",
				number: "<div class='validasi'>No WA Aktif harus berupa angka !<div>",
			},
			asal: "<div class='validasi'>Asal harus di isi !<div>",
			kerja: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			pendidikan: "<div class='validasi'>Pendidikan harus di isi !<div>",
			foto: {
				required: "<div class='validasi'>foto harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			tes: {
				required: "<div class='validasi'>Rekaman mengaji harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe mp3/aac/wav !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 10 Mb !</div>",
			},
			bayar: {
				required: "<div class='validasi'>Bukti pembayaran harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			cek_1: "<div class='validasi'>!<div>",
			cek_2: "<div class='validasi'>!<div>",
		},
	});

	$("form#institute").validate({
		rules: {
			jalur: "required",
			sistem: "required",
			prodi: "required",
			nama: "required",
			nik: "required",
			tmpt_lahir: "required",
			tgl_lahir: "required",
			jkl: "required",
			warga: "required",
			email: { required: true, email: true },
			wa: {
				required: true,
				number: true,
			},
			sipil: "required",
			kerja: "required",
			rwyt: "required",
			prov: "required",
			kab: "required",
			kec: "required",
			rt: "required",
			rw: "required",
			alamat: "required",
			kd_pos: "required",
			pendidikan: "required",
			jurusan: "required",
			asal_sklh: "required",
			nisn: "required",
			thn_lulus: "required",
			// ayah
			nama_ayah: "required",
			nik_ayah: "required",
			pekerjaan_ayah: "required",
			hasil_ayah: "required",
			wa_ayah: "required",
			// ibu
			nama_ibu: "required",
			nik_ibu: "required",
			pekerjaan_ibu: "required",
			hasil_ibu: "required",
			wa_ibu: "required",
			tau_drmana: "required",
			foto: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ktp: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ijazah: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			kk: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			bayar: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			cek_1: "required",
			cek_2: "required",
		},
		messages: {
			jalur: "<div class='validasi'>Jalur masuk harus di isi !<div>",
			sistem: "<div class='validasi'>Sistem perkuliahan harus di isi !<div>",
			prodi: "<div class='validasi'>Jurusan harus di isi !<div>",
			nama: "<div class='validasi'>Nama lengkap harus di isi !<div>",
			nik: "<div class='validasi'>NIK/KTP harus di isi !<div>",
			tmpt_lahir: "<div class='validasi'>Tempat lahir harus di isi !<div>",
			tgl_lahir: "<div class='validasi'>Tanggal lahir harus di isi !<div>",
			jkl: "<div class='validasi'>Jenis kelamin harus di isi !<div>",
			warga: "<div class='validasi'>Kewarganegaraan harus di isi !<div>",
			email: {
				required: "<div class='validasi'>Email harus di isi !<div>",
				email: "<div class='validasi'>Format email salah !<div>",
			},
			wa: {
				required: "<div class='validasi'>No WA Aktif harus di isi !<div>",
				number: "<div class='validasi'>No WA Aktif harus berupa angka !<div>",
			},
			sipil: "<div class='validasi'>Status sipil harus di isi !<div>",
			kerja: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			rwyt: "<div class='validasi'>Riwayat penyakit harus di isi !<div>",
			prov: "<div class='validasi'>Provinsi harus di isi !<div>",
			kab: "<div class='validasi'>Kabupaten harus di isi !<div>",
			kec: "<div class='validasi'>Kecamatan harus di isi !<div>",
			rt: "<div class='validasi'>Rt harus di isi !<div>",
			rw: "<div class='validasi'>Rw harus di isi !<div>",
			alamat: "<div class='validasi'>Alamat harus di isi !<div>",
			kd_pos: "<div class='validasi'>Kode pos harus di isi !<div>",
			pendidikan: "<div class='validasi'>Pendidikan harus di isi !<div>",
			jurusan: "<div class='validasi'>Jurusan harus di isi !<div>",
			asal_sklh: "<div class='validasi'>Asal Sekolah harus di isi !<div>",
			nisn: "<div class='validasi'>NISN harus di isi !<div>",
			thn_lulus: "<div class='validasi'>Tahun lulus harus di isi !<div>",
			// ayah
			nama_ayah: "<div class='validasi'>Nama ayah harus di isi !<div>",
			nik_ayah: "<div class='validasi'>NIK/KTP harus di isi !<div>",
			pekerjaan_ayah: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			hasil_ayah:
				"<div class='validasi'>Penghasilan perbulan harus di isi !<div>",
			wa_ayah: "<div class='validasi'>No WA ayah harus di isi !<div>",
			// ibu
			nama_ibu: "<div class='validasi'>Nama ibu harus di isi !<div>",
			nik_ibu: "<div class='validasi'>NIK/KTP harus di isi !<div>",
			pekerjaan_ibu: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			hasil_ibu:
				"<div class='validasi'>Penghasilan perbulan harus di isi !<div>",
			wa_ibu: "<div class='validasi'>No WA ibu harus di isi !<div>",
			tau_drmana: "<div class='validasi'>Data ini harus di isi !<div>",
			foto: {
				required: "<div class='validasi'>Foto formal harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ktp: {
				required: "<div class='validasi'>KTP harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ijazah: {
				required: "<div class='validasi'>Ijazah harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			kk: {
				required: "<div class='validasi'>Kartu keluarga harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			bayar: {
				required: "<div class='validasi'>Bukti pembayaran harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			cek_1: "<div class='validasi'>!<div>",
			cek_2: "<div class='validasi'>!<div>",
		},
	});

	$("form#boarding").validate({
		rules: {
			prog: "required",
			nama: "required",
			jkl: "required",
			tmpt_lahir: "required",
			tgl_lahir: "required",
			email: { required: true, email: true },
			wa: {
				required: true,
				number: true,
			},
			anak_ke: "required",
			rwyt: "required",
			wawali: "required",
			prov: "required",
			kab: "required",
			kec: "required",
			rt: "required",
			rw: "required",
			alamat: "required",
			kd_pos: "required",
			nisn: "required",
			pendidikan: "required",
			nisn: "required",
			asal_sklh: "required",
			thn_lulus: "required",
			// ayah
			nama_ayah: "required",
			nik_ayah: "required",
			pekerjaan_ayah: "required",
			hasil_ayah: "required",
			wa_ayah: "required",
			// ibu
			nama_ibu: "required",
			nik_ibu: "required",
			pekerjaan_ibu: "required",
			hasil_ibu: "required",
			wa_ibu: "required",
			tau_drmana: "required",
			foto: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ktp_ibu: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ktp_ayah: {
				required: true,
				extension: "png|jpg|jpeg",
				fileSize: 2000000,
			},
			ijazah: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			akte: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			kk: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			raport: { extension: "png|jpg|jpeg", fileSize: 2000000 },
			mutasi: { extension: "png|jpg|jpeg", fileSize: 2000000 },
			bayar: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			cek_1: "required",
			cek_2: "required",
		},
		messages: {
			prog: "<div class='validasi'>Pilihan program harus di isi !<div>",
			nama: "<div class='validasi'>Nama lengkap harus di isi !<div>",
			jkl: "<div class='validasi'>Jenis kelamin harus di isi !<div>",
			tmpt_lahir: "<div class='validasi'>Tempat lahir harus di isi !<div>",
			tgl_lahir: "<div class='validasi'>Tanggal lahir harus di isi !<div>",
			email: {
				required: "<div class='validasi'>Email harus di isi !<div>",
				email: "<div class='validasi'>Format email salah !<div>",
			},
			wa: {
				required: "<div class='validasi'>No WA Aktif harus di isi !<div>",
				number: "<div class='validasi'>No WA Aktif harus berupa angka !<div>",
			},
			wawali: "<div class='validasi'>No WA Aktif wali harus di isi !<div>",
			anak_ke: "<div class='validasi'>Harus di isi !<div>",
			rwyt: "<div class='validasi'>Harus di isi !<div>",
			prov: "<div class='validasi'>Provinsi harus di isi !<div>",
			kab: "<div class='validasi'>Kabupaten harus di isi !<div>",
			kec: "<div class='validasi'>Kecamatan harus di isi !<div>",
			rt: "<div class='validasi'>Rt harus di isi !<div>",
			rw: "<div class='validasi'>Rw harus di isi !<div>",
			alamat: "<div class='validasi'>Alamat harus di isi !<div>",
			kd_pos: "<div class='validasi'>Kode pos harus di isi !<div>",
			pendidikan: "<div class='validasi'>Pendidikan harus di isi !<div>",
			nisn: "<div class='validasi'>NISN harus di isi !<div>",
			asal_sklh: "<div class='validasi'>Asal Sekolah harus di isi !<div>",
			thn_lulus: "<div class='validasi'>Tahun lulus harus di isi !<div>",
			// ayah
			nama_ayah: "<div class='validasi'>Nama ayah harus di isi !<div>",
			nik_ayah: "<div class='validasi'>NIK/KTP harus di isi !<div>",
			pekerjaan_ayah: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			hasil_ayah: "<div class='validasi'>Penghasilan harus di isi !<div>",
			wa_ayah: "<div class='validasi'>No WA ayah harus di isi !<div>",
			// ibu
			nama_ibu: "<div class='validasi'>Nama ibu harus di isi !<div>",
			nik_ibu: "<div class='validasi'>NIK/KTP harus di isi !<div>",
			pekerjaan_ibu: "<div class='validasi'>Pekerjaan harus di isi !<div>",
			hasil_ibu: "<div class='validasi'>Penghasilan harus di isi !<div>",
			wa_ibu: "<div class='validasi'>No WA ibu harus di isi !<div>",
			tau_drmana: "<div class='validasi'>Data ini harus di isi !<div>",
			foto: {
				required: "<div class='validasi'>Foto formal harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ktp_ibu: {
				required: "<div class='validasi'>KTP ibu harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ktp_ayah: {
				required: "<div class='validasi'>KTP ayah harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ijazah: {
				required: "<div class='validasi'>Skl/Ijazah harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			akte: {
				required: "<div class='validasi'>Akte harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			kk: {
				required: "<div class='validasi'>Kartu keluarga harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			raport: {
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			mutasi: {
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			bayar: {
				required: "<div class='validasi'>Bukti pembayaran harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			cek_1: "<div class='validasi'>!<div>",
			cek_2: "<div class='validasi'>!<div>",
		},
	});

	$("form#dauroh").validate({
		rules: {
			prog: "required",
			kelas: "required",
			waktu: "required",
			juz: "required",
			motiv: "required",
			nama: "required",
			jkl: "required",
			tmptlahir: "required",
			tgllahir: "required",
			email: { required: true, email: true },
			wa: {
				required: true,
				number: true,
			},
			namaayah: "required",
			namaibu: "required",
			wawali: "required",
			prov: "required",
			kab: "required",
			kec: "required",
			rt: "required",
			rw: "required",
			alamat: "required",
			kdpos: "required",
			pendidikan: "required",
			asalsklh: "required",
			foto: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			kk: { required: true, extension: "png|jpg|jpeg", fileSize: 2000000 },
			ijazah: { extension: "png|jpg|jpeg", fileSize: 2000000 },
			tes: {
				required: true,
				extension: "mp3|aac|wav",
				fileSize: 10000000,
			},
			bayar: {
				required: true,
				extension: "png|jpg|jpeg",
				fileSize: 2000000,
			},
			cek_1: "required",
			cek_2: "required",
		},
		messages: {
			prog: "<div class='validasi'>Pilihan program harus di isi !<div>",
			kelas: "<div class='validasi'>Kelas program harus di isi !<div>",
			waktu: "<div class='validasi'>Pilihan waktu harus di isi !<div>",
			juz: "<div class='validasi'>Juz hafalan harus di isi !<div>",
			motiv: "<div class='validasi'>Motivasi harus di isi !<div>",
			nama: "<div class='validasi'>Nama lengkap harus di isi !<div>",
			jkl: "<div class='validasi'>Jenis kelamin harus di isi !<div>",
			tmptlahir: "<div class='validasi'>Tempat lahir harus di isi !<div>",
			tgllahir: "<div class='validasi'>Tanggal lahir harus di isi !<div>",
			email: {
				required: "<div class='validasi'>Email harus di isi !<div>",
				email: "<div class='validasi'>Format email salah !<div>",
			},
			wa: {
				required: "<div class='validasi'>No WA Aktif harus di isi !<div>",
				number: "<div class='validasi'>No WA Aktif harus berupa angka !<div>",
			},
			namaayah: "<div class='validasi'>Nama ayah/wali harus di isi !<div>",
			namaibu: "<div class='validasi'>Nama ibu/wali harus di isi !<div>",
			wawali: "<div class='validasi'>No WA Aktif wali harus di isi !<div>",
			prov: "<div class='validasi'>Provinsi harus di isi !<div>",
			kab: "<div class='validasi'>Kabupaten harus di isi !<div>",
			kec: "<div class='validasi'>Kecamatan harus di isi !<div>",
			rt: "<div class='validasi'>Rt harus di isi !<div>",
			rw: "<div class='validasi'>Rw harus di isi !<div>",
			alamat: "<div class='validasi'>Alamat harus di isi !<div>",
			kdpos: "<div class='validasi'>Kode pos harus di isi !<div>",
			pendidikan: "<div class='validasi'>Pendidikan harus di isi !<div>",
			asalsklh: "<div class='validasi'>Asal Sekolah harus di isi !<div>",
			foto: {
				required: "<div class='validasi'>Foto harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			kk: {
				required: "<div class='validasi'>kartu keluarga harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			ijazah: {
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			tes: {
				required: "<div class='validasi'>Rekaman mengaji harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe mp3/aac/wav !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 10 Mb !</div>",
			},
			bayar: {
				required: "<div class='validasi'>Bukti pembayaran harus di isi !<div>",
				extension:
					"<div class='validasi'>File harus bertipe png/jpg/jpeg !</div>",
				fileSize: "<div class='validasi'>File terlalu besar. Max 2 Mb !</div>",
			},
			cek_1: "<div class='validasi'>!<div>",
			cek_2: "<div class='validasi'>!<div>",
		},
	});

	$("#prog").on("change", function () {
		var selectVal = $("#prog option:selected").val();
		if (selectVal === "1") {
			$("#jur").parent().parent().children().children().removeClass("col-md-6");
			$("#jur").parent().parent().children().children().addClass("col-md-12");
			$("#jur").addClass("d-none");
		} else if (selectVal === "2") {
			$("#jur").removeClass("d-none");
			$("#jur")
				.parent()
				.parent()
				.children()
				.children()
				.removeClass("col-md-12");
			$("#jur").parent().parent().children().children().addClass("col-md-6");
		} else {
			$("#jur").parent().parent().children().children().removeClass("col-md-6");
			$("#jur").parent().parent().children().children().addClass("col-md-12");
			$("#jur").addClass("d-none");
		}
	});
});
