<?php
session_start();
include 'connect.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verify the user's credentials against a database or other authentication system
    // For this example, we'll just hardcode a username and password
    if ($email == 'admin@admin.com' && $password == '12345678') {

        // Set a session variable to indicate that the user is logged in
        $_SESSION['authenticated'] = true;

        // Redirect the user to a protected page
        header('Location: dashboard.php');
        exit;

    } else {
        // Display an error message if the credentials are invalid
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AlmizanAlAhmer Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
       
            <div class="col-xl-8 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                <?php if (isset($error)) { ?>
        <p style="color: red;text-align:center"><?php echo $error; ?></p>
    <?php } ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form class="user" action="login.php" method="post">
                                        <div class="form-group">
                                            <input type="email"  id="email" name="email" required class="form-control form-control-user"
                                             
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input  class="form-control form-control-user"
                                               type="password" id="password" name="password" required placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                   <button type='submit' class="btn btn-primary btn-user btn-block"> Login</button>
                        
                                        
                                      
                                    </form>
                                  
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    <form action="login.php" method="post">
        <div>
            <label for="username">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html> -->
