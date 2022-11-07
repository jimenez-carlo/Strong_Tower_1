<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1maximun-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css
    "integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Membership</title>
    <link rel="stylesheet" href="style1.css"
</head>
<style>
  .table{
    margin-top:15%;
    margin-left:20px;
    width:90%;
  }
  .edit{
    color:#fff;
    background: green;
    width:80px;
    padding:10px;
    text-align:center;
    border-radius: 7%;
  }
  .deactivate{
    color:#fff;
    background: red;
    width:80px;
    padding:10px;
    text-align:center;
    border-radius: 7%;
  }
  a{
    text-decoration:none;
    font-weight: bold;
    font-size:15px;
  }
  .delete:hover{
    color:#fff;
  }
  .edit:hover{
    color:#fff;
  }
</style>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fa-solid fa-lock"></span><span>Admin Panel</span> </h2>
        </div>
          
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" ><span class="fa-solid fa-clipboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="trainors.php"><span class="fa-solid fa-registered"></span>
                    <span>Manage Trainors</span></a>
                </li>
                <li>
                    <a href="progress.php"><span class="fa-solid fa-bars-progress"></span>
                    <span>Progress List</span></a>
                </li>  
                <li>
                    <a href=""><span class="fa-solid fa-peso-sign"></span>
                    <span>Payments</span></a>
                </li>
                
                <li>
                    <a href="members.php" class="active"><span class="fa-solid fa-people-group"><span>
                    <span>Members</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-calendar-days"></span>
                    <span>Schedule</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-circle-check"></span>
                    <span>Plan</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-list"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href="index.php"><span class="fa-solid fa-arrow-right-from-bracket"></span>
                    <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
            
                MEMBERS
            </h2>
          
            
        </header>
           
        <section class="table">
        <?php

$query = "SELECT * FROM costumer_tbl";

$user=$con->prepare($query);
$user->execute();
$result=$user->get_result();
?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>

  <?php while ($row=$result->fetch_assoc()){ ?>
  <tbody>
    <tr>

      <td><?= $row['name'] ?></td>
      <td><?= $row['gender'] ?></td>
      <td><?= $row['contact'] ?></td>
      <td><?= $row['address'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['password'] ?></td>
      <td class="text-center">

      <a class="btn btn-sm btn-info" href="">Edit</a>&nbsp;
      <a class="btn btn-sm btn-danger" href="">Deactivate</a>&nbsp;
      </td>
      
    </tr>

    <?php } ?>
  </tbody>
</table>
</section>


</body>
</html>