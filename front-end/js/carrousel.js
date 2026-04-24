const arrowLeft = document.getElementById("arrow-left");
const arrowRight = document.getElementById("arrow-right");
const slides = document.querySelectorAll(".carrousel-item");
let currentSlide = 1;

function nextImage(index) {
    currentSlide = index >= slides.length;
}

function previousImage() {}
