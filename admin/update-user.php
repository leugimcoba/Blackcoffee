<?php
session_start();
include "authentication.php";
$host="localhost";
$username="root";
$pass="";
$db="egg";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}

// insert query for register page
if(isset($_REQUEST['user']))
{
	  $user_id=$_POST['user_id'];
	$fullname=$_POST['inputFullName'];
	$user=$_POST['user'];
	$password=md5($_POST['password']);
	$role=$_POST['role'];
	if($_POST['password']==''){
		
	$query="UPDATE `users` SET `fullname`='$fullname',`user`='$user' where `user_id`='$user_id'";	
	}else{
	 $query="UPDATE `users` SET `fullname`='$fullname',`user`='$user',`password`='$password' where `user_id`='$user_id'";
	}
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		header('Location:dashboard.php');
	}else{
		echo "Data not Updated, please try again!";
	}
	
}



?>