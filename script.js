let currentImage = 0;
const images = document.querySelectorAll('.about-image-slider img');

function slideImages() {
  images[currentImage].style.opacity = '0';
  currentImage = (currentImage + 1) % images.length;
  images[currentImage].style.opacity = '1';
}

setInterval(slideImages, 3000);