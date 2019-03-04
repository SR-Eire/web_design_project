var i, gallery, speed;

i = 0;
gallery = "Here you can check out some of my previous work!!"; /* The text */
speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < gallery.length) {
    document.getElementById("gallery").innerHTML += gallery.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
