//Reference for some of the code on this page
/*"""  Title: Traversy Media source code
              Author: Traversy, Brad
              Date: March 2019
              Availability: https://www.youtube.com/watch?v=POX3dT-pB4E """ */

var i, gallery, speed;

i = 0;
gallery = "Please Check Out Some Of My Work Below"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < gallery.length) {
    document.getElementById("gallery").innerHTML += gallery.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}