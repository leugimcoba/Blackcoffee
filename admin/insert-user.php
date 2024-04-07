<?php
session_start();
$host="localhost";
$username="root";
$pass="";
$db="egg";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}


if(isset($_REQUEST['user']))
{
	$fullname=$_POST['fullname'];
	$user=$_POST['user'];
	$password=md5($_POST['password']);
	$number=$_POST['number'];

	
	$query="INSERT INTO `users` (`fullname`,`user`,`password`,`number`,`role`) VALUES ('	$fullname','$user','$password','$number','customer')";
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Register successfully!";
		header('Location:../home.php');
	}else{
		echo "Data not inserted, please try again!";
	}
	
}



?>