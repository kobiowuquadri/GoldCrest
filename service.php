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
    <title>Gold Crest | Services</title>
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
          <a href="home.php" class="nav-item nav-link">Home</a>
          <a href="service.php" class="nav-item nav-link active">Services</a>
          <a href="product.php" class="nav-item nav-link">Products</a>
          <a href="contact.php" class="nav-item nav-link">Contact</a>
          <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
        <!-- <div class="h-100 d-lg-inline-flex align-items-center d-none">
          <a
            class="btn btn-square rounded-circle bg-light me-2"
            href=""
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a
            class="btn btn-square rounded-circle bg-light me-2"
            href=""
            ><i class="fab fa-twitter"></i
          ></a>
          <a
            class="btn btn-square rounded-circle bg-light me-0"
            href=""
            ><i class="fab fa-linkedin-in"></i
          ></a>
        </div> -->
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-4 mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="home.php" class="text-gold">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="product.php" class="text-gold">Products</a>
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
                  Services
                </li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="animation-duration: 3s"
              src="img/cryptocurrency-6601591_1280-modified.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Services</h1>
          <p class="text-gold fs-5 mb-5">
            Buy, Sell And Exchange Cryptocurrency
          </p>
        </div>
        <div class="row g-4">
          <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="service-item bg-white p-5">
                          <img class="img-fluid mb-4" src="img/icon-7.png" alt="">
                          <h5 class="mb-3">Currency Wallet</h5>
                          <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                          <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div> -->
          <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                      <div class="service-item bg-white p-5">
                          <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                          <h5 class="mb-3">Currency Transaction</h5>
                          <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                          <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div> -->
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-white p-5">
              <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
              <h5 class="mb-3">Bitcoin spot trading retailer platform</h5>
              <p>
                Gold Crest is a leading Bitcoin spot trading retailer platform, providing a secure and user-friendly environment for users to trade Bitcoin at the current market price. With our advanced trading and intuitive tools, you can execute quick and simple trades with confidence. Whether you're a beginner or a seasoned trader, Gold Crest has everything you need to succeed in the world of crypto spot trading.

              </p>
              <p>
                Bitcoin spot trading is the process of buying and selling Bitcoin instantly at the current market price. Unlike futures trading, which involves contracts based on future prices, spot trading is focused on the present market. Spot traders can take advantage of short-term price movements, buying when the price is low and selling when it's high. Spot traders can use either fiat currency or other cryptocurrencies to make their trades. While spot trading can be a high-risk, high-reward activity, Gold Crest simplifies the process with its easy-to-use platform which reduces subscribers' exposure to risk.
              </p>
              <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-white p-5">
              <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
              <h5 class="mb-3">Bitcoin Investment</h5>
              <p>
                Our advanced digital currency investment platform provides a
                streamlined and reliable solution for individuals and
                institutions seeking to maximize the potential of their Bitcoin
                and cryptocurrency portfolios. Our sophisticated AI algorithms
                provide real-time market insights and recommendations, allowing
                you to make informed investment decisions. We offer a secure,
                user-friendly interface that makes it easy to buy, sell, and
                trade digital currencies. With our platform, you can focus on
                growing your wealth with confidence." Pick up a
                portfolio package today.
              </p>
              <p>
                Our AI algorithms are designed to provide actionable insights
                and recommendations, based on real-time market data and
                historical trends. The algorithms are constantly learning and
                adapting, ensuring that they remain at the cutting edge of
                market analysis and prediction. With our AI-powered platform,
                you can make informed investment decisions with confidence,
                knowing that you're making the most of the latest data and
                technology. Let our AI algorithms do the heavy lifting, so you
                can focus on making the best possible investments.
              </p>
              <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-white p-5">
              <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
              <h5 class="mb-3">Currency Exchange</h5>
              <p>
                By automating the process of finding and exploiting arbitrage
                opportunities across multiple exchanges, our platform eliminates
                the need for time-consuming and error-prone manual analysis.
                This allows you to focus on making more trades, and ultimately,
                more profits. We provide a simple and intuitive user interface,
                making it easy for anyone to take advantage of the power of our
                technology. With the potential to earn significant returns on
                your crypto investments, our platform offers a cutting-edge
                solution for the savvy investors.
              </p>
              <p>
                Our platform utilizes advanced machine learning algorithms to
                monitor and analyze prices across a wide range of cryptocurrency
                exchanges. These algorithms identify opportunities for
                arbitrage, which are then automatically executed by our trading
                bots. The bots are designed to minimize transaction costs and
                maximize profits, making them a highly efficient and
                cost-effective way to take advantage of the crypto markets. In
                addition, our platform is designed to protect your investments
                by implementing security measures such as two-factor
                authentication and cold storage for crypto funds.
              </p>
              <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                      <div class="service-item bg-white p-5">
                          <img class="img-fluid mb-4" src="img/icon-8.png" alt="">
                          <h5 class="mb-3">Token Sale</h5>
                          <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                          <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div> -->
        </div>
      </div>
    </div>

    <!-- Footer Start -->
    <div
      class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md-6">
            <a href="index.html" class="d-flex align-items-center">
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
            <a class="btn btn-link" href="service.php">Crptocurrency Exchange </a>
            <a class="btn btn-link" href="service.php">Bitcoin Escrow </a>
            <a class="btn btn-link" href="service.php">Bitcoin investment</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Quick Links</h5>
            <a class="btn btn-link" href="home.php">Home</a>
            <a class="btn btn-link" href="#">Services</a>
            <a class="btn btn-link" href="product.php">Products</a>
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