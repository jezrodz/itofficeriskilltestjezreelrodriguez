<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
    <div class="content">
    </div>
    <footer>
			<form method="POST" action="login.php">
            <button type="submit"><b>Access FMS Portal</b></button>
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
</body>
</html>

