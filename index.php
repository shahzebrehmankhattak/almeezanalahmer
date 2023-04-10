<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      
        .main-info span {
            font-size: 13px;
            font-weight: 500;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .main-info {
            position: absolute;
            background-color: #a9a9a90f !important;
            z-index: 999;
            padding: 12px;
            width: 95%;
        }

        .text-container {
            position: absolute;
            top: 30%;
            left: 9%;
            width: 10%;
        }

        .text-container p {
            font-size: 30px;
            font-weight: 700;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 30px;
            padding: 5px;
        }

        @media screen and (max-width: 425px) {
            .text-container {
                position: absolute;
                top: 20%;
                left: 9%;
                width: 70%;
            }

            .text-container p {
                font-size: 18px;
                font-weight: 600;
                color: white;
                font-family: Arial, Helvetica, sans-serif;
                line-height: 20px;
                padding: 5px;
            }
        }

        @media screen and (min-width: 375px) {
            .text-container {
                position: absolute;
                top: 35%;
                left: 9%;
                width: 80%;
            }

            .text-container p {
                font-size: 18px;
                font-weight: 600;
                color: white;
                font-family: Arial, Helvetica, sans-serif;
                line-height: 30px;
                padding: 5px;
            }
        }

        @media screen and (min-width: 320px) {
            .text-container {
                position: absolute;
                top: 35%;
                left: 9%;
                width: 80%;
            }

            .text-container p {
                font-size: 16px;
                font-weight: 500;
                color: white;
                font-family: Arial, Helvetica, sans-serif;
                line-height: 25px;
                padding: 5px;
            }
        }




        .btn {
            padding: 10px 25px;
            font-size: 14px;
            font-weight: 600;
        }

        /* html {
            font-size: 62.5%;
        } */

        .main-heading {
            opacity: 1;
            position: absolute;
            width: 90%;
            font-size: 3rem;
            z-index: 100;
            top: 2em;

            background-color: #a9a9a90f !important;
            color: #ffffff;
        }
        /* div 2 */
        .checking {
            padding: 10px;
            background-color: rgb(62, 118, 180);

        }

        .card-style {
            background-color: rgba(0, 0, 0, 0.315);
            color: white;
            margin: 10px;
            border: 1px solid #E9E8EC;
            box-shadow: 0px 0px 12px rgba(218, 222, 232, 0.4);
            height: 15rem;
           
            
        }
        .overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #b2278a;

  overflow: hidden;
  /* width: 100%; */
  height:0;
  transition: .5s ease;
}
        .card-style:hover .overlay {
  bottom: 0;
  height: 100%;
}
.card-text-p{
    font-size: 22px;
    font-weight: 600;
    text-align: center;
    padding-top: 7rem;
}
        /* .card-style .card-title{
            transition:  1s;
        } */
       .card-style .card-title {
  color: white;
  font-size: 20px;
  font-weight: 600;
  position: absolute;
  top: 50%;
  left: 48%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
       

       

        .infoCard-style {
            background-color: rgba(0, 0, 0, 0.315);
            border: 1px solid #E9E8EC;
            box-shadow: 0px 0px 12px rgba(218, 222, 232, 0.4);
            border-radius: 12px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            color: white;
        }

        .infoCard-style:hover {
            background-color: #b2278a;
            color: white;
        }

        .card-title {
            font-size: 24px;
            padding-top: 80px;
            color: white
        }

        .adv {
            height: 150px;
            width: 150px;
            background-color: rgb(62, 118, 180);
        }

        .fade-in-image {
            animation: fadeIn 5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .animate-text {
            animation: fadeIn 5s;
        }

        .imagebg {
            background-color: rgb(62, 118, 180);
        }

        .main-card {
            background-color: rgb(62, 118, 180);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 10px;
        }

        .product-card {
            background-color: rgba(0, 0, 0, 0.315);
            border: 1px solid #E9E8EC;
            box-shadow: 0px 0px 12px rgba(218, 222, 232, 0.4);
            border-radius: 12px;
            padding: 10px;
            margin: 10px;
            color: #FFFFFF;
        }

        .product-card:hover {
            background-color: #b2278a;
            color: white;
        }

        .checked {
            color: orange;
        }

        .email-box {
            margin: 10px;
            padding: 10px;
        }

        .buy-btn {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .buy-btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .buy-btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .buy-btn:hover span {
            padding-right: 25px;
        }

        .buy-btn:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
    <title>Al Mizan Al Ahmer Advertisement</title>
</head>

<body>
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
                        <a class="nav-link text-white joinBtn" href="team.php">Team</a>
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
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                 <?php include 'slider.php' ?>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <!-- end -->
    <div class="container-fluid pt-5" style='background-color: rgb(62, 118, 180);'>
        <h3 class="text-center text-white fw-bold pb-5">About Us</h3>
        <div class="container p-3"
            style="border: 1px solid rgba(0, 0, 0, 0.315);background-color: rgba(0, 0, 0, 0.315);border-radius: 8px;">
            <div class="row">
                <div class="col-lg-6 fade-in-image">
                    <!-- change image from here -->
                    <img src="image2.jpg" alt="" style="width:400px;height:400px" class="img-fluid">
                </div>
                <div class="col-lg-6 animate-text" style="margin-top: 5rem;">
                    <h5 class="text-white">
                        Welcome to Al-Meezan Al-Ahmer Advertisement
                    </h5>
                    <h2 class="text-white">
                        HIGHEST <br />
                        CREATIVE STANDARDS
                    </h2>
                    <p style="font-size: 14px;font-weight: 500;color: #FFFFFF;">
                        Do you need a printing job? Please see the following service details: Our Services: We deal in
                        all types of business card printing. Letterhead | Magazine | Receipt | Flyer | Catalog | Roll up
                        | Sticker | Banner Signboard | Poly bag | Shopping Bag Printing | T-shirt printing Gift Items
                        Engraved | Vehicle Graphics | Logo Design | Epoxy | Name Badge | Tips We provide all types of IT
                        solutions for your business. Web Design | Software Solutions | Digital Marketing. If you have
                        any questions regarding this printing services proposal, please contact directly via mobile or
                        email. We look forward to serving you! Thanks
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- endn -->

    <div class="container-fluid pt-5 checking">
        <h3 class="text-center text-white fw-bold pb-5">Services by us</h3>
        <div class="container  mb-5">
            <div class="row mb-2">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-white">Do you need a printing job? </h3>
                    <p class="text-white fw-bold">
                        Please see the following service details: Our Services: We deal in all types of business card
                        printing. Letterhead | Magazine | Receipt | Flyer | Catalog | Roll up | Sticker | Banner
                        Signboard | Poly bag | Shopping Bag Printing | T-shirt printing Gift Items Engraved | Vehicle
                        Graphics | Logo Design | Epoxy | Name Badge | Tips We provide all types of IT solutions for your
                        business. Web Design | Software Solutions | Digital Marketing. If you have any questions
                        regarding this printing services proposal, please contact directly via mobile or email. We look
                        forward to serving you! Thanks
                    </p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-style">
                        <div class="card-body">
                            <div class="card-image  text-end">
                        <i class="fa fa-bar-chart" style=" font-size: 36px"></i>
                            </div>
                            <div  class="card-text-p">7 days Free Change</div>
                            <div class="overlay">
                               
                                <div class="card-title">7 Days free change</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-style">
                        <div class="card-body">
                            <div class="card-image  text-end">
                                <i class="fa fa-clock-o" style=" font-size: 36px"></i>
                            </div>
                            <div  class="card-text-p">1-3 days delivery</div>
                            <div class="overlay">

                                <div class="card-title">1-3 days delivery</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="card card-style">
                        <div class="card-body">
                            <div class="card-image  text-end">
                                <i class="fa fa-steam" style=" font-size: 36px"></i>
                            </div>
                            <div  class="card-text-p">Product Quality</div>
                            <div class="overlay">

                                <div class="card-title  m-2">Product Quality</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container-fluid main-card pt-5">
        <div class="container ">
            <div class="row">
                <div class="col col-lg-12">
                    <h3 class="text-center text-white fw-bold pb-3">

                        Our Products
                    </h3>
                </div>
                <div class="row slider-track">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <!-- image of product -->
                                    <img src="graphic.jpg" alt="" class="rounded" style="width: 130px;height: 90px;">
                                </div>
                                <div class="card-title-product pt-2">
                                    <!-- change product name -->
                                    <h5 class="text-center ">

                                        Web Designing
                                    </h5>
                                    <!-- change price -->
                                    <h6 class="text-center">140Rs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">

                                    <img src="digitalmarketing.jpg" alt="" class="rounded" style="width: 130px;height: 90px;">
                                </div>
                                <div class="card-title-product pt-2">
                                    <h5 class="text-center">
                                        Digital Marketing
                                    </h5>
                                    <h6 class="text-center">140Rs</h6>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="webdesign.jpg" alt="" class="rounded" style="width: 130px;height: 90px;">
                                </div>
                                <div class="card-title-product pt-2">
                                    <h5 class="text-center">

                                Graphic Designing
                                    </h5>
                                    <h6 class="text-center">140Rs</h6>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="panaflex.jpg" alt="" class="rounded" style="width: 130px;height: 90px;">
                                </div>
                                <div class="card-title-product pt-2">
                                    <h4 class="text-center">

                                        Panaflex 
                                    </h4>
                                    <h6 class="text-center">140Rs</h6>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- dsfdsf -->
    <div class="container-fluid imagebg">
        <div class="container p-3 ">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-white text-center">Ways to Use Things</h3>
                    <div>
                        <ul style="font-size: 14px;font-weight: 500;color: white;">
                            <!-- change words about product -->
                            <li>
                                Comes with 3 different blades for slicing, grating and shredding.
                            </li>
                            <li>
                                Strong Suction Base, No sliding.
                            </li>
                            <li>
                                10x faster than other traditional cheese slicer.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <?php include 'gallery.php' ?>
                </div>
            </div>
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