<?php
include 'connection.php';

$id=$_GET['id'];



$conn = OpenCon();

$sql = "SELECT * FROM imageslider where id='$id'";

$data=mysqli_query($conn,$sql);

while($result = mysqli_fetch_array($data)){

$id= $result['id'];

// $name = $result['name'];
// $email = $result['email'];
// $class = $result['class'];
// $age = $result['age'];
// $dob =$result['dob'];
// $gender = $result['gender'];
// $status = $result['status'];
// $password = $result['password'];
$destfile = $result['imageslider'];


}

// if ($conn->query($sql) === TRUE) { 

// } 
// else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

CloseCon($conn);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Update Slider</title>
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">

</head>
<body>
<br>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 p-2 m-auto  border border-danger bg-dark text-danger border border-2 fw-bolder ">
<div>
<h1 class="text-center">Update Student </h1>
</div>
<form method="post" action="connection.php" id="updateteach" enctype="multipart/form-data" >
<input type="hidden" name="Id" value="<?php echo $Id; ?>">
<div class="form-group">
<!-- <label>Name</label>
<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" >
</div><br>
<div class="form-group">
<label>Email</label>
<input class="form-control" type="email" name="email" value="<?php echo $email; ?>" >
</div><br>
<div class="form-group">
<label>Class</label>
<input class="form-control" type="text" name="class" value="<?php echo $class; ?>" >
</div><br>

<div class="form-group">
<label>Age</label>
<input class="form-control" type="number" name="age" value="<?php echo $age; ?>" >
</div><br>
<div class="form-group">
<label>Date Of Birth</label>
<input class="form-control" type="date" name="dob" value="<?php echo $dob; ?>" >
</div><br>
<div class="form-group">
<label>Gender</label>
<input  type="radio" name="gender"value="male" > Male
<input type="radio" name="gender" value="female" > Female
</div><br>
<div class="form-group">
<label>Status</label>
<input  type="radio" name="status" value="teacher" > Teacher
<input type="radio" name="status" value="student" > Student
</div><br>
<div class="form-group">
<label>Password</label>
<input class="form-control" type="number" name="password" value="<?php echo $password; ?>">
</div><br>


<div> -->
<input   type="file" name="image" value="<?php echo $image; ?>">

</div>

<div class="text-center mt-auto">
<input class="btn btn-danger btn-lg fw-bold" type="submit" name="submit" value="Update">
</div>

</form>
</div>
</div>
</div>


<script>
$( "#updateteach" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#updateteach')); 




$.ajax({
url: "homesliderupdate.php",
type: "POST",
data:  form_data,
contentType: false,
cache: false,
processData:false,
beforeSend : function()
{


},
success: function(data)
{

alert('Successfully'+data);
window.open("studentdata.php");

},
error: function(e) 
{
}          
});



return false;

}); 
</script>

</body>
</html>