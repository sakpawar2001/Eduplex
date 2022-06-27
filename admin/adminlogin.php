<?php
	require("connection.php");
	session_start();
	if(isset($_POST['signin']))
	{
		$admin_name = $_POST['AdminName'];
		$admin_password = $_POST['AdminPass'];

		$query = "SELECT * FROM admin_login WHERE Admin_Name = '$admin_name' AND Admin_Password = '$admin_password'";
		
		$result=mysqli_query($con,$query);

		if (mysqli_num_rows($result)==1) 
		{
				echo "<script>alert('Login Successfull');</script>";
		}
		
		else
		{
			echo "<script>alert('Incorrect password!');</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login | SmartEd</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<h2>Admin Login Form</h2>
	</div>

	<form method="post">
		<div class="input-field">
			<i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Admin Name" name="AdminName">
		</div>
		<div class="input-group">
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Admin Password" name="AdminPass">
		</div>
		<div class="input-group">
			<button type="submit" name="signin" class="btn">Login</button>
		</div>
	</form>

</body>
</html>