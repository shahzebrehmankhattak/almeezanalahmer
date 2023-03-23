<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <style>
        .form-style {
            box-sizing: border-box;
          
           
            padding: 20px;
         
            box-shadow: 0px 0px 12px rgba(218, 222, 232, 0.4)
        }

        .label-style {
            font-size: 16px;
            font-weight: 600;
            color: white;
        }
    </style>
</head>

<body style='background-color: rgb(62, 118, 180);'>
    <nav class="navbar navbar-expand-lg navbar-tranparent" style="background-color: #b2278a;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Al-Meezan Al-Ahmer
                Advertisment</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white me-4 joinBtn" aria-current="page" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white joinBtn" href="team.html">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="container ">
            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                    <h4 class="text-center text-white">Lets Talk</h4>
                   
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 m-auto d-flex border border-2 ">
                        <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12' style="background-color: #b2278a;">
<div class='mt-5 p-3'>

    <p class="text-center text-white fw-bold">Lets Get In Touch</p>
    <p class="text-center text-white fw-bold">We are open for any suggestions or just to have chat</p>
</div>
<div class='d-flex justify-content-center  align-items-center gap-3'>
    <div style='border:1px solid white; border-radius:100%; padding:10px'>
    <i class="fa fa-map-marker" style="font-size:24px; color:white"></i>
    </div>
    <p class='text-white '><span class='fw-bold'>Address:</span> zy plaza dubai</p>
</div>
<div class='d-flex justify-content-center  align-items-center gap-3 mt-4'>
    <div style='border:1px solid white; border-radius:100%; padding:10px'>
    <i class="fa fa-phone" style="font-size:24px; color:white"></i>
    </div>
    <p class='text-white '><span class='fw-bold'>Contact:</span> xxx-xxxxxx-xxx</p>
</div>
<div class='d-flex justify-content-center  align-items-center gap-3 mt-4'>
    <div style='border:1px solid white; border-radius:100%; padding:10px'>
    <i class="fa fa-envelope" style="font-size:24px; color:white"></i>
    </div>
    <p class='text-white '><span class='fw-bold'>Email:</span> xyz@gmail.com</p>
</div>
<div>
    
</div>
                        </div>
                        <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                        <div class="form-style">
                            <h4 class='sent-notification' style='color:white'></h4>

                            <form method="post" action="email_api.php">
                                <div class='form-group'>
                                    <label for="name" class='text-white fw-bold mb-3'>Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class='form-group'>
                                    <label for="email" class='text-white fw-bold mb-3 mt-3'>Email:</label>
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>
                                <div class='form-group'>
                                    <label for="subject" class='text-white fw-bold mb-3 mt-3'>Subject:</label>
                                    <input type="text" id="subject" class="form-control" name="subject" required>
                                </div>

                                <div class='form-group pb-3'>
                                    <label for="message" class='text-white fw-bold mb-4 mt-3'>Message:</label>
                                    <textarea id="message" name="message" class="form-control" required></textarea>
                                </div>
                                <input type="submit" value="Send" class='btn' 
                                style='background: #b2278a; color:white;margin:5px '>
                            </form>
                        </div>
                        </div>
                       
                    </div>

                
                
                   

                </div>
            </div>
        </div>
    </div>
</body>

</html>