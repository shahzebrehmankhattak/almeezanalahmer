



<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>



<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <h4 class="text-center text-dark p-2">Defence savings Certificates</h4>
        <button class="btn " style="background-color:#9D6791;">

        
   <a class="text-white" href="adddefencesavingdb.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center" style="background-color:#6D376E;color:white">
  <thead>
    <tr>
      
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">1st year</th>
      <th scope="col">2nd year</th>
      <th scope="col">3rd year</th>
    
      <th scope="col">4th year</th>
    
      <th scope="col">5th year</th>
    
      <th scope="col">6th year</th>
    
      <th scope="col">7th year</th>
    
      <th scope="col">8th year</th>
    
      <th scope="col">9th year</th>
    
      <th scope="col">10th year</th> 
<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  defencesaving";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td><p> <?php echo $result['fromdate']; ?></p> </td> 
      <td><p> <?php echo $result['todate']; ?></p> </td>
       <td><p> <?php echo $result['rateper']; ?></p> </td> 
       <td><p> <?php echo $result['firstyear']; ?></p> </td> 
       <td><p> <?php echo $result['secondyear']; ?></p> </td> 
       <td><p> <?php echo $result['thirdyear']; ?></p> </td> 
       <td><p> <?php echo $result['fourthyear']; ?></p> </td> 
       <td><p> <?php echo $result['fifthyear']; ?></p> </td> 
       <td><p> <?php echo $result['sixthyear']; ?></p> </td> 
       <td><p> <?php echo $result['sevenyear']; ?></p> </td> 
       <td><p> <?php echo $result['eightyear']; ?></p> </td> 
       <td><p> <?php echo $result['nineyear']; ?></p> </td> 
       <td><p> <?php echo $result['tenyear']; ?></p> </td> 
      
     
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