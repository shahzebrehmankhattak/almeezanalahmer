<?php


include 'connect.php';




$from = $_POST['fromdate'];
$to = $_POST['todate'];
$rate = $_POST['rateper'];
$firstyear = $_POST['firstyear'];
$secondyear = $_POST['secondyear'];
$thirdyear = $_POST['thirdyear'];
$fourthyear = $_POST['fourthyear'];
$fifthyear = $_POST['fifthyear'];
$sixthyear = $_POST['sixthyear'];
$sevenyear = $_POST['sevenyear'];
$eightyear = $_POST['eightyear'];
$nineyear = $_POST['nineyear'];
$tenyear = $_POST['tenyear'];


$conn = OpenCon();
   

$sql = "INSERT INTO  defencesaving (fromdate,todate,rateper,firstyear,secondyear,thirdyear,fourthyear,fifthyear,sixthyear,sevenyear,eightyear,nineyear,tenyear)
VALUES ('$from','$to','$rate','$firstyear','$secondyear','$thirdyear','$fourthyear','$fifthyear','$sixthyear','$sevenyear','$eightyear','$nineyear','$tenyear' )";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);
           
         
                    
?>