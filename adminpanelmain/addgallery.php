<?php include 'adminheader.php' ?>
<?php include 'breadcrumbs.php' ?>

<div class="container mb-5 ">

<div class="row">
        <div class=" col-lg-10 mx-auto  border border-3 p-4" style="background-color:#b2278a;color:white">
    
    
<h4 class="text-center text-white p-2">Add Gallery</h4>


<form class="p-4" id="addgallery" method="post" action="insertgallery.php" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="mb-3">
    <label class=" form-label text-white">Image</label>
    <input type="file" class="form-control" name="image" id="" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Tilte</label>
    <input type="text" class="form-control" id="" name="title" style="height:42px">
  </div>
  <div class="mb-3">
    <label class="form-label text-white">Decription</label>
    <input type="text" class="form-control" id="" name="description" style="height:42px">
  </div>
 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


            
        </div>
    </div>
</div>




<?php include 'adminfooter.php' ?>