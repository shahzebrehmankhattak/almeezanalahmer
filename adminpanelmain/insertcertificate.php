<?php


include 'connect.php';




$bsc = $_POST['bsc'];
$dsc = $_POST['dsc'];
$ric = $_POST['ric'];
$ssc = $_POST['ssc'];
$stsc = $_POST['stsc'];

    $conn = OpenCon();
   

             $sql = "INSERT INTO  certificatedb (bsc,dsc,ric,ssc,stsc)
            VALUES ('$bsc','$dsc','$ric','$ssc','$stsc' )";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
           
         
                    
?>