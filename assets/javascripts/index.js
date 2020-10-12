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

	$.ajax({
		method: "post",
		data: form,
		url: "api/register.php",
		success: function (success) {
			let result = JSON.parse(success);
			if (result.status == 200) {
				$("#register__email").removeClass("is-invalid");
				$("#register__modal").modal("hide");
				Swal.fire({
					position: "center",
					icon: "success",
					title: "<span clas='text-white'>You have been registered.</span>",
					showConfirmButton: true,
					confirmButtonText: `Continue shopping`,
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
	let shoe_id = $(this).data("shoe-id");
	let added__to__cart = $(this).parents(".shoe__card__overlay").find(".added__to__cart");
	// check if user is logged in;
	$.ajax({
		url: "api/check_user_session.php",
		success: function (success) {
			let result = JSON.parse(success);
			if (result.session == true) {
				//Now send the data to php file to save item to cart using ajax
				$.ajax({
					url: "api/save_cart_item.php",
					data: { shoe_id: shoe_id },
					method: "post",
					success: function (success) {
						let result = JSON.parse(success);
						if (result.status == 200) {
							$(".nav__cart").addClass("active");
							added__to__cart.fadeIn();
						}
					},
					error: function (error) {},
				});
			} else {
				Swal.fire({
					icon: "error",
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

// on cart item change
$(".cart__item__quantity").change(function () {
	let cart_id = $(this).data("cart-id");
	let shoe_id = $(this).parents(".cart__list__item").data("shoe-id");
	let item_quantity = $(this).val();
	let item_total = $(this).parents(".card-body").find(".cart__item__total");

	let data = {
		cart_id: cart_id,
		shoe_id: shoe_id,
		item_quantity: item_quantity,
	};

	$.ajax({
		url: "api/change_cart_qty.php",
		method: "post",
		data: data,
		success: function (success) {
			let result = JSON.parse(success);
			item_total.html(`GHS ${result.new_total}`);
			$(".cart__sub__total").html(`GHS ${result.sub_total}`);
			$(".cart__grand__total").html(`GHS ${result.grand_total}`);
		},
		error: function (error) {},
	});
});

// on checkout
$(".checkout__button").click(function () {
	let grand_total = $("#grand__total").text();

	Swal.mixin({
		input: "text",
		confirmButtonText: "Next &rarr;",
		showCancelButton: true,
		progressSteps: ["1", "2", "3"],
		allowOutsideClick: false,
	})
		.queue([
			{
				title: "Question 1",
				text: "Enter credit card number",
			},
			{
				title: "Question 2",
				text: "Enter card's CCV",
			},
			{
				title: "Question 3",
				text: "Enter full name on card",
			},
		])
		.then((result) => {
			if (result.value) {
				Swal.fire({
					title: "All done!",
					allowOutsideClick: false,
					html: `
							Proceed to pay <br><strong>${grand_total}</strong>
						`,
					confirmButtonText: "Buy",
				}).then((result) => {
					if (result) {
						Swal.fire({
							position: "center",
							icon: "success",
							title: "<span clas='text-white'>Payment successful!</span>",
							showConfirmButton: true,
							confirmButtonText: `Continue shopping`,
							allowOutsideClick: false,
							background: "#fff url(assets/images/bg.jpg)",
						}).then((result) => {
							if (result.isConfirmed) {
								$.ajax({
									url: "api/clear_user_cart.php",
									success: function (success) {
										if (success == 200) {
											window.location.href = "./";
										}
									},
								});
							}
						});
					}
				});
			}
		});
});
