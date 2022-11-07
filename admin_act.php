<?php
session_start();
include 'connection.php';


if (isset($_POST['username']) && isset($_POST['password'])){

      function validate($data){
      $data = trim($data);
      $data = stripcslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $username = validate($_POST['username']); 
    $pass = validate($_POST['password']);

    if (empty($username)) {
      header("location: adminform.php?error=Username is required");
      exit();
    }else if (empty($pass)) {
      header("location: adminform.php?error=password is required");
      exit();
    }else{
      $sql = "SELECT * FROM admin_tbl WHERE username = '$username' AND password = '$pass'";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result)=== 1){
        $row = mysqli_fetch_assoc($result);
        if ($row[ 'username'] === $username && $row['password'] === $pass){
          $_SESSION['username'] = $row ['username'];
          $_SESSION['id'] = $row ['id'];
          header("location:dashboard.php");
        exit();
        }else{
          header("location: adminform.php?error=incorrect username or password");
          exit();
        }
      }else{header("location: adminform.php?error=incorrect username or password");
        exit();
      }

      }
  }else{
    header("location: adminform.php");
    exit();
  }

?>