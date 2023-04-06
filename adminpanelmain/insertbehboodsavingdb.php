<?php


include 'connect.php';




$from = $_POST['fromdate'];
$to = $_POST['todate'];
$latest = $_POST['latestpr'];
$rate = $_POST['rateper'];


    $conn = OpenCon();
   

             $sql = "INSERT INTO  behboodsaving (fromdate,todate,latestpr,rateper)
            VALUES ('$from','$to','$latest','$rate' )";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
         
                    
?>