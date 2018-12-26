$("#province").change(function () {
	$("#city").html("<option></option>");
	$.ajax({

		method: "GET",
		dataType: "json",
		url: "/git_repositorios/portfolioWEBV1/getCities/" + $(this).val(),
		success: function (response) {

			for (var i in response) {
				$("#city").append("<option value='" + response[i].id + "'>" + response[i].name + "</option>");
			}
		}

	});
	$("#city").attr("readonly", false);
});