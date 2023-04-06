<?php include 'adminheader.php'  ?>
<?php include 'breadcrumbs.php'  ?>


<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto" style="background-color:#6D376E">

        <form class="p-4" id="addtime" method="post" action="inserttime.php">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="mb-3">
    <label class=" form-label text-white">Day</label>
    <input type="text" class="form-control" name="day" id="" style="height:42px">

  </div>
  <div class="mb-3">
    <label class="form-label text-white">Time</label>
    <input type="text" class="form-control" id="" name="time" style="height:42px">
  </div>

  <button type="submit" name="submit" class="btn text-white" style="background-color:#9D6791">Submit</button>
</form>


        </div>
    </div>
</div>



<?php include 'adminfooter.php'  ?>