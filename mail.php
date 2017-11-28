<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt="Logo"></a>
			
			
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
			      <a class="nav-item nav-link" href="#">Features</a>
			      <a class="nav-item nav-link" href="#">Pricing</a>
			      <a class="nav-item nav-link disabled" href="#">Disabled</a>
			    </div>
			  </div>
			</nav>	
		</header>
		<div class="reply">
			Hello,<?php echo $_POST['name'];?>. We will contact you soon.<br>
		</div>
        <?php
		$to      = 'it@alphapay.ca';
		$subject = 'Leave message';
		$message = $_POST['name'];
		$headers = 'From: it@alphapay.ca';
		

		mail($to, $subject, $message, $headers);
		?> 


	    <footer class="enfooter">
	        <div class = "infooter">
	          <div class ="row">
	            <div class="col-md-3 mb-5">
	              <p> Contact us: 1-855-937-7888</p>
	             
	              
	            </div>
	             <div class="col-md-3 mb-5">
	              <p> E-mail: info@alphapay.ca</p>
	             
	              
	            </div>


	            <div class="col-md-6 mb-5">
	              <p>CopyRight © 2017-2018. All right reserved by AlphaPay.</p>
	            </div>
	          </div>
	        </div>
	    
	    </footer>
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>