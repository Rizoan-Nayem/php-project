<?php
session_start();
require '../db.php';

$sub_title = mysqli_real_escape_string($conn, $_POST['sub_title']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$desp = mysqli_real_escape_string($conn, $_POST['desp']);

$insert = "INSERT INTO banner_contents(sub_title,title,desp)VALUES('$sub_title','$title','$description')";
$result = mysqli_query($conn,$insert);
$_SESSION['successfull'] = 'Banner content added successfully!';
header('location: add_banner.php');
?>