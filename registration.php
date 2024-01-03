<?php
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];
        $phoneNumber = $_POST["phoneNumber"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($phoneNumber) or empty($email) or empty($password) or empty($passwordRepeat)) {
            array_push($errors, "All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 charactes long");
        }
        if ($password !== $passwordRepeat) {
            array_push($errors, "Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
            array_push($errors, "Email already exists!");
        }
        if (count($errors) > 0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {

            $sql = "INSERT INTO users (email, password, phoneNumber) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $email, $passwordHash, $phoneNumber);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.<a href='index.php'>Click here to Login</a></div>";
            } else {
                die("Something went wrong");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Crest | Registration Form</title>
    <!-- Favicon -->
    <link href="img/logo_1.jpg" rel="icon" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- links -->
    <link rel="stylesheet" href="css/odometer.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/fancybox.min.css" />
    <link rel="stylesheet" href="css/scrollCue.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <style>
        .container_form {
            max-width: 600px;
            margin: 50px auto;
            padding: 50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .bg-gold {
            background-color: #CAB527;
        }

        .text-gold {
            color: #CAB527;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-gold" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="home.php" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-2" src="img/logo_2.png" alt="" style="width: 150px" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="product.php" class="nav-item nav-link">Products</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <?php
                if (isset($_SESSION["user"])) {
                    echo '<a href="logout.php" class="nav-item nav-link">Logout</a>';
                }
                ?>

            </div>
            <!-- <div class="h-100 d-lg-inline-flex align-items-center d-none">
          <a class="btn btn-square rounded-circle bg-light me-2" href=""
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a class="btn btn-square rounded-circle bg-light me-2" href=""
            ><i class="fab fa-twitter"></i
          ></a>
          <a class="btn btn-square rounded-circle bg-light me-0" href=""
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div> -->
        </div>
    </nav>
    <!-- Navbar End -->
    <div class="row row-cols-lg-2 row-cols-md-1">
        <div class="col-md">
            <img src="./img/testimonials.jpeg" class="img-fluid" alt="">
        </div>

        <div class="container container_form shadow col-md">
            <form action="registration.php" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password:">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phoneNumber" placeholder="Phone Number:">
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn bg-gold text-white" value="Register" name="submit">
                </div>
            </form>
            <div>
                <div>
                    <p>Already Registered <a href="index.php" class="text-gold">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = "https://embed.tawk.to/6579daea07843602b801b544/1hhhvua1a";
            s1.charset = "UTF-8";
            s1.setAttribute("crossorigin", "*");
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/scrollCue.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
</body>

</html>