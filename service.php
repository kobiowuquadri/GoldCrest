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
  <title>Gold Crest | Serviços</title>
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
        <a href="home.php" class="nav-item nav-link">Lar</a>
        <a href="service.php" class="nav-item nav-link active">Serviços</a>
        <a href="product.php" class="nav-item nav-link">Produtos</a>
        <a href="contact.php" class="nav-item nav-link">Contato</a>
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
          <h1 class="display-4 mb-3 animated slideInDown">Serviços</h1>
          <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="home.php" class="text-gold">Lar</a>
              </li>
              <li class="breadcrumb-item">
                <a href="product.php" class="text-gold">Produtos</a>
              </li>
              <li class="breadcrumb-item">
                <a href="contact.php" class="text-gold">Contato</a>
              </li>
              <li class="breadcrumb-item">
                <a href="register.php" class="text-gold">Cadastro</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
              Serviços
              </li>
            </ol>
          </nav>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <img class="img-fluid animated pulse infinite" style="animation-duration: 3s" src="img/cryptocurrency-6601591_1280-modified.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Service Start -->
  <div class="container-xxl bg-light py-5 my-5">
    <div class="container py-5">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
        <h1 class="display-6">Serviços</h1>
        <p class="text-gold fs-5 mb-5">
        Compra, Venda e Arbitragem de Criptomoedas        </p>
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
            <h5 class="mb-3">Plataforma varejista de negociação à vista de Bitcoin</h5>
            <p>
            Gold Crest é uma plataforma varejista líder de negociação à vista de Bitcoin, que oferece um ambiente seguro e fácil de usar para os usuários negociarem Bitcoin ao preço de mercado atual. Com nossas ferramentas avançadas de negociação e intuitivas, você pode executar negociações rápidas e simples com confiança. Quer você seja um trader iniciante ou experiente, Gold Crest tem tudo que você precisa para ter sucesso no mundo da negociação à vista de criptografia.
            </p>
            <p>
            A negociação à vista de Bitcoin é o processo de compra e venda de Bitcoin instantaneamente ao preço de mercado atual. Ao contrário da negociação de futuros, que envolve contratos baseados em preços futuros, a negociação à vista concentra-se no mercado atual. Os traders à vista podem tirar vantagem dos movimentos de preços de curto prazo, comprando quando o preço está baixo e vendendo quando está alto. Os comerciantes à vista podem usar moeda fiduciária ou outras criptomoedas para fazer suas negociações. Embora a negociação à vista possa ser uma atividade de alto risco e alta recompensa, a Gold Crest simplifica o processo com a sua plataforma fácil de usar, que reduz a exposição dos assinantes ao risco.
            </p>
            <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-white p-5">
            <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
            <h5 class="mb-3">Investimento em Bitcoin</h5>
            <p>
            Nossa avançada plataforma de investimento em moeda digital oferece uma solução simplificada e confiável para indivíduos e instituições que buscam maximizar o potencial de seus portfólios de Bitcoins e criptomoedas. Nossos sofisticados algoritmos de IA fornecem insights e recomendações de mercado em tempo real, permitindo que você tome decisões de investimento informadas. Oferecemos uma interface segura e fácil de usar que facilita a compra, venda e negociação de moedas digitais. Com nossa plataforma, você pode se concentrar em aumentar seu patrimônio com confiança." Adquira um pacote de portfólio hoje mesmo.
            </p>
            <p>
            Nossos algoritmos de IA são projetados para fornecer insights e recomendações acionáveis, com base em dados de mercado em tempo real e tendências históricas. Os algoritmos estão em constante aprendizagem e adaptação, garantindo que permaneçam na vanguarda da análise e previsão de mercado. Com nossa plataforma baseada em IA, você pode tomar decisões de investimento informadas e com confiança, sabendo que está aproveitando ao máximo os dados e a tecnologia mais recentes. Deixe que nossos algoritmos de IA façam o trabalho pesado, para que você possa se concentrar em fazer os melhores investimentos possíveis.
            </p>
            <!-- <a href="">Read More <i class="fa fa-arrow-right ms-2"></i></a> -->
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-white p-5">
            <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
            <h5 class="mb-3">Arbitragem Cambial</h5>
            <p>
            Ao automatizar o processo de localização e exploração de oportunidades de arbitragem em múltiplas arbitragens, nossa plataforma elimina a necessidade de análises manuais demoradas e propensas a erros. Isso permite que você se concentre em fazer mais negociações e, em última análise, em mais lucros. Fornecemos uma interface de usuário simples e intuitiva, facilitando para qualquer pessoa aproveitar o poder de nossa tecnologia. Com potencial para obter retornos significativos sobre seus investimentos em criptografia, nossa plataforma oferece uma solução de ponta para investidores experientes.
            </p>
            <p>
            Nossa plataforma utiliza algoritmos avançados de aprendizado de máquina para monitorar e analisar preços em uma ampla gama de arbitragens de criptomoedas. Estes algoritmos identificam oportunidades de arbitragem, que são então executadas automaticamente pelos nossos bots de negociação. Os bots são projetados para minimizar os custos de transação e maximizar os lucros, tornando-os uma forma altamente eficiente e econômica de aproveitar as vantagens dos mercados criptográficos. Além disso, nossa plataforma foi projetada para proteger seus investimentos, implementando medidas de segurança como autenticação de dois fatores e armazenamento refrigerado para fundos criptográficos.
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
          <a class="btn btn-link" href="#">Serviços</a>
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

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>