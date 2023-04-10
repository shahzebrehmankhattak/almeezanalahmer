<?php
  $conn = mysqli_connect("localhost", "root", "", "almizanwebsite");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM teaminfo";
    $query = mysqli_query($conn, $sql);
    
    
    if (mysqli_num_rows($query) > 0) {
        while ($result = mysqli_fetch_assoc($query)) {
            ?>
            <div class="col-lg-4">
                <div class="card">
                   
            <img src="../almezanalhmer/adminpanelmain/<?php echo $result['image'];?>" alt="John" width="150" alt="" 
            class="mx-auto">
            <h4><?php echo $result['emname']; ?></h4>           
            <p class="title"><?php echo $result['emprole']; ?></p>
           
                    

                </div>
            </div>
    
      <?php
    }
  } else {
    echo "No data available";
  }

  //close the database connection
  mysqli_close($conn);
?>
                 
    </div>

