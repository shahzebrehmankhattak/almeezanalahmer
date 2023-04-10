<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <style>
        .fa-facebook {
            background: #3B5998;
            color: white;
            padding: 20px;
            font-size: 25px;
            width: 60px;
            text-align: center;
            text-decoration: none;
            border-radius: 16px;

        }

        .fa-facebook:hover {
            opacity: 0.7;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
            padding: 20px;
            font-size: 25px;
            width: 60px;
            text-align: center;
            text-decoration: none;
            border-radius: 16px;

        }

        .fa-twitter:hover {
            opacity: 0.7;
        }

        .fa-instagram {
            background: #9b6954;
            color: white;
            padding: 20px;
            font-size: 25px;
            width: 60px;
            text-align: center;
            text-decoration: none;
            border-radius: 16px;

        }

        .fa-instagram:hover {
            opacity: 0.7;
        }

        .checked {
            color: orange;
        }

        .email-box {
            margin: 10px;
            padding: 10px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
            padding: 10px;
            margin: 5px;
            border-radius: 16px;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .button a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        .button:hover,
        a:hover {
            opacity: 0.7;
        }
    </style>
    <title>Team</title>
</head>

<body style='background-color: rgb(62, 118, 180);'>
    <nav class="navbar navbar-expand-lg navbar-tranparent navbar-light sticky-top" style="background-color: #b2278a;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Al-Mizan Al-Ahmer
                Adv</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="#rating">Rating</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="team.html">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white me-4 joinBtn" aria-current="page"
                            href="contactus.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <h3 class="text-center" style="color:white">
                        Our Team
                    </h3>
                </div>
            </div>
        </div>
        <div class="row" style="border-radius:25px;border: 2px solid #b2278a;padding: 2rem;
                background-color: #b2278a;margin: 0.5rem;">
                <div class='col-lg-12'>
                <h4 class="text-center text-white">
                Meet With Our Team
            </h4>
                </div>
           <div class="row ">
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
    </div>



    
    <div class="conatiner-fluid " id="rating" style='background-color: rgb(62, 118, 180); '>
        <div class="container">
            <div class="row pb-3">
                <div class="col-lg-12">
                    <h2 class="text-center text-white">Customer Review</h2>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col-lg-12 text-center">
                        <div class="card"
                            style="border: 1px solid #b2278a;background-color: #b2278a;border-radius: 8px;">
                            <h3 class="text-white">Over All Rating 4 </h3>
                            <div class="card-body">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row gy-1">
                    <div class="col-lg-4 text-center">
                        <div class="card"
                            style="border: 1px solid #b2278a;background-color: #b2278a;border-radius: 8px;">
                            <h3 class="text-white">Quality </h3>
                            <div class="card-body">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="card"
                            style="border: 1px solid rgba(0, 0, 0, 0.315);background-color: #b2278a;border-radius: 8px;">
                            <h3 class="text-white">Product </h3>
                            <div class="card-body">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="card"
                            style="border: 1px solid rgba(0, 0, 0, 0.315);background-color: #b2278a;border-radius: 8px;">
                            <h3 class="text-white">Pricing </h3>
                            <div class="card-body"> <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid" style='background-color: #b2278a;'>
        <div class="container">
            <div class="row   pt-3 pb-3">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div>
                        <h5 class="text-white text-center pb-2">Email us at</h5>
                        <p class="text-center text-white fs-5">sgacadcompany@gmail.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h5 class="text-white text-center pb-2">Call or Whatsapp</h5>
                    <p class="text-center text-white fs-5">xxxxx-xxxxxx-xxx</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h5 class="text-white text-center pb-2">Connect with us</h5>
                    <div class="d-flex align-items-center gap-3 justify-content-center">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>