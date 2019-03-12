var i, contact, speed;

i = 0;
contact =
  "Contact Me Now With Any Query To Be Automatically Entered"; /* The text */
speed = 75; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < contact.length) {
    document.getElementById("giveaway").innerHTML += contact.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
