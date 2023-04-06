<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>


<div class="cointainer">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center" style="color:#6D376E">  Team Information </h2>
        </div>
    </div>
</div>            

<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <button class="btn " style="background-color:#b2278a;">
   <a class="text-white" href="addteam.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center" style="background-color:#b2278a;color:white">
  <thead>
    <tr>
      
      <th scope="col">Images</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'almizanwebsite');



$q = "SELECT * FROM  teaminfo";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td> <img src="<?php echo $result['image'];?>" width="150" alt="">  </td>
      <td style="width: 400px;"><?php echo $result['emname']; ?></td>
      <td style="width: 600px;"><?php echo $result['emprole']; ?></td>
      <td> <button class="btn" style="background-color:#b2278a;color:white">
Edit
</button>  <button class="btn" style="background-color:#b2278a;"><a class="text-white" href="deleteinitiative.php?id=<?php echo $result ['id'];?> ">Delete</a>

</button></td>
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



<?php include 'adminfooter.php' ?>