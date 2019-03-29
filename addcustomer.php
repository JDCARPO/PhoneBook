<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Data for customer</title>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.3-dist/jss/bootstrap.js">
	<script src="bootstrap-4.0.0-beta.3-dist/jquery/jquery.min.js"></script>
	<script src="bootstrap-4.0.0-beta.3-dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body {
			background-image: url(img/tubig.jpg);
			color: black;
			width: 100%;
		}
	</style>
</head>

<body>
		<div class="container">
					<nav class="navbar navbar-expand-lg navbar-success bg-transparent">
						<img src="img/water.png" width="100" height="100" alt="img/call.png"/>&nbsp;&nbsp;&nbsp;
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
										<a class="nav-link" href="customer.php">Water purified water refilling station <span class="sr-only">(current)</span></a>
									</li>
								</ul>
								<form class="form-inline my-2 my-lg-0">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												profile
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="index.php">Home</a>
											</div>
										</li>
									</ul>
								</form>
							</div>
					</nav>
		     </div>
<br/>
	<div class="container">
		<nav aria-label="breadcrumb" role="navigation">
			<div class="col-sm-5">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="customer.php">View customer</a></li>
					
				</ol>
			</div>
		</nav>
	</div>
<br/>
<?php

include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$contact_number = $_POST['contact_number'];
	$address = $_POST['address'];
	$loginId = $_SESSION['id'];
	
		
	$result = mysqli_query($db, "INSERT INTO customer( firstname, surname, contact_number, address, login_id) VALUES( '$firstname', '$surname', '$contact_number', '$address', '$loginId')");
		header('location: customer.php');
	} 
?>
<div class="container">
	<form action="addcustomer.php" method="post" name="form1">
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">Firstname</label>
				<div class="col-sm-5">
					<input type="text" name="firstname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">Surname</label>
				<div class="col-sm-5">
					<input type="text" name="surname" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">Contact_number</label>
				<div class="col-sm-5">
					<input type="number" name="contact_number" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-5">
					<input type="text" name="address" class="form-control" id="colFormLabel" required>
				</div>
		</div>
		
		<div class="form-group row">
			<label for="colFormLabel" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-5">
					<button class="btn btn-outline-warningbtn btn-sm btn-outline-info" type="submit" name="Submit" value="Add">Add customer</button>
					
				</div>
		</div>
		
	</form>
</div>
</br>
	
</body>
</html>
