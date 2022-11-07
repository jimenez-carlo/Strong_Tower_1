<?php
$host = "localhost";
$username= "root";
$password="";
$database="strong_db_1";

$con = mysqli_connect($host, $username, $password);
mysqli_select_db($con, $database)or die (error_reporting(E_ALL));
