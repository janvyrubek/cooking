const img = document.getElementById('moving-img');
let xPos = 0, yPos = 0;
let xSpeed = 4, ySpeed = 4;

function animate() {
  const container = img.parentElement;
  const containerWidth = container.offsetWidth;
  const containerHeight = container.offsetHeight;
  
  xPos += xSpeed;
  yPos += ySpeed;
  
  // Bounce off the edges
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

animate();