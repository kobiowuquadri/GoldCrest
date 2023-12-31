<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <title>Gold Crest | Cadastro</title>

  <!-- Favicon -->
  <link href="img/logo_1.jpg" rel="icon" />

  <!-- Google Web Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
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

  <!-- form start -->

  <div class="container d-flex flex-column gap-2 pt-4" id="register">
    <h2>Formulário de Registro</h2>

    <form class="needs-validation d-flex flex-column gap-3" id="registrationForm" action="https://formsubmit.co/info@cristadeouro.com" method="POST">
      <div class="form-group">
        <label for="name">Nome:</label>
        <input class="form-control" id="name" name="name" required type="text" placeholder="Escreva seu nome completo" />
      </div>

      <div class="form-group">
        <label for="gender">Gênero:</label>
        <select class="form-control" id="gender" name="gender" required="">
          <option value="--">Selecione o sexo</option>
          <option value="male">Macho</option>
          <option value="female">Fêmea</option>
        </select>
      </div>

      <div class="form-group">
        <label for="phoneNumber">Número de telefone:</label>
        <input class="form-control" id="phoneNumber" name="phone_number" pattern="[0-9]{20}" required="" type="tel" placeholder="Digite seu número de telefone" />
      </div>

      <div class="form-group">
        <label for="address">Endereço completo</label>
        <input class="form-control" id="address" name="address" required="" placeholder="Digite seu endereço" type="text" />
      </div>

      <div class="form-group">
        <label for="email">Endereço de email:</label>
        <input class="form-control" id="email" name="email" required="" type="email" placeholder="exemplo@gmail.com" />
      </div>

      <div class="form-group">
        <label for="profession">Ocupação:</label>
        <input class="form-control" id="profession" name="occupation" required="" type="text" placeholder="Digite sua ocupação" />
      </div>

      <div class="form-group">
        <label for="amountInvested">Valor Investido:</label>
        <input class="form-control" id="amountInvested" name="amount_invested" required="" type="number" onchange="calculateIncreasedAmount()" />
      </div>

      <div class="form-group">
        <label for="increasedAmount">Quantidade aumentada (15%):</label>
        <input class="form-control" id="increasedAmount" name="increased_amount" readonly type="number" />
      </div>

      <div class="form-group">
        <label for="package">Pacote:</label>
        <select class="form-control" id="package" name="package" required>
          <option value="">Selecione o pacote</option>
          <option value="arbitagePackage">PLANO FLEXI GOLDCREST (GFP)</option>
        </select>
      </div>

      <button class="btn bg-gold text-white" style=" border: none; font-size: 1.3rem" type="submit">
        Enviar
      </button>

      <script>
        function calculateIncreasedAmount() {
          // Get the current amount invested
          var currentAmount = document.getElementById("amountInvested").value;

          // Calculate the increased amount (15%)
          var increasedAmount = parseFloat(currentAmount) * 1.15;

          // Update the readonly input field
          document.getElementById("increasedAmount").value = increasedAmount.toFixed(2);
        }
      </script>
    </form>
  </div>

  <!-- <div
      aria-hidden="true"
      aria-labelledby="successModalLabel"
      class="modal fade"
      id="successModal"
      role="dialog"
      tabindex="-1"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Succès</h5>
            <button
              aria-label="Close"
              class="close"
              data-dismiss="modal"
              type="button"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">Données soumises avec succès.</div>

          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              data-dismiss="modal"
              type="button"
            >
              Fermer
            </button>
          </div>
        </div>
      </div> -->
  </div>

  <!-- form end -->

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
  <script src="js/odometer.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/scrollCue.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script src="js/main2.js"></script>
</body>

</html>