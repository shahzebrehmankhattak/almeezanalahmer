<?php
require_once 'connect.php';

$conn = OpenCon();

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
} else {
    // Handle the case where 'id' key is not set in the GET array
    echo "Error: 'id' key is not set in the GET array.";
    exit();
}

$sql = "SELECT * FROM teaminfo where id='$id'";

$data=mysqli_query($conn,$sql);

while($result = mysqli_fetch_array($data)){
    $id = $result['id'];
    $emname = $result['emname'];
    $emprole = $result['emprole'];
    $destfile = $result['image'];
}

CloseCon($conn);
?>
<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>

<div class="container">
<div class="row">
<div style="background-color:#b2278a;color:white" class="col-lg-8 col-md-8 col-sm-12 p-2 m-auto rounded  border  border border-2 fw-bolder p-4">
<div>
<h1 class="text-center text-white">Update Team Info </h1>
</div>
<form method="post" action="editteaminfo.php" id="updateteaminfo" enctype="multipart/form-data" >
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="form-group">

    <input   type="file" name="image" value="<?php echo $image; ?>" class='text-white'>
</div>
<div class="form-group">
    <label class='text-white'>Name</label>
<input class="form-control" type="text" name="emname" value="<?php echo $emname; ?>" >
</div><br>
<div class="form-group">
<label class='text-white'>Role</label>
<input class="form-control" type="text" name="emprole" value="<?php echo $emprole; ?>" >
</div><br>

<div class="text-center mt-auto">
<input class="btn btn-success btn-lg fw-bold" type="submit" name="submit" value="Update">
</div>

</div>



</form>
</div>
</div>
</div>


<script>
$( "#updateteaminfo" ).submit(function( event ) {


var form_data = new FormData(document.querySelector('#updateteaminfo')); 

$.ajax({
url: "teaminfoupdate.php",
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
window.open("teaminfo.php");

},
error: function(e) 
{
}          
});



return false;

}); 
</script>

<?php include 'adminfooter.php' ?>