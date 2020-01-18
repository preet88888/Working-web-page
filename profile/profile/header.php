<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Advanced Reliable Real Estate Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="assets/js/customjs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>  
</head>
<body>
	<section>
		<?php
		if(isset($_SESSION["aid"]))
		{
		?>
			<nav class="navbar navbar-expand-md navbar-dark">
			  <a class="navbar-brand" href="#">Advanced Reliable Real Estate Portal</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item">
					<a class="nav-link" href="ManageProp.php">Manage Property</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="InterestedUser.php">Interested Users</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="Logout.php">Logout</a>
				  </li>
				</ul>
			  </div>
			</nav>
		<?php
		}
		else if(isset($_SESSION["uid"]))
		{
		?>
			<nav class="navbar navbar-expand-md navbar-dark">
			  <a class="navbar-brand" href="#">Advanced Reliable Real Estate Portal</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					<a class="nav-link" href="MyDetails.php">My Details</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="ViewProp.php">View Property</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="Logout.php">Logout</a>
				  </li>
				</ul>
			  </div>
			</nav>
		<?php
		}
		else
		{
		?>
			<nav class="navbar navbar-expand-md navbar-dark">
			  <a class="navbar-brand" href="#">Advanced Reliable Real Estate Portal</a>
			</nav>
		<?php
		}
		?>
		
	
</body>
</html>