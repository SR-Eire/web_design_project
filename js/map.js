//Reference for some of the code on this page
/*"""  Title: Google source code
              Author: Google
              Date: April 2019
              Availability: https://developers.google.com/maps/documentation/javascript/adding-a-google-map """ */

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {
    lat: -25.344,
    lng: 131.036
  };
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru
  });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}