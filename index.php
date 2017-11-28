<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.png" alt="Logo"></a>
			
			
			  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link active" href="http://www.alphapay.ca">Home <span class="sr-only">(current)</span></a>
			     	<a class="nav-item nav-link" href="index.php">Demo</a>
			    
			    </div>
			  </div>
			</nav>	
		</header>
		<div class="sample">
			<h1>ONLINE SAMPLE</h1>
			<div class="row">
				<div class="col-md-6 mb-5">
					<div class="rowtitle">
						<i class="icon ion-ios-cart-outline"><span>Online Shopping Mall Demo</span></i>
					</div>
					<div class="rowp">
						<p>Using Wechat Pay for Online Shopping, costumer can easily finish payment by scanning QR code.</p>
					</div>
					<div class="showimg">
						<img src="img/w2.jpg">
					</div>
					<br>
					<a id="leavebt" class="btn" href="/phpcartdemo">Learn More</a>
				</div>

				<div class="col-md-6 mb-5">
					<div class="rowtitle">
						<i class="ion-ios-browsers-outline"><span>PHP Online Demo</span></i>
					</div>
					<div class="rowp">
						<p>AlphaPay provide different payment methods for costomers and vendors.</p>
					</div>
					<div class="showimg">
						<img src="img/w1.jpg">
					</div>
					<br>
					<a id="leavebt" class="btn" href="/phpdemo/common">Learn More</a>
				</div>

			</div>

		</div>

		<div class="message">
         <form class="container" id="leavemess" role="form" action="mail.php"  method="POST">
          <h3>Leave a Message</h3>
            <div class="row">

              <div class="col-md-6 mb-5">
                <label for="m01">Company Name</label>
                <input type="text" class="form-control" id="message1" name="cname" placeholder="Company Name" required>
              </div>
              <div class="col-md-6 mb-5">
                <label for="m02">Company Website</label>
                <input type="text" class="form-control" id="message2" name="cwebsite" placeholder="Company Website" required>
              </div>
            </div>
            <div class="row">
               <div class="col-md-3 mb-5">
                <label for="m03">Your Name</label>
                <input type="text" class="form-control" id="message3" name="name" placeholder="Your Name" required>
             
              </div>
               <div class="col-md-3 mb-5">
                <label for="m04">Your Title</label>
                <input type="text" class="form-control" id="message4" name="title" placeholder="Your Title" required>
              
              </div>
              <div class="col-md-3 mb-5">
                <label for="m05">Phone</label>
                <input type="text" class="form-control" id="message5" name="phone" placeholder="Phone" required>
               
              </div>
              <div class="col-md-3 mb-5">
                <label for="m06">E-mail</label>
                <input type="text" class="form-control" id="message6" name="email" placeholder="E-mail" required>
               
              </div>
            </div>
            <button id="leavebt" class="btn" type="submit">Submit</button>
          </form>
        </div>
        <?php
        	if(isset($_POST['leavemessage'])){
        	$cname=$_POST['cname'];
        	$cwebsite=$_POST['cwebsite'];
        	$name=$_POST['name'];
        	echo $cname,$cwebsite,$name;
        	}
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