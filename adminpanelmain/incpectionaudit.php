<?php include 'adminheader.php' ?>

<?php include 'breadcrumbs.php'   ?>

<div class="cointainer">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center" style="color:#6D376E">  Central Directorate </h2>
        </div>
    </div>
</div>            

<div class="container">
    <div class="row">
        <div class="col-lg-12" >
        <button class="btn " style="background-color:#9D6791;">
   <a class="text-white" href="addiainfo.php">Add New+</a>   
</button>
        <table class="table table-bordered text-center" style="background-color:#6D376E;color:white">
  <thead>
    <tr>
      
      <th scope="col">Images</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Descrition</th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody id="response" >
  
  
  <?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'saving_db');



$q = "SELECT * FROM  incpectionaudit";

$query=mysqli_query($con,$q);

if (mysqli_num_rows($query) > 0 ) {
while ($result = mysqli_fetch_array($query) ) {

?>

    <tr>
   
      <td> <img src="<?php echo $result['images'];?>" width="150" alt="">  </td>
      <td><?php echo $result['offcername']; ?>  </td>

      <td><?php echo $result['designation']; ?></td>
      <td style="width: 400px;"><?php echo $result['descrition']; ?></td>


      <td> <button class="btn" style="background-color:#9D6791;color:white">
Edit
</button>  <button class="btn" style="background-color:#9D6791;"><a class="text-white" href="deleteia.php?id=<?php echo $result ['id'];?> ">Delete</a>

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