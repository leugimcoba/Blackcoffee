<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>
<html>

<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->
<div class="container">
<center><h2><?php echo "Welcome to admin Dashboard";?></h2></center>

<h1>User Records</h1>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No.</th>
      <th>Full Name</th>
      <th>User</th>
      <th>Number</th>
	  <th>Role</th>
	   <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $i=1;
  $query="Select * from users";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['fullname'];?></td>
      <td><?php echo $row['user'];?></td>
      <td><?php echo $row['number'];?></td>
	    <td><?php echo $row['role'];?></td>
	  <td><a href="edit-user.php?id=<?php echo $row['user_id'];?>">Edit</a> | <a href="delete-user.php?id=<?php echo $row['user_id'];?>">Delete</a></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 
</div>
</body>
</html>