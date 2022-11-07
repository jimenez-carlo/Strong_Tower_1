<?php
session_start();
include 'connection.php';

if(isset($_POST['add'])){
  $name_train=$_POST['name_train'];
  $age=$_POST['age'];
  $gender=$_POST['gender'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];

  $photo=$_FILES['image']['name'];
  $upload="trainors/".$photo;

  $query="INSERT INTO trainor_tbl(name_train,age,gender,contact,address,photo) VALUES (?,?,?,?,?,?)";
  $mean=$con->prepare($query);
  $mean->bind_param("ssssss", $name_train, $age, $gender, $contact, $address, $upload);
  $mean->execute();
  move_uploaded_file($_FILES['image']['tmp_name'], $upload);

  header('location: trainors.php');  

  $_SESSION['response']="Successfuly Add Trainor";
  $_SESSION['res_type']="success";

}


?>