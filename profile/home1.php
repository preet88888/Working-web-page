<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  <script src="php/js/jquery.min.js"></script>
  <script src="php/js/popper.min.js"></script>
  <script src="php/js/bootstrap.min.js"></script>
  <script src="php/js/jquery.validate.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="php/js/customjs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script> 
</head>

<body>
<?php
include("include/header.php");
?>
	<div id="parent">
		<div id="child">
			<button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#admin">Admin Login</button>&nbsp;&nbsp;
			<button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#user">User Login</button>
		</div>
	</div>
	
	<!-- User Login-->
	<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-hidden="true">
		<form method="post" id="adminlogin">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header text-center">
				<h4 class="modal-title white-text w-100 font-weight-bold py-2">Admin Login</h4>
			  </div>
			  <div class="modal-body">
					<input type="hidden" name="type" id="type"  class="form-control" value="alogin"/>
					<label class="heading">Admin Id</label>
					<input type="text" name="aid" id="aid"  class="form-control"/>
					<br/>
					<label class="heading">Password</label>
					<input type="password" name="apass" id="apass"  class="form-control"/>
				</div>
			  <div class="modal-footer">
				<button type="submit" class="btn custombtn">Sign In</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
		</form>
	</div>
	
	<!-- Admin Login-->
	<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog cascading-modal modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-c-tabs">
					<!-- Navbar Tabs -->
					<ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
						<li class="nav-item">
							<a class="nav-link active btn" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
							Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
							Register</a>
						</li>
					</ul>
					<!-- Tab panels -->
					<div class="tab-content">
						<div class="tab-pane fade in show active" id="panel7" role="tabpanel">
							<form method="post" id="userlogin" name="form1" onSubmit="return f1()">
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<input type="hidden" name ="type" value="ulogin"/>
										<div class="modal-body mb-1">
											<h6>Kindly Enter User Login Details</h6>
											<hr/>
											<label class="heading">User Id</label>
											<input type="email" name="uid" id="uid"  class="form-control"/>
											<br/>
											<label class="heading">Password</label>
											<input type="password" name="upass" id="upass"  class="form-control"/>
										</div>
										<!--Footer-->
										<div class="modal-footer">
											<button type="submit" class="btn custombtn">Sign In</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
								
							</form>
						</div>
						<div class="tab-pane fade" id="panel8" role="tabpanel">
							<form method="post" id="userreg" name="form" onSubmit="return f()">
								<input type="hidden" name ="type" value="ureg"/>
								<div class="modal-body">
									<h6>Fill up following details</h6>
									<hr/>
									<div class="container">
										<div class="row">
											<div class="col-md-6">
												<label class="heading">Name</label>
												<input type="text" name="name" id="name"  class="form-control"/>
												<br/>
											</div>
											<div class="col-md-6">
												<label class="heading">Email Id</label>
												<input type="email" name="email" id="email"  class="form-control"/>
												<br/>
											</div>
											<div class="col-md-6">
												<label class="heading">Contact Number</label>
												<input type="number" name="number" id="number"  class="form-control" min="0"/>
												<br/>
											</div>
											<div class="col-md-6">
												<label class="heading">Age</label>
												<input type="number" name="age" id="age"  class="form-control" min="21"/>
												<br/>
											</div>
											<div class="col-md-6">
												<label class="heading">Full Address</label>
												<textarea name="address" id="address"  class="form-control"></textarea>
												<br/>
											</div>
											<div class="col-md-6">
												<label class="heading">City</label>
												<input type="text" name="city" id="city"  class="form-control"/>
												<br/>
											</div>
											
																					</div>
									</div>
								</div>
								<!--Footer-->
								<div class="modal-footer">
									<button type="submit" class="btn custombtn">Sign Up</button>
									<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>							
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
include("include/footer.php");
?>
</body>
</html>