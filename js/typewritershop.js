var i, shop, speed;

i = 0;
shop = "Welcome to the shop section of my site!!"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < shop.length) {
    document.getElementById("shop").innerHTML += shop.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
