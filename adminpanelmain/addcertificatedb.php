<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>




<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto" style="background-color:#6D376E">

        <h4 class="text-center text-white p-2">Add Certificates Rates</h4>


<form class="p-4" id="addcertificate" method="post" action="insertcertificate.php">
  <input type="hidden" name="id" value="<?php echo $id;?>">


  <div class="mb-3">
    <label class="form-label text-white">Bsc</label>
    <input type="text" class="form-control" id="" name="bsc" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Dsc</label>
    <input type="text" class="form-control" id="" name="dsc" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Ric</label>
    <input type="text" class="form-control" id="" name="ric" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Ssc</label>
    <input type="text" class="form-control" id="" name="ssc" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Stsc</label>
    <input type="text" class="form-control" id="" name="stsc" style="height:42px">
  </div>

 
 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



        </div>
    </div>
</div>












<?php include 'adminfooter.php' ?>