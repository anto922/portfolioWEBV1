/// master js ///

// / Login Panel administrador
$(document).ready(function () {

	// Accion Login boton
	$("#loginButton").click(function () {

		var Email = $("#email").val();
		var Password = $("#password").val();
		var _Token = $('[name=_token]').val();
		var msg = "";

		$.ajax({

			method: "POST",
			url: "admin/login",
			data: {
				email: Email,
				password: Password,
				_token: _Token
			},
			success: function (response) {

				window.location.href = "http://localhost/git_repositorios/portfolioWEBV1/AdminPanel/Dashboard";

			},
			error: function (data) {

				if (typeof data.responseJSON.errors.email != "undefined") {
					msg += "<p>" + data.responseJSON.errors.email[0] + "</p>";
				}

				if (typeof data.responseJSON.errors.password != "undefined") {
					msg += "<p>" + data.responseJSON.errors.password[0] + "</p>";
				}


				$(".errorLogin").css("display", "block");

				$(".errorLogin").html("<div class='alert alert-danger alert-dismissible fade show msgErrorLogin' role='alert'>" + msg + "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");

			}
		});

	});


	// enviar correo contacto

	$("#sendEmail").click(function () {
		debugger;
		var Email = $("#emailContact").val();
		var Name = $("#name").val();
		var Subject = $("#subject").val();
		var Msg = $("#msg").val();
		var _Token = $('#mail-form [name=_token]').val();

		if (Email != "" && Name != "" && Subject != "" && Msg != "") {

			$.ajax({

				method: "POST",
				url: "sendMail",
				data: {
					email: Email,
					name: Name,
					subject: Subject,
					msg: Msg,
					_token: _Token
				},
				success: function (response) {

					if (response == "0") {
						$("#notifMail").html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
							'Correo enviado correctamente' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
							'</div>');
					} else {
						$("#notifMail").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
							'Error al enviar correo' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
							'</div>');
					}


				}

			});

		} else {
			$("#notifMail").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
				'Error : rellene los campos obligatorios' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
				'</div>');
		}
	});























});