<?php


include 'connection.php';

$id = $_POST['id']; 
// if( isset( $_GET['Id'])) {
//     $Id = $_GET['Id']; 
// } 


// echo $Id;

// $name = $_POST['name'];
// $class = $_POST['class'];
// $age = $_POST['age'];
// $dob =$_POST['dob'];
// $gender = $_POST['gender'];
// $status = $_POST['status'];
// $password = $_POST['password'];
$files = $_FILES['imageslider'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){

    $destfile = 'IMAGES/'.$filename;

move_uploaded_file($filepath,$destfile);

$conn = OpenCon();


$sql = "UPDATE imaageslider SET 


image='$destfile' 
where   id='$id'   ";
        
       

if ($conn->query($sql) === TRUE) {
    echo "record udpated";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
        
}             
?>