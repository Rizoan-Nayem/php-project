<?php
session_start();
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM banner_contents WHERE id=$id";
$delete_result = mysqli_query($conn, $delete);

$_SESSION['del'] = 'deleted successfully!';
header('location: add_banner.php');

?>