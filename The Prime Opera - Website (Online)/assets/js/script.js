'use strict';
const navOpenBtn = document.querySelector("[data-menu-open-btn]");
const navCloseBtn = document.querySelector("[data-menu-close-btn]");
const navbar = document.querySelector("[data-navbar]");
const overlay = document.querySelector("[data-overlay]");
const navElemArr = [navOpenBtn, navCloseBtn, overlay];
for (let i = 0; i < navElemArr.length; i++) {
	navElemArr[i].addEventListener("click", function () {
		navbar.classList.toggle("active");
		overlay.classList.toggle("active");
		document.body.classList.toggle("active");
	});
}

const header = document.querySelector("[data-header]");
window.addEventListener("scroll", function () {
	window.scrollY >= 10 ? header.classList.add("active") : header.classList.remove("active");
});

const goTopBtn = document.querySelector("[data-go-top]");
window.addEventListener("scroll", function () {
	window.scrollY >= 500 ? goTopBtn.classList.add("active") : goTopBtn.classList.remove("active");
});

let slideIndex = 0;
showSlides();
function showSlides() {
	let i;
	let slides = document.getElementsByClassName("mySlides");
	let dots = document.getElementsByClassName("dot");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideIndex++;
	if (slideIndex > slides.length) { slideIndex = 1 }
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex - 1].style.display = "block";
	dots[slideIndex - 1].className += " active";
	setTimeout(showSlides, 5000);
}