const sliderImg = document.querySelector('.slider-img');
const images = ['1.jpg', '2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg'];
let currentIndex = 0;

function previousImage() {
  if (currentIndex <= 0) {
    currentIndex = images.length - 1;
  } else {
    currentIndex--;
  }
  setSliderImage();
}

function nextImage() {
  if (currentIndex >= images.length - 1) {
    currentIndex = 0;
  } else {
    currentIndex++;
  }
  setSliderImage();
}

function setSliderImage() {
  sliderImg.setAttribute('src', `img/${images[currentIndex]}`);
}
