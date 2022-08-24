<?php
session_start();
include 'connection.php';
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $select = "SELECT username, password FROM registration WHERE username='$username' AND password='$password'";
  $result=mysqli_query($conn,$select);
  if ($result && mysqli_num_rows($result) == 1) {
    $_SESSION['username']=$username;
    echo "<script>window:location='../index.php'</script>";
  }else{
    echo "<script>alert('wrong username & password please try again letter')</script>";
    echo "<script>window:location='login.php'</script>";

  }
}
?>