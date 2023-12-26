<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Gold Crest | Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/logo_1.jpg" rel="icon" />

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">   -->

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-gold" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5"
    >
      <a href="home.php" class="navbar-brand d-flex align-items-center">
        <img
          class="img-fluid me-2"
          src="img/logo_2.png"
          alt=""
          style="width: 150px"
        />
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
        <a href="home.php" class="nav-item nav-link active">Home</a>
          <a href="service.php" class="nav-item nav-link">Services</a>
          <a href="product.php" class="nav-item nav-link">Products</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
          <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
        <!-- <div class="h-100 d-lg-inline-flex align-items-center d-none">
                <a class="btn btn-square rounded-circle bg-light me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle bg-light me-2" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle bg-light me-0" href=""><i class="fab fa-linkedin-in"></i></a>
            </div> -->
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 mb-3 animated slideInDown">
              PRODUCTS ROADMAP
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="home.php" class="text-gold">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="service.php" class="text-gold">Services</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="contact.php" class="text-gold">Contact</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="registration.php" class="text-gold"
                    >Registration</a
                  >
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Products Roadmap
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="animation-duration: 3s; border-radius: 20px"
              src="img/roadmap.jpeg"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Investment Roadmap</h1>
          <p class="text-gold fs-5 mb-5">
            We Translate Your Dream Into Reality
          </p>
        </div>
        <div
          class="owl-carousel roadmap-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>Registration</h5>
            <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>Payment</h5>
            <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>Payment Validation</h5>
            <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>Holding Period</h5>
            <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
          </div>
          <div class="roadmap-item">
            <div class="roadmap-point"><span></span></div>
            <h5>Portfolio Return</h5>
            <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
          </div>
          <!-- <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>November 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div> -->
        </div>
      </div>
    </div>
    <!-- Roadmap End -->

    <!-- Footer Start -->
    <div
      class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6">
            <a href="home.php" class="d-flex align-items-center">
              <img
                class="img-fluid me-2"
                src="img/logo_2.png"
                alt=""
                style="width: 200px"
              />
            </a>
            <span
              >With the financial landscape rapidly evolving, crypto is leading
              the way in revolutionizing the way we think about money. As more
              and more people turn to crypto as a way to invest and transact,
              it's clear that this technology is here to stay. Gold Crest
              Opportunity is a premium crypto platform that empowers users to
              harness the potential of crypto and make their money work harder.
              If you're looking for a way to get involved in the crypto
              revolution, this is the platform for you.</span
            >
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Our Services</h5>
            <a class="btn btn-link" href="service.php"
              >Crptocurrency Exchange
            </a>
            <a class="btn btn-link" href="service.php">Bitcoin Escrow </a>
            <a class="btn btn-link" href="service.php">Bitcoin investment</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Quick Links</h5>
            <a class="btn btn-link" href="home.php">Home</a>
            <a class="btn btn-link" href="service.php">Services</a>
            <a class="btn btn-link" href="#">Products</a>
            <a class="btn btn-link" href="contact.php">Contact Us</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Get In Touch</h5>
            <p>
              <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
            </p>
            <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p>
              <i class="fa fa-envelope me-3"></i
              ><a class="text-gold" href="mailto:info@cristadeouro.com"
                >info@cristadeouro.com</a
              >
            </p>
          </div>

          <!-- <div class="col-lg-3 col-md-6">
              <h5 class="mb-4">Follow Us</h5>
              <div class="d-flex">
                  <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div> -->
        </div>
      </div>
      <!-- <div class="container-fluid copyright">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a href="#">Gold Crest</a>, All Right Reserved.
              </div>
          </div>
      </div>
  </div> -->
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg bg-gold text-white btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function () {
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>