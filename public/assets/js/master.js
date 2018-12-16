/// master js ///


// Add smooth scrolling on all links inside the navbar
$("#myNav a").on('click', function (event) {

	// Make sure this.hash has a value before overriding default behavior
	if (this.hash !== "") {

		// Prevent default anchor click behavior
		event.preventDefault();

		// Store hash
		var hash = this.hash;

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it
		// takes to scroll to the specified area
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 800, function () {

			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		});

	} // End if





});


// / Login Panel administrador
$(document).ready(function () {

	$("#works_table").DataTable({
		searching: false,
		"bInfo": false,
		"bLengthChange": false

	});

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





	// /scroll en cada parrafo
	AOS.init();




















});