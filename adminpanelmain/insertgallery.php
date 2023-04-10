<?php


include 'connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
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
   

             $sql = "INSERT INTO  gallery (title,description,image)
            VALUES ('$title','$description','$destfile')";
            
            if ($conn->query($sql) === TRUE) {
                $alert_message = "Data Added SuccessFully!";
                echo "<script>alert(' $alert_message');
                window.location.href = 'gallerydata.php';
                </script>";
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          }  
                    
?>