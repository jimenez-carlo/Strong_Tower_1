<?php
include 'connection.php';
session_start();

if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];


$login = mysqli_query($con, "SELECT * FROM costumer_tbl WHERE email='$email' AND password='$password'");
$row = mysqli_fetch_assoc($login);
if($row >= 1){
  $_SESSION['email'] = $email;

  header("Location: user_dashb.php");
}else{
  header("Location: user_login.php?error=error");
}
}
?>