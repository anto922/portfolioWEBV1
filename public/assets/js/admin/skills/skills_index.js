function eliminarHabilidad(id,_Token){
	
	$.ajax({
	url: "http://localhost/portfolioWEBV1/AdminPanel/Habilidad/" + id,
	method:'POST',
	data: {
		_token: _Token,_method:"DELETE"},
	success: function (response) {

		window.location.href = "http://localhost/portfolioWEBV1/AdminPanel/Habilidades";
	}

});

}



$(".trash_skill").click(function () {
	var id_skill = $(this).val();
	var _Token = $('[name=_token]').val();

	
     $("#confirm").click(function(){

    	 eliminarHabilidad(id_skill,_Token);
		


	});

});


$("#skills_table").DataTable({
	searching: false,
	columnDefs: [{
			orderable: false,
			targets: 2
		}

	],
	"bInfo": false

});