<?php
$conn=mysqli_connect("151.106.124.51","u188140722_masala","Admin@123","u188140722_masala");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  

session_start();

$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{                                                                                       
  header("location:adminlogin.php");
}
?>