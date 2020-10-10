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
