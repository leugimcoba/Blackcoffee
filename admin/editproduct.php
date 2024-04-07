<?php
	$conn = new mysqli('localhost', 'root', '', 'foodsys');

	$id=$_GET['product'];

	$productname=$_POST['productname'];
	$category=$_POST['category'];
	$price=$_POST['price'];

	$sql="select * from product where productid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if (empty($fileinfo['filename'])){
		$location = $row['photo'];
	}
	else{
		$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
	}

	$sql="update product set productname='$productname', categoryid='$category', price='$price', photo='$location' where productid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>