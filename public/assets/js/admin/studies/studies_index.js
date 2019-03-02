function eliminarEstudio(id, _Token) {

	$.ajax({
		url: "http://localhost/portfolioWEBV1/AdminPanel/Estudio/" + id,
		method: 'POST',
		data: {
			_token: _Token, _method: "DELETE"
		},
		success: function (response) {

			window.location.href = "http://localhost/portfolioWEBV1/AdminPanel/Estudios";
		}

	});

}




$(".trash_stud").click(function () {
	var id_estud = $(this).val();
	var _Token = $('[name=_token]').val();


	$("#confirm").click(function () {

		eliminarEstudio(id_estud, _Token);



	});

});



$("#studies_table").DataTable({
	searching: false,
	columnDefs: [{
		orderable: false,
		targets: 6
	}

	],
	"bInfo": false

});