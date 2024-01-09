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
  <title>Gold Crest | Produtos</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

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
        <a href="home.php" class="nav-item nav-link active">Lar</a>
        <a href="service.php" class="nav-item nav-link">Serviços</a>
        <a href="product.php" class="nav-item nav-link">Produtos</a>
        <a href="contact.php" class="nav-item nav-link">Contato</a>
        <a href="logout.php" class="nav-item nav-link">Sair</a>
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
          ROTEIRO DE PRODUTOS
          </h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="home.php" class="text-gold">Lar</a>
              </li>
              <li class="breadcrumb-item">
                <a href="service.php" class="text-gold">Serviços</a>
              </li>
              <li class="breadcrumb-item">
                <a href="contact.php" class="text-gold">Contato</a>
              </li>
              <li class="breadcrumb-item">
                <a href="register.php" class="text-gold">Cadastro</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              Roteiro de produtos
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; border-radius: 20px" src="img/roadmap.jpeg" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <div class="pricing-plans-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="top-title">Nosso plano de investimento</span>
        <h2>Oferecemos uma solução de investimento rentável e orientada para o cliente</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single-pricing-plan-card">
            <h3 style="font-weight:bold;">PLANO FLEXI GOLDCREST (GFP)</h3>
            <div class="pricing-box">
              <h4>1,5%</h4>
              <p>Todos os dias úteis</p>
            </div>
            <ul class="pricing-list">
              <li>Capital Mínimo: 11.000 MZN </li>
              <li>Capital Máximo: Ilimitado </li>
              <li>Duração: 2 semanas Maturidade </li>
            </ul>
            <h3>VANTAGEM:</h3>
            <ul class="benefit">
              <li>15% de juros totais após duas semanas</li>
              <li>Atendimento ao cliente dedicado 24 horas por dia</li>
              <li>Acesso prioritário a pacotes e lançamentos exclusivos.</li>
            </ul>
            <a href="register.php" class="default-btn btn">ENTRAR</a>
          </div>
        </div>
        <!-- <div class="col-lg-4 col-md-6">
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
             
              <a href="register.php" class="default-btn btn">JOIN NOW</a>
            </div>
          </div> -->
      </div>
    </div>
  </div>

  <!-- Roadmap Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
        <h1 class="display-6">Roteiro de Investimento</h1>
        <p class="text-gold fs-5 mb-5">
        Traduzimos o seu sonho em realidade
        </p>
      </div>
      <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
        <div class="roadmap-item">
          <div class="roadmap-point"><span></span></div>
          <h5>Cadastro</h5>
          <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
        </div>
        <div class="roadmap-item">
          <div class="roadmap-point"><span></span></div>
          <h5>Pagamento</h5>
          <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
        </div>
        <div class="roadmap-item">
          <div class="roadmap-point"><span></span></div>
          <h5>Validação de Pagamento</h5>
          <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
        </div>
        <div class="roadmap-item">
          <div class="roadmap-point"><span></span></div>
          <h5>Período de espera</h5>
          <!-- <span>Diam dolor ipsum sit amet erat ipsum lorem sit</span> -->
        </div>
        <div class="roadmap-item">
          <div class="roadmap-point"><span></span></div>
          <h5>Devolução do portfólio</h5>
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
 <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-md-6">
          <a href="index.html" class="d-flex align-items-center">
            <img class="img-fluid me-2" src="img/logo_2.png" alt="" style="width: 200px" />
          </a>
          <span>Com o cenário financeiro em rápida evolução, a criptografia está liderando o caminho para revolucionar a maneira como pensamos sobre o dinheiro. À medida que mais e mais pessoas recorrem à criptografia como forma de investir e fazer transações, fica claro que essa tecnologia veio para ficar. Gold Crest Opportunity é uma plataforma de criptografia premium que permite aos usuários aproveitar o potencial da criptografia e fazer seu dinheiro trabalhar mais. Se você está procurando uma maneira de se envolver na revolução criptográfica, esta é a plataforma para você.</span>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Nossos serviços</h5>
          <a class="btn btn-link" href="service.php">Arbitragem de criptomoeda
          </a>
          <a class="btn btn-link" href="service.php">BServiço de negociação à vista de Bitcoin</a>
          <a class="btn btn-link" href="service.php">Investimento em bitcoins</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Links Rápidos</h5>
          <a class="btn btn-link" href="home.php">Lar</a>
          <a class="btn btn-link" href="service.php">Serviços</a>
          <a class="btn btn-link" href="#">Produtos</a>
          <a class="btn btn-link" href="contact.php">Contato</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Entrar em contato</h5>
          <p>
            <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
          </p>
          <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
          <p>
            <i class="fa fa-envelope me-3"></i><a class="text-gold" href="mailto:info@cristadeouro.com">info@cristadeouro.com</a>
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
  <a href="#" class="btn btn-lg bg-gold text-white btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

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

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>