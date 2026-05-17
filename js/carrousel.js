const arrowLeft = document.getElementById("arrow-left");
const arrowRight = document.getElementById("arrow-right");
const track = document.querySelector(".carrousel-track");
const slides = document.querySelectorAll(".carrousel-item");
let currentSlide = 0;

function nextImage() {
    currentSlide = (currentSlide + 1) % slides.length;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

function previousImage() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

arrowLeft.addEventListener("click", previousImage);
arrowRight.addEventListener("click", nextImage);
