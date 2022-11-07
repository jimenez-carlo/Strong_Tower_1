<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $register = mysqli_query($con, "INSERT INTO costumer_tbl (name, gender, address, contact, email, password) VALUES ('$name', '$gender', '$address', '$contact', '$email', '$password')");

  if($register){
    header("Location: user_dashb.php?register_action=success");
  }else{
        echo error_reporting(E_ALL);
  }

}


?>