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
  <title>Gold Crest | Contate-nos</title>
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
        <a href="#" class="nav-item nav-link">Contato</a>
        <a href="logout.php" class="nav-item nav-link">Sair</a>
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
          <h1 class="display-4 mb-3 animated slideInDown">Contate-nos</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="home.php" class="text-gold">Lar</a>
              </li>
              <li class="breadcrumb-item">
                <a href="service.php" class="text-gold">Serviços</a>
              </li>
              <li class="breadcrumb-item">
                <a href="product.php" class="text-gold">Produtos</a>
              </li>
              <li class="breadcrumb-item">
                <a href="register.php" class="text-gold">Cadastro</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contate-nos
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; border-radius: 20px" src="img/contactus.jpeg" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
          <h1 class="display-6">Contate-nos</h1>
          <p class="text-gold fs-5 mb-0">
            Se você tiver alguma dúvida, entre em contato conosco
          </p>
        </div>
        <!-- <div class="col-lg-6 text-lg-end">
            <a class="btn bg-gold text-white py-3 px-4" href="javascript:void()">Say Hello</a>
          </div> -->
      </div>
      <div class="row g-5">
        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <p class="mb-2">Nosso escritório:</p>
          <h4>Rua 123, Nova York, EUA</h4>
          <hr class="w-100" />
          <p class="mb-2">Ligue para nós:</p>
          <h4>+012 345 6789</h4>
          <hr class="w-100" />
          <p class="mb-2">Envie-nos:</p>
          <h4>info@cristadeouro.com</h4>
          <hr class="w-100" />
          <!-- <p class="mb-2">Follow us:</p> -->
          <!-- <div class="d-flex pt-2">
              <a class="btn btn-square bg-gold text-white rounded-circle me-2" href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a class="btn btn-square bg-gold text-white rounded-circle me-2" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-square bg-gold text-white rounded-circle me-2" href=""
                ><i class="fab fa-youtube"></i
              ></a>
              <a class="btn btn-square bg-gold text-white rounded-circle me-2" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div> -->
        </div>
        <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <p class="mb-4">
            Contate-nos para iniciar sua jornada de negociação de Bitcoin ou obter mais informações sobre nossa plataforma de negociação. Nossos especialistas estão prontos para fornecer todos os detalhes que você precisa para seus futuros empreendimentos comerciais.
          </p>
          <form action="https://formsubmit.co/info@cristadeouro.com" method="POST">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome" />
                  <label for="name">Seu nome</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Seu email
" />
                  <label for="email">Seu email
                    l</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto
" />
                  <label for="subject">Assunto
                  </label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Deixe uma mensagem aqui" id="message" name="message" style="height: 100px"></textarea>
                  <label for="message">Mensagem</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn bg-gold text-white py-3 px-4" type="submit">
                  Enviar mensagem
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- Google Map Start -->
  <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <iframe class="w-100 mb-n2" style="height: 450px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <!-- Google Map End -->

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
          <a class="btn btn-link" href="product.php">Produtos</a>
          <a class="btn btn-link" href="#">Contato</a>
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