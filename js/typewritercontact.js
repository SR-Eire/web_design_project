var i, contact, speed;

i = 0;
contact =
  "There is no question too big or small, please contact me below!!"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < contact.length) {
    document.getElementById("contact").innerHTML += contact.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
