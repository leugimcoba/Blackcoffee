<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap"
      rel="stylesheet"
    />
<script>
function formvalidation(){
	var fullname=$('#inputFullName').val();
	var user=$('#inputUser').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(fullname=='')
	{
		alert("Please Enter your fullname");
		return false;
		
	}
	if(user=='')
	{
		alert("Please Enter your Username");
		return false;
		
	}
	
}
</script>

</head>
<body>

<?php include "header.php";?>

<div class="container">
<div class="col-xs-6 col-xs-push-3 well">


<form class="form-horizontal" method="post" action="update-user.php" onsubmit="return formvalidation();">
  <fieldset>
    <legend>Edit User Details</legend>
	<?php 
	if(isset($_SESSION['success']))
	{
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	}
	?>
	<?php
	$user_id=$_GET['id'];
	$query="select * from users where user_id='$user_id'";
	$res=mysqli_query($conn,$query);
	$data=mysqli_fetch_array($res);
	?>
	<input type="hidden" name="user_id" value="<?php echo $user_id;?>">
	<div class="form-group">
      <label for="inputFullName" class="col-lg-2 control-label">Full Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputFullName" id="inputFullName" placeholder="FullName" value="<?php echo $data['fullname'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputUser" class="col-lg-2 control-label">User</label>
      <div class="col-lg-10">
        <input type="user" class="form-control" name="user" id="inputUser" placeholder="User" value="<?php echo $data['user'] ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </fieldset>
</form>


</div>
</div>
</body>
</html>