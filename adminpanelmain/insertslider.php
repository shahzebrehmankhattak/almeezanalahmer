<?php


include 'connect.php';

$images= $_FILES['image']['name'];
$files = $_FILES['image'];
// print_r($files);
$filename = $files ['name'];
$filepath = $files ['tmp_name'];
$fileerror = $files ['error'];

if($fileerror == 0){
    $destfile = 'IMAGES/'.$filename;
    // echo"$destfile";
    move_uploaded_file($filepath,$destfile);
    $conn = OpenCon();
   

             $sql = "INSERT INTO  slider (image)
            VALUES ('$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                $alert_message = "Data Added SuccessFully!";
                echo "<script>alert(' $alert_message');
                window.location.href = 'slider.php';
                </script>";
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>