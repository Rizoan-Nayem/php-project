<?php
session_start();
require '../db.php';

$id = $_POST['id'];
$sub_title = mysqli_real_escape_string($conn, $_POST['sub_title']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$desp = mysqli_real_escape_string($conn, $_POST['desp']);

$update = "UPDATE banner_contents SET sub_title='$sub_title', title='$title',desp='$description' WHERE id=$id";
$update_result = mysqli_query($conn,$update);
$_SESSION['update'] = 'banner updated!';
header('location: edit_banner.php?id='.$id);

?>