const img = document.getElementById('moving-img');
var xPos = 0;
var yPos = 0;
var xSpeed = 4;
var ySpeed = 4;

function animate() {
  const container = img.parentElement;
  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;
  
  xPos += xSpeed;
  yPos += ySpeed;
  
  if (xPos + img.offsetWidth >= containerWidth || xPos <= 0) {
    xSpeed = -xSpeed;
  }
  if (yPos + img.offsetHeight >= containerHeight || yPos <= 0) {
    ySpeed = -ySpeed;
  }

  img.style.left = xPos + 'px';
  img.style.top = yPos + 'px';

  requestAnimationFrame(animate);
}

function hejbniPrstem() {
  xSpeed = 0;
  ySpeed = 0;
}

function hejbniPrstem1() {
  xSpeed = 4;
  ySpeed = 4;
}

function hejbniPrstem2() {
  xSpeed = 20;
  ySpeed = 20;
}

animate();