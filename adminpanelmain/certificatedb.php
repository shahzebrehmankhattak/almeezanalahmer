<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>



<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
        <h4 class="text-center text-dark p-2">Add Initiatives</h4>
        <button class="btn " style="background-color:#9D6791;">

        
   <a class="text-white" href="addcertificatedb.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center" style="background-color:#6D376E;color:white">
  <thead>
    <tr>
      
      <th scope="col">BSC</th>
      <th scope="col">Dsc</th>
      <th scope="col">Ric</th>
      <th scope="col">SSC(R)</th>
      <th scope="col">STSC </th>
    
      
<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  certificatedb";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td><p> <?php echo $result['bsc']; ?></p> </td> 
      <td><p> <?php echo $result['dsc']; ?></p> </td>
       <td><p> <?php echo $result['ric']; ?></p> </td> 
       <td><p> <?php echo $result['ssc']; ?></p> </td> 
       <td><p> <?php echo $result['stsc']; ?></p> </td> 
     
      <td> <button class="btn" style="background-color:#9D6791;color:white">
Edit
</button>  <button class="btn" style="background-color:#9D6791;"><a class="text-white" href="certificatedbdelete.php?id=<?php echo $result ['id'];?> ">Delete</a>

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