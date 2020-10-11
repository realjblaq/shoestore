// Activate background white on nav on scroll
let scrollpos = window.scrollY;
const header = document.querySelector("nav");
const header_height = header.offsetHeight;

const add_class_on_scroll = () => header.classList.add("active");
const remove_class_on_scroll = () => header.classList.remove("active");

window.addEventListener("scroll", function () {
	scrollpos = window.scrollY;

	if (scrollpos >= header_height) {
		add_class_on_scroll();
	} else {
		remove_class_on_scroll();
	}
});

// Activate smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});

// Reveal password
$("body").on("click", ".password__button", function () {
	$(this).find("i").toggleClass("fa-eye fa-eye-slash");
	let input = $(this).parents(".input-group").find("input");
	if (input.attr("type") === "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
});

//On login submit
$("#login__form").submit(function (event) {
	event.preventDefault();
	let form = $(this).serialize();
	$("#login__button").attr("disabled", true);
	$("#login__button").find(".spinner-border").fadeIn();

	$.ajax({
		method: "post",
		data: form,
		url: "api/login.php",
		success: function (success) {
			var result = JSON.parse(success);
			if (result.status == 200) {
				$("#login__email").removeClass("is-invalid");
				$("#login__password").removeClass("is-invalid");
				// console.log(result);
				window.location.href = "./";
			} else {
				$("#login__email").addClass("is-invalid");
				$("#login__password").addClass("is-invalid");
				$("#login__button").attr("disabled", false);
				$("#login__button").find(".spinner-border").fadeOut();
			}
		},
		error: function (error) {},
	});
});

// On register submit
$("#register__form").submit(function (event) {
	event.preventDefault();
	let form = $(this).serialize();
	$("#register__button").attr("disabled", true);
	$("#register__button").find(".spinner-border").fadeIn();
	// console.log(form);

	$.ajax({
		method: "post",
		data: form,
		url: "api/register.php",
		success: function (success) {
			let result = JSON.parse(success);
			console.log(success);

			if (result.status == 200) {
				$("#register__email").removeClass("is-invalid");
				$("#register__modal").modal("hide");
				Swal.fire({
					position: "center",
					icon: "success",
					title: "<span clas='text-white'>You have been registered.</span>",
					showConfirmButton: true,
					confirmButtonText: `Continue`,
					allowOutsideClick: false,
					background: "#fff url(assets/images/bg.jpg)",
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "./";
					}
				});
			} else {
				$("#register__email").addClass("is-invalid");
				$("#register__button").attr("disabled", false);
				$("#register__button").find(".spinner-border").fadeOut();
			}
		},
		error: function (error) {},
	});
});

// on cart icon click
$(".btn-card-icon").click(function () {
	//check if user is logged in;

	$.ajax({
		url: "api/check_user_session.php",
		success: function (success) {
			let result = JSON.parse(success);
			if (result.session == true) {
			} else {
				Swal.fire({
					icon: "error",
					// title: "Oops...",
					text: "You need to be logged in to buy our sneakers.",
					footer: "<a href='#!' onclick='swal.close();' data-toggle='modal' data-target='#register__modal'>Don't have an account? Sign up here.</a>",
					showConfirmButton: true,
					confirmButtonText: `Login`,
					allowOutsideClick: false,
					background: `#fff url(assets/images/bg.jpg)
                                no-repeat`,
				}).then((result) => {
					if (result.isConfirmed) {
						$("#login__modal").modal("show");
					}
				});
			}
		},
	});
});
