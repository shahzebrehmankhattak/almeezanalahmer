<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>




<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto" style="background-color:#6D376E">

        <h4 class="text-center text-white p-2">Add Defence Certificates Rates</h4>


<form class="p-4" id="adddefencesavingdb" method="post" action="insertdefencesavingdb.php">
  <input type="hidden" name="id" value="<?php echo $id;?>">


  <div class="mb-2">
    <label class="form-label text-white">From</label>
    <input type="date" class="form-control" id="" name="fromdate" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">To</label>
    <input type="date" class="form-control" id="" name="todate" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Rates %</label>
    <input type="text" class="form-control" id="" name="rateper" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">First Year</label>
    <input type="text" class="form-control" id="" name="firstyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Second Year</label>
    <input type="text" class="form-control" id="" name="secondyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Third Year</label>
    <input type="text" class="form-control" id="" name="thirdyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Fourth Year</label>
    <input type="text" class="form-control" id="" name="fourthyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Fifth Year</label>
    <input type="text" class="form-control" id="" name="fifthyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Sixth Year</label>
    <input type="text" class="form-control" id="" name="sixthyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Seven Year</label>
    <input type="text" class="form-control" id="" name="sevenyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Eight Year</label>
    <input type="text" class="form-control" id="" name="eightyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Nine Year</label>
    <input type="text" class="form-control" id="" name="nineyear" style="height:42px">
  </div>
  <div class="mb-2">
    <label class="form-label text-white">Ten Year</label>
    <input type="text" class="form-control" id="" name="tenyear" style="height:42px">
  </div>
 

 
 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



        </div>
    </div>
</div>












<?php include 'adminfooter.php' ?>