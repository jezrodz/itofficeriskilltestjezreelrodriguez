<?php
date_default_timezone_set('Asia/Manila');
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Affordable and Profesional web design">
      <meta name="keywords" content="web design ,affordable web design, professional web design">
      <meta name="author" content="Jezreel E. Rodriguez">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <link rel="icon" type="image/png" href="img/LIGAO.png">

      <title>DEPED LIGAO FINANCE HUB | WELCOME</title>
      <link rel="stylesheet" href="./css/style.css">
<head>
    <body >
        

	<header class="header">
		<div class="logo">
		  
		</div>
		<div class="school-info">
			<h1 style="font-family: monotype corsiva;"><b>DEPARTMENT OF EDUCATION</b></h1>
			<h1><b>DepEd SDO Ligao City Finance Management Portal</b></h1>
		</div>

		<div class="container0">
	   </div>
		
			<nav>
				<ul>
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span><b> Dashboard</b></a></li>
					<li><a href="#procurement"><span class="glyphicon glyphicon-file"></span><b> Procurement/BAC Tracking</b></a></li>
					<li><a href="#financialreports"><span class="glyphicon glyphicon-file"></span><b> Financial Reports</b></a></li>
					<li><a href="#helpdesk"><span class="glyphicon glyphicon-file"></span><b> Helpdesk</b></a></li>

				</ul>
			</nav>
			</div>
		
		<style>
			/* Set the background color of the header */
			body {
				background: #eee !important;
				zoom: 80%;
				margin: 0; /* Remove default margin */
				padding: 0; /* Remove default padding */
			}

			.header {
				display: flex;
				align-items: center;
				background-image: url("img/bg5.png");
				background-position: center;
				background-repeat: no-repeat;
				background-color: #f2f2f2;
				color: white;
				padding: 20px;
			}

			.logo {
				width: 120px; /* Reduce width */
				height: 120px; /* Reduce height */
				background-image: url("img/LIGAO.png");
				background-size: cover;
				border-radius: 10%;
				box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5); /* Adding shadow */
				transform: perspective(500px) rotateX(20deg); /* Adding 3D effect */
				margin-right: 20px; /* Add margin for spacing */
				flex-shrink: 0; /* Prevent logo from shrinking */
			}
			.school-info {
				flex-grow: 1;
				min-width: 0; /* Allow text to wrap */
			}

			h1 {
				margin: 0; /* Remove default margin */
				font-size: 30px; /* Relative font size */
				color: #404040;
				text-align: left; /* Justify to the left */
			}

			p {
				margin: 5px 0; /* Add margin */
				font-size: 1em; /* Relative font size */
			}
			@media only screen and (max-width: 1050px) {
				.logo {
					width: 80px; /* Adjust width for smaller devices */
					height: 80px; /* Adjust height for smaller devices */
				}
				
				h1 {
					font-size: 20px; /* Adjust font size proportionally */
				}
				.header {
				padding: 10px;
			}
			  .school-info h1 {
				white-space: nowrap; /* Prevent text wrapping */
				overflow: hidden; /* Hide overflowing text */
				text-overflow: ellipsis; /* Display ellipsis for overflow text */
			 }

			}

			@media only screen and (max-width: 600px) {
				.logo {
					width: 80px; /* Further adjust width for even smaller devices */
					height: 80px; /* Further adjust height for even smaller devices */
				}
				.header {
				padding: 10px;
			}
				
				h1 {
					font-size: 20px; /* Adjust font size proportionally */
				}
			}
		</style>
		</div>
	</header>
	
		<style>
		/* Common styles for both <a> and <li> */
		a {
		  color: #007bff;
		  border: 2px solid transparent;
		  border-radius: 30px;
		  padding: 12px 20px;
		  display: inline-block;
		  text-decoration: none;
		  font-weight: bold;
		  font-size: 16px;
		  text-transform: uppercase;
		  transition: all 0.3s ease;
		  box-shadow: 0 0px 2px rgba(0, 0, 0, 1);
		}

		/* Hover styles for both <a> and <li> */
		a:hover,
		a:not(.current):hover {
		  color: #fff;
		  background-color: #004080;
		  box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		  transform: translateY(-4px) scale(1.05);
		  text-decoration: none;
		  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
		}

		/* Additional style for the span inside .current */

		/* Add a subtle hover animation */
		a:hover {
		  transform: translateY(-4px) scale(1.05);
		  
		}

		/* Define the CSS for the current page link */
		.current {
		  background-color: #004080;
		  color: #fff;
		  border: 2px solid #004080;
		  border-radius: 30px;
		  padding: 12px 20px;
		  display: inline-block;
		  text-decoration: none;
		  font-weight: bold;
		  font-size: 16px;
		  text-transform: uppercase;
		  transition: all 0.3s ease;
		  box-shadow: 0 0px 0px rgba(0, 0, 0, .5);
		}

		.current:hover {
		  background-color: #004080;
		  color: #fff;
		  text-decoration: none;
		  border-color:#004080;
		  transform: translateY(-4px) scale(1.05);
		}

		/* Add a subtle gradient */
		.current {
		  background-image: linear-gradient(to bottom right,#004080, #004080);
		}

		/* Add more depth to the shadow */
		.current:hover {
		  box-shadow: 0 8px 14px rgba(0, 0, 0, 0.3);
		}

		/* Media query for smaller screens */
		@media only screen and (max-width:  1050px) {
		  a {
			padding: 8px 15px; /* Adjust padding for smaller screens */
			font-size: 13px; /* Adjust font size for smaller screens */
		  }
			.current {
				padding: 8px 15px;
				font-size: 13px; /* Adjust font size for smaller screens */
			}
		}
		/* Media query for smaller screens */
		@media only screen and (max-width:  600px) {
		  a {
			padding: 5px 10px; /* Adjust padding for smaller screens */
			font-size: 12px; /* Adjust font size for smaller screens */
		  }
		.current {
			padding: 5px 10px;
			font-size: 12px; /* Adjust font size for smaller screens */	
			}
		}
		</style>
