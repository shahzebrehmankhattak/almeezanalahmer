<?php 

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'almizanwebsite');

$id = $_GET['id'];

$q = "DELETE FROM slider WHERE id = $id";

$query = mysqli_query($con, $q);
header('location:slider.php');

?>