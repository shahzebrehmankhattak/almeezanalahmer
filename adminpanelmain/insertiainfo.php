<?php


include 'connect.php';



$name = $_POST['offcername'];
$designation = $_POST['designation'];
$description = $_POST['description'];
$images= $_FILES['images']['name'];
$files = $_FILES['images'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
    $destfile = 'IMAGES/'.$filename;
    // echo"$destfile";
    move_uploaded_file($filepath,$destfile);
    $conn = OpenCon();
   

             $sql = "INSERT INTO  incpectionaudit (offcername,designation,descrition,images)
            VALUES ('$name','$designation','$description','$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record of Incepection and Audit created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>