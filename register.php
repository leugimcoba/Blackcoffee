<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
function formvalidation(){
	var name=$('#inputName').val();
	var email=$('#inputEmail').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(name=='')
	{
		alert("Please Enter your name");
		return false;
		
	}
	if(email=='')
	{
		alert("Please Enter your email");
		return false;
		
	}
	if(password=='')
	{
		alert("Please Enter your password");
		return false;
		
	}
	if(passlength<=4)
	{
		alert("Please Enter minimum 5 digit password");
		return false;
		
	}
}
</script>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				
				<div class="row" style="margin-top: 120px; box-shadow: -1px 1px 20px 5px orange;">
					<div class="cold-md-6">
						<ul>
							<center><a href="#">Register	</a></center>
							
						</ul>
						<form class="form-box px-3" method="post" action="admin/insert-user.php" onsubmit="return formvalidation();">
						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="fullname" name="fullname" placeholder="Full Name"required>
						</div>
						<div class="form-input">
							<span><i class="fas fa-user"></i></span>
							<input type="user" name="user" placeholder="Username" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-key"></i></span>
							<input type="password" name="password" placeholder="Password"required>
						</div>
						<div class="form-input">
							<span><i class="fas fa-phone"></i>	</span>
							<input type="number" name="number" placeholder="Phone Number"required>
						</div>

						

						<div class="mb-3">
							<button type="submit" class="btn btn-clock text-uppercase">
								Register
							</button>
						</div>

						<div class="text-center">
							<a href="" class="forget-link"> Follow our page on:</a>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-facebook">Facebook</a>
							</div>
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-twitter">Twitter</a>
							</div>
							<div class="col-4">
								<a href="" class="btn btn-block btn-social btn-google">Google</a>
							</div>
						</div>

					</form>
					</div>
					<div class="col-md-6">
						<img src="images/Logo.jpg">
					</div>
				</div>

			</div>
		</div>
	
	</div>

		





</body>
</html