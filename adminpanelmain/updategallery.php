<?php


include 'connect.php';

$id = $_POST['id']; 
 $title = $_POST['title'];
$description = $_POST['description'];
$files = $_FILES['image'];

$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){

    $destfile = 'IMAGES/'.$filename;
move_uploaded_file($filepath,$destfile);

$conn = OpenCon();


$sql = "UPDATE gallery SET 

title='$title',
description='$description',
image='$destfile' 
where   id='$id'   ";
        
       
if ($conn->query($sql) === TRUE) {
    $alert_message = "Data Updated SuccessFully!";
    echo "<script>alert(' $alert_message');
    window.location.href = 'gallerydata.php';
    </script>";
   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
        
}             
?>