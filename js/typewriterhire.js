//Reference for some of the code on this page
/*"""  Title: Traversy Media source code
              Author: Traversy, Brad
              Date: March 2019
              Availability: https://www.youtube.com/watch?v=POX3dT-pB4E """ */

var i, hire, speed;

i = 0;
hire = "Rick Sanchez Photography For Hire"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < hire.length) {
    document.getElementById("hire").innerHTML += hire.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

contact =
  "There is no question too big or small, please contact me below"; /* The text */