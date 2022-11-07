<?php
include 'connection.php';
include 'trainors-act.php';
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

    <title>TRAINORS</title>
    <link rel="stylesheet" href="style1.css">
</head>
<style>
 .trainors{
  margin-top:15%;
  border: 10px solid black;
  width:80%;
  margin-left:10%;
  padding:2%;
  border-radius:20px;
  margin-bottom:5%;
  text-align: center;
 }
.enter{
  width:60%;
  height: 40px;
  border-radius:10px;
  border: 2px solid red;
  padding-left:20px;
  font-size:20px;
  font-weight: 100;
}
a{
    text-decoration:none;
    font-weight: bold;
    font-size:15px;
  }
.button{
  border: 2px solid red;
  color: #fff;
  background: red;
  border-radius: 10px;
  padding:5px;
  width: 20%;
}
.button:hover{
  color:#fff;
  background: black;
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
                    <a href="trainors.php" class="active"><span class="fa-solid fa-registered"></span>
                    <span>Manage Trainors</span></a>
                </li>
                <li>
                    <a href="progress.php"><span class="fa-solid fa-bars-progress"></span>
                    <span>Progress List</span></a>
                </li> 
                <li>
                    <a href=""><span class="fa-solid fa-peso-sign"></span>
                    <span>Payments</span></a>
                </li> <li>
                    <a href="members.php" ><span class="fa-solid fa-people-group"></span>
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
            
               TRAINORS
            </h2>
        </header>
  
        <section class="trainors">
                <h3>Manage Trainors</h3>
                  <form action="trainors-act.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name_train" class="enter" placeholder="Enter Name: " required><br><br>
                    <input type="text" name="age" class="enter" placeholder="Enter Age" required><br><br>
                    <input type="text" name="gender" class="enter" placeholder="Enter Gender" required><br><br>
                    <input type="text" name="contact" class="enter" placeholder="Enter Contact" required><br><br>
                    <input type="text" name="address" class="enter" placeholder="Enter Address" required><br><br>
                     <label for="photo">Input Photo Trainor: </label><br><input type="file" name="photo" class="enter" style="width:50%;"><br><br>

                     <input type="submit" name="add" class="button" value="Add Trainor" >
                  </form>

                
           
        </section>

</body>
</html>