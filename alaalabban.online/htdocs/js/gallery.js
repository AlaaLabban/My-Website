
const images = ['/images/image1.jpg', '/images/image2.jpg', '/images/image3.jpg', '/images/image4.jpg', '/images/image5.jpg', '/images/image6.jpg', '/images/image7.jpg', '/images/image8.jpg', '/images/image9.jpg', '/images/image10.jpg'];
let currentIndex = 0;

function showImage(src) {
  document.getElementById('current-image').src = src;
  currentIndex = images.indexOf(src);
}

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage(images[currentIndex]);
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(images[currentIndex]);
}
