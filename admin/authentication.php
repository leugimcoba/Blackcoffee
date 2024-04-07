<?php
$role= $_SESSION['role'];
if($role=='employee'){
	   	header('Location:../customer/dashboard.php');

   }
?>