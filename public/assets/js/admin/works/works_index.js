function eliminarTrabajo(id,_Token){
	
	$.ajax({
	url: "http://localhost/portfolioWEBV1/AdminPanel/Trabajos/" + id,
	method:'POST',
	data: {
		_token: _Token,_method:"DELETE"},
	success: function (response) {

		window.location.href = "http://localhost/portfolioWEBV1/AdminPanel/Trabajos";
	}

});

}	
	

$(".trash_work").click(function () {
		var id_work = $(this).val();
		var _Token = $('[name=_token]').val();

		
         $("#confirm").click(function(){
	
        	 eliminarTrabajo(id_work,_Token);
			
	

		});

	});
	
	

$("#works_table").DataTable({
	searching: false,
	columnDefs: [{
			orderable: false,
			targets: 2
		}

	],
	"bInfo": false

});