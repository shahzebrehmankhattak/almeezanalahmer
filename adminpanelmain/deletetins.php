<?php 


$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'saving_db');



$id = $_GET[id];

$q = "Delete from  tins where id= $id";

$query=mysqli_query($con,$q);
header('location:tins.php');

?>

