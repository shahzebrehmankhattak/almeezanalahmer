<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>



<div class="container">
    <div class="row">
        <div class="col-lg-6">
        <button class="btn " style="background-color:#9D6791;">
   <a class="text-white" href="addtime.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center" style="background-color:#6D376E;color:white">
  <thead>
    <tr>
      
      <th scope="col">BSC</th>
      <th scope="col">Dsc</th>
      <th scope="col">Ric</th>
      <th scope="col">SSC(R)</th>
      <th scope="col">STSC 3M</th>
      <th scope="col">STSC 6M</th>
      <th scope="col">STSC 1Y</th>
      <th scope="col">SA</th>
      <th scope="col">SFWA</th>
      <th scope="col">PBA</th>

    </tr>
  </thead>
  <tbody id="response">
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  time";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <!-- <td><p> <?php echo $result['']; ?></p> </td> -->
      <td> <button class="btn" style="background-color:#9D6791;color:white">
Edit
</button>  <button class="btn" style="background-color:#9D6791;"><a class="text-white" href="deletetime.php?id=<?php echo $result ['id'];?> ">Delete</a>

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