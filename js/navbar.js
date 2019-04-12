//Reference for some of the code on this page
/*"""  Title: W3 Schools source code
              Author: W3 Schools
              Date: Feb 2019
              Availability: https://www.w3schools.com/howto/howto_js_topnav_responsive.asp """ */

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}