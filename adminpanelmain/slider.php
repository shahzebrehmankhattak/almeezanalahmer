<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>

<div class="cointainer">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center" style="color:#6D376E">  Gallery Data </h2>
        </div>
    </div>
</div>            

<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <button class="btn " style="background-color:#b2278a;">
   <a class="text-white" href="addslider.php">Add New+</a>   
</button>
<div class='table-responsive'>
<table class="table table-bordered text-center" style="background-color:#b2278a;color:white">
  <thead>
    <tr>
      
      <th scope="col">Images</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'almizanwebsite');



$q = "SELECT * FROM  slider";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td> <img src="<?php echo $result['image'];?>" width="400" alt="">  </td>
    
      <td> 
        
<button class="btn btn-danger mt-1"><a class="text-white" href="deleteslider.php?id=<?php echo $result ['id'];?> ">Delete</a>

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
</div>

<?php include 'adminfooter.php' ?>