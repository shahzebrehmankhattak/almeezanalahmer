<?php
  //connect to the database
  $conn = mysqli_connect("localhost", "root", "", "almizanwebsite");

  //check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //query to fetch data from the table
  $sql = "SELECT * FROM slider";
  $result = mysqli_query($conn, $sql);

  //check if any data is available
  if (mysqli_num_rows($result) > 0) {
    //loop through the data and display it in HTML format
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      
      <div class="carousel-item active">
                    <img src="../almezanalhmer/adminpanelmain/<?php echo $row['image']; ?>" class="d-block w-100" alt="...">
                   
                  </div>
      <?php
    }
  } else {
    echo "No data available";
  }


  mysqli_close($conn);
?>
