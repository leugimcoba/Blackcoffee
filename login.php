<?php session_start();?>

<html>
<head>
	<title>Login and Register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	<script>
function formvalidation(){
	var user=$('#inputUser').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(user=='')
	{
		alert("Please Enter your username");
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


<form class="form-horizontal" method="post" action="login-account.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend></legend>
	<?php 
		if(isset($_SESSION['error']))
		{
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}
		if(isset($_SESSION['success']))
		{
			echo $_SESSION['success'];
			unset($_SESSION['success']);
		}
	?>
    <div class="form-group">
      <label for="inputUser" class="col-lg-2 control-label">User</label>
      	<form class="form-box px-3">
	   <div class="form-input">
							<span><i class="fas fa-user"></i></span>
        <input type="user" class="form-control" name="user" id="inputEmail" placeholder="username">
      </div>
    </div>	



    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <form class="form-box px-3">
      	<div class="form-input">
							<span><i class="fas fa-user"></i></span>
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        
      </div>
    </div>
    <div class="mb-3">
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="cb1">
			<label class="custom-control-label" for="cb1"> REMEMBER ME?</label>
		</div>
	</div>
    
   
   
    	<div class="form-group">
      		<div class="mb-3">
				<button type="submit" class="btn btn-clock text-uppercase">
								Login
				</button>
			</div>
   		</div>
  
  			<div class="text-center">
				<a href="" class="forget-link"> Follow our page on:</a>
			</div>

			<div class="row mb-3">
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

			<div class="text-center mb-2 text-left">Don't have an account?
				<a href="register.php" class="register-link">Register here!<header></header></a>
			</div>
	</fieldset>
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
</html>