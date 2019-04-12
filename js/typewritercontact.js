//Reference for some of the code on this page
/*"""  Title: Traversy Media source code
              Author: Traversy, Brad
              Date: March 2019
              Availability: https://www.youtube.com/watch?v=POX3dT-pB4E """ */

var i, contact, speed;

i = 0;
contact = "Please Contact Me Below With Any Queries"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < contact.length) {
    document.getElementById("contact").innerHTML += contact.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}