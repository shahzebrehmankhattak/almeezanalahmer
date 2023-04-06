<?php


include 'connect.php';

$emname = $_POST['emname'];
$emprole = $_POST['emprole'];
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
   

             $sql = "INSERT INTO  teaminfo (emname,emprole,image)
            VALUES ('$emname','$emprole','$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                // echo '<script>window.location.reload();</script>';
                $alert_message = "Data Added SuccessFully!";
                echo "<script>alert(' $alert_message');
                window.location.href = 'teaminfo.php';
                </script>";
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>