<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include('config.php');

$veh = $_POST['vehicle'];
$lot = $_POST['lot'];
$cat = $_POST['category'];
$uid = $_SESSION['log']['useruid'];
$fromtime =$_POST['fromtime'];
$totime = date('d-m-y h:i:s');

$qry = mysqli_query($con,"INSERT INTO logtable (useruid, lotname, vehicleno,category,fromtime,totime) VALUES ('$uid', '$lot', '$veh','$cat','$fromtime','$totime') ");
$qry1 = mysqli_query($con,"UPDATE lot SET status='Ongoing Booking' WHERE lotname='$lot' ");
header("location:dashboard.php");
?>