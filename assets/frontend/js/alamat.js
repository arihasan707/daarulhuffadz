$(document).ready(function () {
	kabAjax();
	kecAjax();
});

function kabAjax() {
	$("#prov").change(function () {
		$("#kab").removeAttr("disabled");
		var id = $(this).val();
		$.ajax({
			type: "POST",
			url: "http://localhost/daarul/pmb_online/get_kabupaten",
			data: {
				id: id,
			},
			dataType: "JSON",
			success: function (response) {
				$("#kab").html(response);
			},
		});
	});
}

function kecAjax() {
	$("#kab").change(function () {
		$("#kec").removeAttr("disabled");
		var id = $(this).val();
		// console.log(id_kec)
		$.ajax({
			type: "POST",
			url: "http://localhost/daarul/pmb_online/get_kecamatan",
			data: {
				id: id,
			},
			dataType: "JSON",
			success: function (response) {
				$("#kec").html(response);
			},
		});
	});
}



