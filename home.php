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
    <title>Gold Crest | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/logo_1.jpg" rel="icon" />

    <!-- Google Web Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
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

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- links -->
    <link rel="stylesheet" href="css/odometer.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/fancybox.min.css" />
    <link rel="stylesheet" href="css/scrollCue.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
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

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-4 mb-5">
      <div class="container py-4">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <h1 class="display-6 mb-3 animated slideInDown">
              TRADING CRYPTO IS THE FUTURE OF FINANCE - EARN 1.5% PER DAY WITH
              GOLDCREST SPOT TRADE PLATFORM
            </h1>
            <p class="animated slideInDown">
              The future of finance is being shaped by the rise of
              cryptocurrency. As crypto becomes more popular, investors have new
              opportunities to make money through spot trading. Gold Crest
              Opportunity provides a platform for you to take advantage of these
              opportunities. So don't get left behind - explore the
              possibilities of crypto today!
            </p>
            <a
              href="register.php"
              class="btn bg-gold text-white py-3 px-4 animated slideInDown"
              >Register</a
            >
          </div>
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="animation-duration: 3s"
              src="img/hero_4-modified.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <!-- Features -->
    <div class="features-area pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span class="top-title">OUR FEATURES</span>
          <h2>
            We are a premiere crypto spot trading platform, praised for our stellar performance. We give investors the tools they need to thrive in the rapidly evolving world of cryptocurrency.
          </h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-features-card">
              <div class="features-icon">
                <img src="img/features-icon-1.svg" alt="features-1" />
              </div>
              <h3>TRUST AND RELIABILITY</h3>
              <p>
                We're committed to the highest standards of transparency,
                reliability and integrity. You can count on us to conduct our
                business with the utmost professionalism and discretion.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-features-card bg-color-1">
              <div class="features-icon">
                <img src="img/features-icon-2.svg" alt="features-1" />
              </div>
              <h3>MONEY BACK GUARANTEE</h3>
              <p>
                We guarantee satisfaction with our services and ensure that all
                funds are secure and protected.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-features-card bg-color-2">
              <div class="features-icon">
                <img src="img/features-icon-3.svg" alt="features-1" />
              </div>
              <h3>PROFESSIONAL TEAMWORK</h3>
              <p>
                Our team of skilled financial experts has a wealth of knowledge
                and expertise in the areas of corporate finance and investing.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="single-features-card bg-color-3">
              <div class="features-icon">
                <img src="img/features-icon-4.svg" alt="features-1" />
              </div>
              <h3>AI DRIVEN TRADING</h3>
              <p>
                Our Expert AI-driven trading uses sophisticated algorithms to
                analyze vast amounts of data and make informed decisions about
                when and where to invest to generate profit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Partners -->
    <div class="panther-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="client-odometer">
              <h2>
                <span class="odometer text-gold" data-count="13">12</span>
                <span class="target text-gold">+</span>
              </h2>
              <p>Endorsed by notabe organizations including</p>
            </div>
          </div>
          <div class="container">
            <div class="wrapper">
              <div class="track">
                <div class="logo">
                  <img src="img/partner1.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner2.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner3.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner4.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner5.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner6.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner7.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner8.jpg" />
                </div>
                <div class="logo">
                  <img src="img/partner9.jpg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .wrapper {
        background-color: #e1e2e2;
        height: 130px;
        overflow: hidden;
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        padding: 0 20px;
      }

      .wrapper:before,
      .wrapper:after {
        content: "";
        position: absolute;
        height: 130px;
        width: 150px;
        z-index: 2;
      }

      .wrapper:after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
      }

      .wrapper:before {
        left: 0;
        top: 0;
      }

      .wrapper .track {
        display: flex;
        width: calc(150px * 10);
        animation: scroll 15s 0.5s linear infinite;
      }

      .wrapper .logo {
        width: 100%;
      }

      .wrapper .logo img {
        height: 90px;
      }

      @keyframes scroll {
        from {
          transform: translateX(0);
        }
        to {
          transform: translateX(calc(-150px * 5));
        }
      }
    </style>

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <img class="img-fluid" src="img/hero_3-modified.png" alt="" />
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6">About Us</h1>
              <p class="text-gold fs-5 mb-4">
                The most trusted cryptocurrency platform in the market.
              </p>
              <p>
                As a preeminent cryptocurrency trading platform, we pride ourselves on our sophisticated security protocols and rigorous compliance standards.





              </p>
              <p class="mb-4">
                Our state-of-the-art infrastructure, powered by advanced encryption and multi-factor authentication, is designed to ensure the security of our users' assets. 

              </p>
              <p class="mb-4">
                We are especially proud of our cutting-edge spot trading platform, which is widely recognized as one of the most secure and reliable in the industry. At the heart of our success is our commitment to providing a premium user experience, underpinned by a robust security infrastructure. 

              </p>
              <p class="mb-4">
                We are constantly innovating and evolving our platform to meet the needs of our users, and we strive to remain at the forefront of the crypto trading landscape. We take the trust of our users very seriously, and we are proud to be a leading spot trading retailer. 


              </p>
              <p class="mb-4">
                Our mission is to provide a safe, secure, and easy-to-use platform that enables our users to achieve their crypto trading goals.


              </p>
              <h6 class="display-6 fw-bold">Our Focus</h6>
              <div class="d-flex align-items-center mb-2">
                <i
                  class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"
                ></i>
                <span>Safe and rewarding Crypto Spot Trading Retailers Platform</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <i
                  class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"
                ></i>
                <span>Bitcoin Halving Profitability                </span>
              </div>
              <div class="d-flex align-items-center mb-4">
                <i
                  class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"
                ></i>
                <span
                  >S.M.A.R.T vision accomplishment on Currency Trading.</span
                >
              </div>
              <a
                class="btn bg-gold text-white py-3 px-4"
                href="register.php"
                >Join Us</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5">
        <div class="row g-5">
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">27</h1>
            <p class="fs-5 text-gold mb-0">Today Transactions</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-4" src="img/icon-10.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">1050</h1>
            <p class="fs-5 text-gold mb-0">Monthly Transactions</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
            <h1 class="display-4" data-toggle="counter-up">25002</h1>
            <p class="fs-5 text-gold mb-0">Total Transactions</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">Why Us!</h1>
          <p class="text-gold fs-5 mb-5">The Best In The crypto Industry</p>
        </div>
        <div class="row g-5 d-flex align-items-center justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-7.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Easy To Start</h5>
                <span
                  >Our platform is designed for ease of use, from sign-up to
                  trading. Low fees and great rates make it
                  simple to get started.</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-6.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Safe & Secure</h5>
                <span
                  >Your crypto investment is safe and secure with our AI-powered
                  platform. You can trust our advanced algorithms to keep your
                  funds protected and generate the best possible returns.</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-5.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Affordable Plans</h5>
                <span
                  >Our platform offers a range of options to suit any budget, so
                  you can find the perfect plan for your needs.</span
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-4.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">Secure Storage</h5>
                <span
                  >Secure storage for your Bitcoin, guaranteed. State-of-the-art
                  security features protect your assets.</span
                >
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Protected By Insurance</h5>
                            <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</span>
                        </div>
                    </div>
                </div> -->
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="d-flex align-items-start">
              <img
                class="img-fluid flex-shrink-0"
                src="img/icon-8.png"
                alt=""
              />
              <div class="ps-4">
                <h5 class="mb-3">24/7 Support</h5>
                <span
                  >"Need help? We're here for you 24/7. Our customer service
                  team is always available to answer your questions and
                  address any concerns.</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

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
              <h5 class="mb-3">Bitcoin Spot Trading Retailer              </h5>
              <p>
                Our company is a leading provider of Bitcoin spot trading services, offering a safe and reliable platform for buyers and sellers. We are committed to providing a smooth and secure trading experience, protecting all parties involved in the transaction. Whether you're looking to make a large or complex purchase, our spot trading services are designed to meet your needs.
              </p>
              <a href="service.php"
                >Read More <i class="fa fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-white p-5">
              <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
              <h5 class="mb-3">Bitcoin Investment</h5>
              <p>
                Bitcoin investment is made simple and smart. With our platform,
                you can invest in Bitcoin with ease and confidence. Our
                sophisticated AI algorithms help you make the most of your
                investment. It's time to take your financial future
                into your own hands!
              </p>
              <a href="service.php"
                >Read More <i class="fa fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-white p-5">
              <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
              <h5 class="mb-3">Currency Exchange</h5>
              <p>
                The future of cryptocurrency exchange and arbitrage is here! Our
                platform provides a seamless and efficient way to buy, sell, and
                trade Bitcoin and other cryptocurrencies. With our advanced
                arbitrage technology, you can take advantage of price
                differences across exchanges and maximize your profits. Don't
                miss out on the opportunities that await you in the
                world of crypto!
              </p>
              <a href="service.php"
                >Read More <i class="fa fa-arrow-right ms-2"></i
              ></a>
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
    <!-- Service End -->

    <!-- Roadmap Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Roadmap</h1>
                <p class="text-primary fs-5 mb-5">We Translate Your Dream Into Reality</p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>January 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>March 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>May 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>July 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>September 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>November 2045</h5>
                    <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Roadmap End -->

    <!-- Token Sale Start -->
    <!-- <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Token Sale</h1>
                <p class="text-primary fs-5 mb-5">Token Sale Countdown</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Days</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Hours</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Minutes</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">0</h1>
                        <span class="text-primary fs-5">Seconds</span>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4" href="">Buy Token</a>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid m-1" src="img/payment-1.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-2.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-3.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="img/payment-4.png" alt="" style="width: 50px;">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Token Sale Start -->

    <div class="pricing-plans-area pt-100 pb-70">
      <div class="container">
        <div class="section-title">
          <span class="top-title">OUR INVESTMENT PACKAGES</span>
          <h2>We offer a selection of customizable investment solutions</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="single-pricing-plan-card">
              <h3>Gold Crest Bitcoin Spot Trading Package ( Gold BST Package)               </h3>
              <div class="pricing-box">
                <h4>1.5%</h4>
                <p>Every working day</p>
              </div>
              <ul class="pricing-list">
                <li>Min Capital: 11,000 MZN                </li>
                <li>Max Capital: Unlimited                </li>
                <li>Duration: 2 weeks Maturity </li>
              </ul>
              <h3>ADVANTAGE:</h3>
              <ul class="benefit" >
                <li style="text-transform:lowercase;">15% INTEREST AFTER TWO WEEKS</li>
                <li style="text-transform:lowercase;">DEDICATED CUSTOMER SERVICE</li>
                <li style="text-transform:lowercase;">ACCESS TO GOLD CREST TRADING ACADEMY TnC apply</li>
                <li style="text-transform:lowercase;">EXCLUSIVE ACCESS TO PRODUCT LAUNCH TnC apply</li>
              </ul>
              <a href="register.php" class="default-btn btn">JOIN NOW</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-pricing-plan-card">
              <h3>BITCOIN ARBITRAGE PLUS PACKAGE</h3>
              <div class="pricing-box">
                <h4>2%</h4>
                <p>Every working day</p>
              </div>
              <ul class="pricing-list">
                <ul class="pricing-list">
                  <li>Min. Capital : 5 000 000</li>
                  <li>Max: No level limit</li>
                </ul>
              </ul>
              <h3>ADVANTAGE:</h3>
              <ul class="benefit">
                <li>20% total interest after two weeks</li>
                <li>Dedicated customer service 24 hours a day</li>
                <li>Access to financing for SMEs</li>
                <li>Access to Bitcoin Halving System</li>
                <li>Access to the Training</li>
                <li>Academy and free training kits.</li>
                <li>Priority access to exclusive packages and launch.</li>
              </ul>
              <a href="register.php" class="default-btn btn">JOIN NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- testimonials -->
    <div class="testimonials-area pt-100 pb-100">
      <div
        class="d-flex justify-content-center align-items-center flex-column text-center p-3"
      >
        <span class="top-title text-gold fs-1">Testimonials</span>
        <h2>What our customers say</h2>
        <p>
          At Gold Crest, the quality of our service and our goodwill speak for
          us. A few words from our customers nationwide.
        </p>
      </div>
    </div>

    <div class="container mt-5">
      <div class="row">
        <!-- First Testimonial -->
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <!-- <img src="img/testimonials-img-1-modified.png" width="150px" alt="testimonials" class="client-image rounded-circle mb-3" /> -->
              <!-- <div class="quote-icon mb-3">
                <img src="assets1/images/testimonials/quote.svg" alt="quote" />
              </div> -->
              <p class="card-text">
                It's just the best place to invest your money. When it comes to
                peace of mind, you give me everything. Not a single promise has
                failed. Please, continue.
              </p>
              <h5 class="card-title">Fransisca Jones</h5>
              <p class="card-subtitle mb-2 text-muted">B.A.P Investor Wales</p>
            </div>
          </div>
        </div>

        <!-- Second Testimonial -->
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <!-- <img src="img/testi-modified.png" width="150px" alt="testimonials" class="client-image rounded-circle mb-3" /> -->
              <!-- <div class="quote-icon mb-3">
                <img src="assets1/images/testimonials/quote.svg" alt="quote" />
              </div> -->
              <p class="card-text">
                Just a quick but huge thank you for everything you've done to
                help us achieve this dream. It's so beautiful - and I'm still in
                shock about the reality - to move my business to the country of
                my dreams.
              </p>
              <h5 class="card-title">Michal Bluum</h5>
              <p class="card-subtitle mb-2 text-muted">
                B.A.P. Investor Australia
              </p>
            </div>
          </div>
        </div>

        <!-- Third Testimonial -->
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body text-center">
              <!-- <img src="img/testi2-modified.png" width="150px" alt="testimonials" class="client-image rounded-circle mb-3" /> -->
              <!-- <div class="quote-icon mb-3">
                <img src="assets1/images/testimonials/quote.svg" alt="quote" />
              </div> -->
              <p class="card-text">
                I am a living testimony of your quality service. I appreciate
                all your efforts to help business owners. The loan process was
                simple and faster than local banks. The little investment with
                you is yielding more than my business.
              </p>
              <h5 class="card-title">Zachary Mallory</h5>
              <p class="card-subtitle mb-2 text-muted">
                B.A.Plus Investor Luxr
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQs Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <h1 class="display-6">FAQs</h1>
          <p class="text-gold fs-5 mb-5">Frequently Asked Questions</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    What is cryptocurrency?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Digital or virtual currency using cryptography for security.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    How to trade crypto on Gold Crest?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Choose an exchange package, create an account, and purchase
                    using fiat.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Which cryptocurrencies to invest in?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Popular options like Bitcoin and Ethereum, etc.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="true"
                    aria-controls="collapseFour"
                  >
                    Is crypto investment risky?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Yes, prices can be volatile; be prepared for potential gains
                    and losses.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    What is a blockchain?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A decentralized, distributed ledger technology underlying
                    most cryptocurrencies.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                <h2 class="accordion-header" id="headingSix">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSix"
                    aria-expanded="false"
                    aria-controls="collapseSix"
                  >
                    Tax implications of crypto gains on Gold Crest?
                  </button>
                </h2>
                <div
                  id="collapseSix"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    You are entitled to agreed payout, Gold Crest sort Tax
                    payments.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                <h2 class="accordion-header" id="headingSeven">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven"
                    aria-expanded="false"
                    aria-controls="collapseSeven"
                  >
                    How to avoid scams?
                  </button>
                </h2>
                <div
                  id="collapseSeven"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Be cautious of fraudulent schemes, verify sources, and use
                    secure platforms.
                  </div>
                </div>
              </div>
              <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                <h2 class="accordion-header" id="headingEight">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseEight"
                    aria-expanded="false"
                    aria-controls="collapseEight"
                  >
                    Should I follow market trends?
                  </button>
                </h2>
                <div
                  id="collapseEight"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingEight"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    Keep informed, but trade decision rely solely on Goldcrest.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQs Start -->

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
            <a class="btn btn-link" href="service.php"
              >Crptocurrency Exchange
            </a>
            <a class="btn btn-link" href="service.php">Bitcion Spot Trading Service</a>
            <a class="btn btn-link" href="service.php">Bitcoin investment</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5 class="mb-4">Quick Links</h5>
            <a class="btn btn-link" href="#">Home</a>
            <a class="btn btn-link" href="service.php">Services</a>
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
    <script src="js/odometer.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/scrollCue.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/main2.js"></script>
  </body>
</html>