function eliminarExperiencia(id,_Token){
	
				$.ajax({
				url: "http://localhost/portfolioWEBV1/AdminPanel/Experiencia/" + id,
				method:'POST',
				data: {
					_token: _Token,_method:"DELETE"},
				success: function (response) {

					window.location.href = "http://localhost/portfolioWEBV1/AdminPanel/Experiencia";
				}

			});
	
}	




$("#experience-table").DataTable({
	searching: false,
	columnDefs: [{
			orderable: false,
			targets: 5
		}

	],
	"bInfo": false

});




$(".trash_exp").click(function () {
		var id_exp = $(this).val();
		var _Token = $('[name=_token]').val();

		
         $("#confirm").click(function(){
	
             eliminarExperiencia(id_exp,_Token);
			
	

		});

	});
	
	
	