<?php
  //connect to the database
  $conn = mysqli_connect("localhost", "root", "", "almizanwebsite");

  //check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //query to fetch data from the table
  $sql = "SELECT * FROM gallery";
  $result = mysqli_query($conn, $sql);

  //check if any data is available
  if (mysqli_num_rows($result) > 0) {
    //loop through the data and display it in HTML format
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      
       <div class="col-lg-4">
                        <div class="card infoCard-style">
                            <!-- image of products high demdn -->
                            <img src="../almezanalhmer/adminpanelmain/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <!-- name  -->
                                <h5 class="card-titleH"> <?php echo $row['title']; ?></h5>
                                <!-- some word about product -->
                                <p class="card-text"><?php echo $row['description']; ?></p>

                            </div>
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