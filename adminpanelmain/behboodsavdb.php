



<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>



<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
        <h4 class="text-center text-dark p-2">Behbood savings Certificates</h4>
        <button class="btn " style="background-color:#9D6791;">

        
   <a class="text-white" href="addbehboodsavingdb.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center text-nowrap" style="background-color:#6D376E;color:white">
  <thead>
    <tr>
      
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Monthly Profit on Each</th>
      <th scope="col">rate %</th>
   
    
      
<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  behboodsaving";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td><p> <?php echo $result['fromdate']; ?></p> </td> 
      <td><p> <?php echo $result['todate']; ?></p> </td>
       <td><p> <?php echo $result['latestpr']; ?></p> </td> 
       <td><p> <?php echo $result['rateper']; ?></p> </td> 
      
     
      <td> <button class="btn" style="background-color:#9D6791;color:white">
Edit
</button>  <button class="btn" style="background-color:#9D6791;"><a class="text-white" href="deletebsc.php?id=<?php echo $result ['id'];?> ">Delete</a>

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