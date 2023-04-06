<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>




<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto" style="background-color:#6D376E">

        <h4 class="text-center text-white p-2">Add Certificates Rates</h4>


<form class="p-4" id="addbehboodsavingdb" method="post" action="insertbehboodsavingdb.php">
  <input type="hidden" name="id" value="<?php echo $id;?>">


  <div class="mb-3">
    <label class="form-label text-white">From</label>
    <input type="date" class="form-control" id="" name="fromdate" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">To</label>
    <input type="date" class="form-control" id="" name="todate" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Latest Rates</label>
    <input type="text" class="form-control" id="" name="latestpr" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Rates %</label>
    <input type="text" class="form-control" id="" name="rateper" style="height:42px">
  </div>
 

 
 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



        </div>
    </div>
</div>












<?php include 'adminfooter.php' ?>