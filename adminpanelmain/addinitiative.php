<?php include 'adminheader.php' ?>



<?php include 'breadcrumbs.php'  ?>



<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto" style="background:#6D376E">
        <h4 class="text-center text-white p-2">Add Initiatives</h4>
        <form class="p-4" id="addinitiative" method="post" action="insertinitiative.php">
  
  <div class="mb-3">
    <label class=" form-label text-white">Image</label>
    <input type="file" class="form-control" name="images" id="" style="height: 42px;border-radius:8px;border:2px solid #9D6791">

  </div>
  <div class="form-floating mb-3">
  <label for="floatingTextarea">Text</label>
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="initiativetext"></textarea>
  
</div>

  <button type="submit" name="submit" class="btn text-white" style="background-color:#9D6791;">Submit</button>
</form>
        </div>
    </div>
</div>



<?php include 'adminfooter.php'  ?>