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
