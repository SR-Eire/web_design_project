//Reference for some of the code on this page
/*"""  Title: Traversy Media source code
              Author: Traversy, Brad
              Date: March 2019
              Availability: https://www.youtube.com/watch?v=POX3dT-pB4E """ */

var i, shop, speed;

i = 0;
shop = "And Welcome To My Photography Shop"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < shop.length) {
    document.getElementById("shop").innerHTML += shop.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
