<?php

	$error = ""; $successMessage = "";
  // Check for POST variables
	if ($_POST){
	// Check for empty firstname
		if(!$_POST["firstname"]){
		
			$error .= "Your first name is required.<br />";
		
    }
    // Check for empty lastname
    if(!$_POST["lastname"]){
		
			$error .= "Your last name is required.<br />";
		
		}
		// Check for empty email
		if(!$_POST["email"]){
		
			$error .= "Your email is required.<br />";
		
    }
		// Check for empty subject
		if(!$_POST["subject"]){
		
			$error .= "Your message is required.<br />";
		
		}
		//Email validation built in function checking to see if email address is not valid
		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      //Add to error string
			$error .= "The email address is invalid.<br />";
		}
		//If there is an error message create the below html
		if($error != "") {
		
			$error = '<div class="alert alert-danger" role="alert"><p><strong>There was an error(s) in your form:</strong></p>' . $error . '</div>';
		
		} else {
			
				$emailTo = "x13114760@student.ncirl.ie";
				
                $firstname = $_POST["firstname"];
        
                $lastname = $_POST["lastname"];
        
				$subject = $_POST["subject"];
				
				$headers = "From ".$_POST["email"];
				
				if (mail($emailTo, $firstname, $lastname, $subject, $headers)) {
					
					$successMessage = '<div class="alert alert-success" role="alert"><p>Your message has been submitted successfully</p></div>';
					
				} else {
					
					$error = '<div class="alert alert-danger" role="alert"><p>Your message could not be sent, please try again later</p></div>';
					
				}
			
			}
	
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!--link to external stylesheet file -->
  <link rel="stylesheet" type="text/css" href="css/contact.css" />
  <!-- W3CSS stylesheet link -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <!-- FontAwesome stylesheet links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <!--Google fonts link-->
  <link href="https://fonts.googleapis.com/css?family=Great Vibes" rel="stylesheet" />
  <title>Rick Sanchez Photography | Contact</title>
</head>

<body onload="typeWriter()">
  <!-- Navbar at top of page -->
  <div class="navbar" id="myTopnav">
    <a href="index.html">Home</a>
    <a href="shop.html">Shop</a>
    <a href="hireme.html">Hire Me</a>
    <a href="gallery.html">Gallery</a>
    <a href="contact.php" class="active">Contact</a>
    <a href="giveaway.html">Giveaway</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!-- Header -->
  <header class="w3-panel w3-center w3-opacity">
  <i class="fas fa-camera fa-2x logo"> RSP</i>
    <!-- JavaScript Greeting -->
    <h1 id="greeting"></h1>
    <!-- JavaScript Typewriter Text -->
    <h1 class="w3-xlarge" id="contact"></h1>
  </header>
  <!-- Start od contact form and company information -->
  <div class="container">
    <div style="text-align:center">
      <h2>Contact Me</h2>
      <p>Any job considered so please don't hesitate to contact me</p>
    </div>
    <div class="row">
      <div class="column">
        <div id="error">
          <!-- If there is a server side validation error, place it here -->
          <? echo $error.$successMessage; ?>
        </div>
        <form id="contact-form" method="POST">
          <!-- Name gets passed through the POST variable on the server side -->
          <label for="fname"><strong>First Name</strong></label>
          <input type="text" id="fname" name="firstname" placeholder="Your name.." />
          <label for="lname"><strong>Last Name</strong></label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name.." />
          <label for="email"><strong>Email</strong></label>
          <input type="text" placeholder="exaple@mail.com" name="email" required />
          <label for="party"><strong>Party Type</strong></label>
          <select id="party" name="party">
            <option value="wedding">Wedding</option>
            <option value="birthday">Birthday</option>
            <option value="baptism">Baptism</option>
            <option value="other">Other</option>
          </select>
          <label for="website"><strong>Need Website:</strong></label>
          <div>
            <input id="website" type="radio" name="website" value="yes" />
            Yes
            <input id="website" type="radio" name="website" value="no" />
            No
            <input id="website" type="radio" name="website" value="possibly" />
            Possibly
          </div>
          <br />
          <label for="province"><strong>Where you are</strong></label>
          <select id="province" name="province">
            <option value="leinster">Leinster</option>
            <option value="munster">Munster</option>
            <option value="connacht">Connacht</option>
            <option value="ulster">Ulster</option>
          </select>
          <label for="album"><strong>Album Type:</strong></label>
          <div>
            <input id="album" type="checkbox" name="album" value="photo" />
            Photo Album
            <input id="album" type="checkbox" name="album" value="usb" />
            USB
          </div>
          <br />
          <label for="subject"><strong>Subject</strong></label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <input id="submit" type="submit" value="Submit" />
        </form>
      </div>
      <div id="map" class="column"></div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <h1>Rick Sanchez</h1>
            <p>Photographer & Web Designer</p>
            <p><strong>Phone:</strong> 0123456789</p>
            <p><strong>Email:</strong> rsphotography@mail.com</p>
            <p>
              <strong>Address:</strong> 1234 Way, Dublin City Centre, Ireland
            </p>
          </div>
          <div class="flip-card-back">
            <h1>Rick Sanchez</h1>
            <p>Photographer & Web Designer</p>
            <p><strong>Phone:</strong> 0123456789</p>
            <p><strong>Email:</strong> rsphotography@mail.com</p>
            <p>
              <strong>Address:</strong> 1234 Way, Dublin City Centre, Ireland
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer with a class of center bg-dark-->
  <footer class="center bg-dark">
    <p>
      Stephen Roberts &copy; 2019
    </p>
  </footer>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!-- Link to external JavaScript file -->
  <script src="js/navbar.js" type="text/javascript"></script>
  <!-- Link to external JavaScript file for Google map -->
  <script src="js/map.js" type="text/javascript"></script>
  <!-- Link to external JavaScript file for typing effect -->
  <script src="js/typewritercontact.js" type="text/javascript"></script>
  <!-- Link to external JavaScript file for greeting -->
  <script src="js/greeting.js" type="text/javascript"></script>
  <script type="text/javascript">
  //Stop form submitting without validation
    $("#contact-form").submit(function (e) {
      //Add to error string if fields are empty
      var error = "";

      if ($("#fname").val() == "") {
        //Append to error string
        error += "Your first name is required.<br />";

      }

      if ($("#lname").val() == "") {
        //Append to error string
        error += "Your last name is required.<br />";

      }


      if ($("#email").val() == "") {
        //Append to error string
        error += "Your email is required.<br />";

      }


      $("#error").html(error);



      if ($("#subject").val() == "") {
        //Append to error string
        error += "Your message is required.";

      }

      $("#error").html(error);


      if (error != "") {
        //Set html for error
        $("#error").html(
          '<div class="alert alert-danger" role="alert"><p><strong>There was an error(s) in your form:</strong></p>' +
          error + '</div>');


      } else {

        return true;

      }

    });
  </script>

</body>

</html>