<?php include 'adminheader.php' ?>;

<?php include 'breadcrumbs.php' ?>

<div class="cointainer">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">  Slider </h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <button class="btn btn-success"> <a href="addslider.php" class="text-white text-decoration-none">Add New+</a>  </button>
            <div class="slider-box">
            <table class="table table-bordered">
  <thead class="bg-primary text-white">
    <tr>
    
      <th scope="col">Image</th>
      <th scope="col">Text</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="bg-info" id="response">


  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  imageslider";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {
?>

    <tr>
     
      <td><img src="<?php echo $result['imagesslider'];?>"    width="50" height="50" ></td>
      <td  class="text-white"><?php echo $result['imagetext']; ?></td>
      <td class="d-flex justify-content-center">
        <button  class="btn btn-danger mx-1"> <a href="updateslider.php" class="text-white text-decoration-none">Edit</a></button> 
        <button class="btn btn-danger"> <a class="text-white" href="deleteslider.php?id=<?php echo $result ['id'];?> ">Delete</a></button> </td>
    </tr>
    




<?php 
}

}

?>
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>

<?php include 'adminfooter.php' ?>;