<?php
session_start();
include 'connection.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$select = "SELECT username FROM registration Where username='$username'"; 
	$run=mysqli_query($conn, $select);
	$result=mysqli_num_rows($run);
	if ($result > 0) {
		echo "<script>alert('username has been taken please choose other.')</script>";
		echo "<script>window:location='login.php'</script>";
	}else{
		$insert ="INSERT INTO registration (username, password, cpassword) VALUES ('$username','$password','$cpassword')";
		mysqli_query($conn,$insert);
		echo "<script>alert('Registration Successfull.')</script>";
		echo "<script>window:location='../index.php'</script>";
	}


}
?>