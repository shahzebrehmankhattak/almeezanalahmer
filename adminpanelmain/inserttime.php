<?php


include 'connect.php';




$day = $_POST['day'];
$time= $_POST['time'];

    $conn = OpenCon();
   

             $sql = "INSERT INTO  time (day,time)
            VALUES ('$day','$time')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New Time created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
          
                    
?>