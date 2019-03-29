<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>My Water station</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			color: teal;
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="container">
					<nav class="navbar navbar-expand-lg navbar-success bg-gray">
						<img src="img/water.png" width="120" height="100" alt="img/water.png"/>&nbsp;&nbsp;&nbsp;
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="index.php"><h3>My Water purified refilling station </h3><span class="sr-only">(current)</span></a>
									</li>
								</ul>
								<form class="form-inline my-2 my-lg-0">		
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												profile
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="logout.php">logout</a>
												<a class="dropdown-item" href="about.php">About  us</a>
										
											</div>
										</li>			
									</ul>
								</form>
							</div>
					</nav>
		</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($db, "SELECT * FROM login");
	?>
	
	<?php	
	}
	?>
	
		<main class="bd-masthead" id="content" role="main">
    			 		<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center"><br>
          	<hr class="my-4">
            <h2 class="section-heading">At Your Service !!!</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">Sturdy Products</h3>
              <img src="img/carps.jpg" class="rounded float-left" alt="employee" width="100%" height="120%"
              <br><br><br><br><br><br><br><br><a class="btn btn-sm btn-outline-info" href="view.php">Products</a>
              <p class="text-muted mb-0"><strong>For variety bottle sizes we offer 1.5 litter, 1 litter and 500 ml.</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <h3 class="mb-3">Employee</h3>
              <img src="img/ca.jpg" class="rounded float-left" alt="employee" width="100%" height="120%"
              <br><br><br><br><br><br><br><br><a class="btn btn-sm btn-outline-info" href="viewemployee.php">Employee</a>
              <p class="text-muted mb-0"><strong>There's a clear duty on employers to provide drinking water at work</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <h3 class="mb-3">Customer</h3>
              <img src="img/customer.jpeg" class="rounded float-left" alt="employee" width="85%" height="120%"
              <br><br><br><br><br><br><br><br><a class="btn btn-sm btn-outline-info" href="customer.php">Customer</a>

              <p class="text-muted mb-0"><strong>Provide customer a good qualification that benefits for</strong></strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <h3 class="mb-3">Sales</h3>
              <img src="img/sales.jpg" class="rounded float-left" alt="employee" width="75%" height="120%"
              <br><br><br><br><br><br><br><br><a class="btn btn-sm btn-outline-info" href="water sales.php">water Sales</a>

              <p class="text-muted mb-0"><strong> transaction between two parties where the buyer receives goods</strong></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    			 		
							
    			</div>
    			<div class="footer text-center"><br>
						<img src="img/FB.png" width="45" height="45" alt="icon/FB.png"/>
						<img src="img/GIT.png" width="35" height="35" alt="icon/GIT.png"/>
						<img src="img/GMAIL.png" width="35" height="35" alt="icon/GMAIL.png"/>
						<img src="img/T.png" width="35" height="35" alt="icon/T.png"/>
						
		
					</div>
	
</body>
</html>
