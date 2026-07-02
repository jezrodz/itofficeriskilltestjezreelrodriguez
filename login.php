<!--header--------------------------------------------------------------------------------------------->
<?php
include("header.php");
?>
<!--navigation .current Function-------------->
<script>
  document.write('<script src="navigation.html"></' + 'script>');
</script>
<script>
  // Get the current page URL
  var currentPage = window.location.href;

  // Get all the navigation links
  var navLinks = document.querySelectorAll('nav a');

  // Loop through each navigation link
  navLinks.forEach(function(link) {
    // Check if the link's href matches the current page URL
    if (link.href === currentPage) {
      // Add a class to the matching link to highlight it
      link.classList.add('current');
    }
  });
</script>
<!--navigation .current Function End-------------->
<!--end of header--------------------------------------------------------------------------------------------->

		<style>
		  @import "bourbon";

		  .wrapper {
			margin-top: 80px;
			margin-bottom: 80px;
			margin-left: 12px;
			margin-right: 12px;
		  }

		  .background {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: -1;
			filter: blur(10px);
			/* Adjust the blur amount as needed */
			background-image: url('img/vphs2.jpg');
			/* Replace 'your-background-image.jpg' with your image path */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			/* Default value for larger screens */
		  }

		  @media only screen and (max-width: 767px) {
			.background {
			  display: none;
			  /* Hide the background on small screens */
			}
		  }

		  .form-signin {
			max-width: 380px;
			padding: 15px 35px 45px;
			margin: 0 auto;
			background-color: #fff;
			border: 1px solid rgba(0, 0, 0, .1);
			border-radius: 10px;
			/* Added border-radius */
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5);
			/* Elegant and dark box shadow */
			animation: shadowMove 5s infinite alternate;
			/* Added animation to the box shadow */
		  }

		  .form-signin-heading,
		  .checkbox {
			margin-bottom: 0px;
		  }

		  .checkbox {
			font-weight: normal;
		  }

		  .form-control {
			position: relative;
			font-size: 16px;
			height: auto;
			padding: 10px;
			@include box-sizing(border-box);
			border: 1px solid #ccc;
			/* Added border */
			border-radius: 5px;
			/* Added border-radius */
			background-color: #f9f9f9;
			/* Added background color */
			transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out, transform 0.3s ease;
			/* Added transition */
			/* Add 3D effect */
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			/* Add a subtle shadow effect */
			transform: translateY(0);
			/* Move the textbox slightly down to give a pressed effect */
		  }

		  .form-control:focus {
			border-color: #66afe9;
			/* Added focus border color */
			outline: 0;
			/* Added to remove default focus outline */
			box-shadow: 0 0 5px rgba(102, 175, 233, 0.5), 0 2px 5px rgba(0, 0, 0, 0.3);
			/* Added focus box shadow */
			/* Add focus effect */
			transform: translateY(2px);
			/* Move the textbox a bit further down on focus */
		  }

		  input[type="number"] {
			margin-top: 30px;
			border: 1px solid #ced4da;
			/* Thin border */
			border-radius: 0;
			box-shadow: none;
			/* Remove the shadow */
		  }

		  input[type="password"] {
			margin-top: 0px;
			border: 1px solid #ced4da;
			/* Thin border */
			border-radius: 0;
			box-shadow: none;
			/* Remove the shadow */
		  }

		  .btn-primary {
			margin-top: 20px;
			background-color: #16047F;
			transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
			/* Added transition */
			/* Add 3D effect */
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
			/* Add a subtle shadow effect */
			transform: translateY(0);
			/* Move the button slightly down to give a pressed effect */
		  }

		  .btn-primary:hover {
			background-color: #16047F;
			transform: translateY(-3px) scale(1.02);
			/* Move the button up by 3px on hover */
			transition: transform 0.3s ease-in-out;
			/* Add transition for smoother animation */
			box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
			/* Modify box shadow for enhanced 3D effect */
		  }

		  /* Define keyframes for the animation */
		  @keyframes shadowMove {
			0% {
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5);
			  /* Start position */
			}

			50% {
			  box-shadow: 10px 10px 20px 0 rgba(0, 0, 0, 0.5);
			  /* Middle position */
			}

			100% {
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5);
			  /* End position */
			}
		  }

		  /* Animation for the "Forgot Password" link */
		  .forgot-password {
			color: #000;
			/* Change color to match your link color */
			text-decoration: underline;
			/* Underline the text to make it look like a link */
			cursor: pointer;
			/* Change cursor to pointer when hovering over the text */
			transition: color 0.3s ease-in-out;
			/* Add transition effect for color change */
			animation: floatAnimation 3s ease infinite;
			/* Added animation */
		  }

		  .forgot-password:hover {
			color: #0056b3;
			/* Change color on hover */
			animation-play-state: paused;
			/* Pause animation on hover */
		  }

		  /* Define the keyframes for the float animation */
		  @keyframes floatAnimation {
			0% {
			  transform: translateY(0);
			}

			50% {
			  transform: translateY(-2px);
			}

			100% {
			  transform: translateY(0);
			}
		  }
		</style>

	<div class="wrapper">
	  <div class="background"></div>
	  <form class="form-signin" action="#" method="POST">
		<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
		<h2 class="elegant-heading" style="font-family: 'Cinzel', serif; font-size: 28px; text-align: center; color: navy; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome to FMS Portal</h2>

		<input type="number" class="form-control" name="id_number" id="id_number" placeholder="ID Number" required="" autofocus="" /><br>
		<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		<!-- Forgot Password text with inline redirection --><br>
		<center>
		  <p class="forgot-password" onclick="window.location.href='#'">Forgot Password?</p>
		</center>
	  </form>

	</div>
</body>
</html>

	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: #000033;
			color: #ffffff;
			padding: 10px 0;
			text-align: center;
		}

		.footer p {
			margin: 5px 0;
		}
	</style>

	  <br></br>
		  <style>
			body {
				margin: 0;
				padding: 0;
				display: flex;
				flex-direction: column;
				min-height: 100vh;
				position: relative; /* Ensure relative positioning */
			}
			
			.content {
				flex: 1;
				/* Add your styles for the main content area here */
			}
			
			footer {
				padding: 20px;
				color: #ffffff;
	background: linear-gradient(to bottom right, #000033, #000066); /* Gradient colors */
				text-align: center;
				font-family: Arial, sans-serif;
				flex-shrink: 0;
				width: 100%; /* Full width */
			}
			
			footer h5 {
				font-size: 1.8rem;
				margin-bottom: 15px;
			}
			
			footer p {
				font-size: 1.2rem;
				margin-bottom: 10px;
			}
			
			footer i.glyphicon {
				margin-right: 8px;
			}
			
			footer a {
				color: #ffffff;
				text-decoration: none;
			}
			
			footer a:hover {
				text-decoration: underline;
			}
			
			footer .footer-bottom {
				margin-top: 20px;
				font-size: 0.9rem;
				opacity: 0.7;
			}

	</style>
		<div class="content">
			<!-- Your main content goes here -->
		</div>
		<footer>
			</form><br>
			<div class="footer-content">
				<h5>Contact Information</h5>
				<p><i class="glyphicon glyphicon-map-marker"></i> Washington Street, Binatagan, Ligao City 4504</p>
				<p><i class="glyphicon glyphicon-phone"></i> (052) 485-2496 ,(052) 820-3409</p>
				<p><i class="glyphicon glyphicon-envelope"></i> ligao.city@deped.gov.ph,</p>
				<p>
					<i class="fab fa-facebook"></i>
					<span class="link" contenteditable="true" onclick="window.open('https://www.facebook.com/DepEdSDOLigaoCity/', '_blank')" style="color: #fff; text-decoration: underline; cursor: pointer;">SDO Ligao City FB Page</span>
				</p>
			</div>
			<div class="footer-bottom">
				<p>SCHOOLS DIVISION OFFICE OF LIGAO CITY &copy; 2026</p>
			</div>
		</footer>
