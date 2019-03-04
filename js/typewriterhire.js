var i, hire, speed;

i = 0;
hire = "Here is a breakdown of what I charge €€"; /* The text */
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
