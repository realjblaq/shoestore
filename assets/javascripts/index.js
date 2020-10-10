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

	console.log(scrollpos);
});

// Activate smooth scrolling
// smooth scroll
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
	anchor.addEventListener("click", function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior: "smooth",
		});
	});
});
