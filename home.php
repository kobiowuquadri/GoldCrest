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
  <title>Gold Crest | Lar</title>
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

  <!-- Header Start -->
  <div class="container-fluid hero-header bg-light py-4 mb-5">
    <div class="container py-4">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <h1 class="display-6 mb-3 animated slideInDown">
          TRADING CRYPTO É O FUTURO DAS FINANÇAS - GANHE 1,5% POR DIA COM A PLATAFORMA GOLDCREST SPOT TRADE
          </h1>
          <p class="animated slideInDown">
          O futuro das finanças está sendo moldado pela ascensão da criptomoeda. À medida que a criptografia se torna mais popular, os investidores têm novas oportunidades de ganhar dinheiro através da negociação à vista. Gold Crest Opportunity fornece uma plataforma para você aproveitar essas oportunidades. Portanto, não fique para trás – explore as possibilidades da criptografia hoje mesmo!
          </p>
          <a href="register.php" class="btn bg-gold text-white py-3 px-4 animated slideInDown">Registro</a>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <img class="img-fluid animated pulse infinite" style="animation-duration: 3s" src="img/hero_4-modified.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->
  <!-- Features -->
  <div class="features-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <span class="top-title">NOSSOS RECURSOS</span>
        <h2>
        Somos uma plataforma de negociação spot criptografada de primeira linha, elogiada por nosso excelente desempenho. Damos aos investidores as ferramentas de que necessitam para prosperar no mundo em rápida evolução das criptomoedas.
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="single-features-card">
            <div class="features-icon">
              <img src="img/features-icon-1.svg" alt="features-1" />
            </div>
            <h3>CONFIANÇA E CONFIABILIDADE</h3>
            <p>
            Estamos comprometidos com os mais altos padrões de transparência, confiabilidade e integridade. Você pode contar conosco para conduzir nossos negócios com o máximo profissionalismo e discrição.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="single-features-card bg-color-1">
            <div class="features-icon">
              <img src="img/features-icon-2.svg" alt="features-1" />
            </div>
            <h3>GARANTIA DE DEVOLUÇÃO DE DINHEIRO</h3>
            <p>
            Garantimos a satisfação com os nossos serviços e asseguramos que todos os fundos estão seguros e protegidos.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="single-features-card bg-color-2">
            <div class="features-icon">
              <img src="img/features-icon-3.svg" alt="features-1" />
            </div>
            <h3>TRABALHO EM EQUIPE PROFISSIONAL</h3>
            <p>
            Nossa equipe de especialistas financeiros qualificados possui uma riqueza de conhecimento e experiência nas áreas de finanças corporativas e investimentos.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-6">
          <div class="single-features-card bg-color-3">
            <div class="features-icon">
              <img src="img/features-icon-4.svg" alt="features-1" />
            </div>
            <h3>NEGOCIAÇÃO ORIENTADA POR IA</h3>
            <p>
            Nossa negociação especializada orientada por IA usa algoritmos sofisticados para analisar grandes quantidades de dados e tomar decisões informadas sobre quando e onde investir para gerar lucro.
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
            <p>Endossado por organizações notabe, incluindo</p>
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
            <h1 class="display-6">Sobre nós</h1>
            <p class="text-gold fs-5 mb-4">
            A plataforma de criptomoeda mais confiável do mercado.
            </p>
            <p>
            Como uma plataforma de negociação de criptomoedas proeminente, orgulhamo-nos dos nossos sofisticados protocolos de segurança e rigorosos padrões de conformidade.


            </p>
            <p class="mb-4">
            Nossa infraestrutura de última geração, alimentada por criptografia avançada e autenticação multifatorial, foi projetada para garantir a segurança dos ativos de nossos usuários.         </p>
            <p class="mb-4">
            Estamos especialmente orgulhosos da nossa plataforma de negociação à vista de última geração, que é amplamente reconhecida como uma das mais seguras e confiáveis ​​do setor. No centro do nosso sucesso está o nosso compromisso em fornecer uma experiência de usuário premium, sustentada por uma infraestrutura de segurança robusta.          </p>
            <p class="mb-4">
            Estamos constantemente inovando e evoluindo nossa plataforma para atender às necessidades de nossos usuários e nos esforçamos para permanecer na vanguarda do cenário de negociação de criptomoedas. Levamos muito a sério a confiança dos nossos usuários e temos orgulho de sermos um varejista líder no comércio à vista.
            </p>
            <p class="mb-4">
            Nossa missão é fornecer uma plataforma segura e fácil de usar que permita que nossos usuários atinjam seus objetivos de negociação de criptografia.
            </p>
            <h6 class="display-6 fw-bold">Nosso foco</h6>
            <div class="d-flex align-items-center mb-2">
              <i class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"></i>
              <span>
Plataforma segura e gratificante para varejistas de negociação Crypto Spot</span>
            </div>
            <div class="d-flex align-items-center mb-2">
              <i class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"></i>
              <span>Lucratividade da redução pela metade do Bitcoin </span>
            </div>
            <div class="d-flex align-items-center mb-4">
              <i class="fa fa-check bg-light text-gold btn-sm-square rounded-circle me-3 fw-bold"></i>
              <span>Realização da visão SMART em negociação de moeda.</span>
            </div>
            <a class="btn bg-gold text-white py-3 px-4" href="register.php">Junte-se a nós</a>
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
        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
          <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
          <h1 class="display-4" data-toggle="counter-up">27</h1>
          <p class="fs-5 text-gold mb-0">Transações de hoje</p>
        </div>
        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
          <img class="img-fluid mb-4" src="img/icon-10.png" alt="" />
          <h1 class="display-4" data-toggle="counter-up">1050</h1>
          <p class="fs-5 text-gold mb-0">Transações Mensais</p>
        </div>
        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
          <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
          <h1 class="display-4" data-toggle="counter-up">25002</h1>
          <p class="fs-5 text-gold mb-0">Total de transações</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Facts End -->

  <!-- Features Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
        <h1 class="display-6">Por que nós!</h1>
        <p class="text-gold fs-5 mb-5">O melhor da indústria de criptografia</p>
      </div>
      <div class="row g-5 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="d-flex align-items-start">
            <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="" />
            <div class="ps-4">
              <h5 class="mb-3">Fácil de começar</h5>
              <span>Nossa plataforma foi projetada para ser fácil de usar, desde a inscrição até a negociação. Taxas baixas e ótimas taxas simplificam o início.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="d-flex align-items-start">
            <img class="img-fluid flex-shrink-0" src="img/icon-6.png" alt="" />
            <div class="ps-4">
              <h5 class="mb-3">Seguro e protegido</h5>
              <span>Seu investimento em criptografia está seguro e protegido com nossa plataforma alimentada por IA. Você pode confiar em nossos algoritmos avançados para manter seus fundos protegidos e gerar os melhores retornos possíveis.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="d-flex align-items-start">
            <img class="img-fluid flex-shrink-0" src="img/icon-5.png" alt="" />
            <div class="ps-4">
              <h5 class="mb-3">Planos acessíveis</h5>
              <span>Nossa plataforma oferece uma gama de opções que se adaptam a qualquer orçamento, para que você encontre o plano perfeito para suas necessidades.</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="d-flex align-items-start">
            <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="" />
            <div class="ps-4">
              <h5 class="mb-3">Armazenamento seguro</h5>
              <span>Armazenamento seguro para o seu Bitcoin, garantido. Recursos de segurança de última geração protegem seus ativos.</span>
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
            <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="" />
            <div class="ps-4">
              <h5 class="mb-3">Suporte 24 horas por dia, 7 dias por semana</h5>
              <span>"Precisa de ajuda? Estamos aqui para ajudá-lo 24 horas por dia, 7 dias por semana. Nossa equipe de atendimento ao cliente está sempre disponível para responder às suas perguntas e esclarecer quaisquer dúvidas.</span>
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
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
        <h1 class="display-6">Serviços</h1>
        <p class="text-gold fs-5 mb-5">
        Comprar, vender e arbitrar criptomoedas
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
            <h5 class="mb-3">Varejista de negociação à vista de Bitcoin</h5>
            <p>
            Nossa empresa é fornecedora líder de serviços de negociação à vista de Bitcoin, oferecendo uma plataforma segura e confiável para compradores e vendedores. Estamos empenhados em fornecer uma experiência comercial tranquila e segura, protegendo todas as partes envolvidas na transação. Quer pretenda fazer uma compra grande ou complexa, os nossos serviços de negociação à vista foram concebidos para satisfazer as suas necessidades.
            </p>
            <a href="service.php">consulte Mais informação <i class="fa fa-arrow-right ms-2"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-white p-5">
            <img class="img-fluid mb-4" src="img/icon-9.png" alt="" />
            <h5 class="mb-3">Investimento em Bitcoin</h5>
            <p>
            O investimento em Bitcoin é simples e inteligente. Com nossa plataforma, você pode investir em Bitcoin com facilidade e confiança. Nossos sofisticados algoritmos de IA ajudam você a aproveitar ao máximo seu investimento. É hora de assumir o controle do seu futuro financeiro!
            </p>
            <a href="service.php">consulte Mais informação <i class="fa fa-arrow-right ms-2"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-white p-5">
            <img class="img-fluid mb-4" src="img/icon-5.png" alt="" />
            <h5 class="mb-3">Arbitragem de criptomoeda</h5>
            <p>
            O futuro da arbitragem de criptomoedas está aqui! Nossa plataforma oferece uma maneira simples e eficiente de comprar, vender e negociar Bitcoin e outras criptomoedas. Com a nossa tecnologia avançada de arbitragem, você pode aproveitar a nossa plataforma de negociação à vista para maximizar os lucros. Não perca as oportunidades que esperam por você no mundo da criptografia
            </p>
            <a href="service.php">consulte Mais informação <i class="fa fa-arrow-right ms-2"></i></a>
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


  <!-- testimonials -->
  <div class="testimonials-area pt-100 pb-100">
    <div class="d-flex justify-content-center align-items-center flex-column text-center p-3">
      <span class="top-title text-gold fs-1">Depoimentos</span>
      <h2>O que nossos clientes dizem</h2>
      <p>
      Na Gold Crest, a qualidade do nosso serviço e a nossa boa vontade falam por nós. Algumas palavras dos nossos clientes em todo o país.
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
            É simplesmente o melhor lugar para investir seu dinheiro. Quando se trata de paz de espírito, você me dá tudo. Nem uma única promessa falhou. Por favor continue.
            </p>
            <h5 class="card-title">Fransisca Jones</h5>
            <p class="card-subtitle mb-2 text-muted">BAP Investidor País de Gales</p>
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
            Apenas um rápido, mas enorme, obrigado por tudo o que você fez para nos ajudar a realizar esse sonho. É tão lindo – e ainda estou em choque com a realidade – mudar meu negócio para o país dos meus sonhos.
            </p>
            <h5 class="card-title">Michal Bluum</h5>
            <p class="card-subtitle mb-2 text-muted">
            Investidor BAP Austrália
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
            Sou um testemunho vivo do seu serviço de qualidade. Agradeço todos os seus esforços para ajudar os proprietários de empresas. O processo de empréstimo foi simples e mais rápido que os bancos locais. O pouco investimento com você está rendendo mais que o meu negócio.
            </p>
            <h5 class="card-title">Zachary Mallory</h5>
            <p class="card-subtitle mb-2 text-muted">
            BAPlus Investidor Luxr
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FAQs Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
        <h1 class="display-6">Perguntas frequentes</h1>
        <p class="text-gold fs-5 mb-5">perguntas frequentes</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                O que é criptomoeda?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Moeda digital ou virtual usando criptografia para segurança.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Como negociar criptografia no Gold Crest?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Escolha um pacote de arbitragem, crie uma conta e compre usando moeda fiduciária.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Em quais criptomoedas investir?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Opções populares como Bitcoin e Ethereum, etc.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                O investimento em criptografia é arriscado?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Sim, os preços podem ser voláteis; esteja preparado para ganhos e perdas potenciais.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                O que é um blockchain?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Uma tecnologia de contabilidade descentralizada e distribuída subjacente à maioria das criptomoedas.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Implicações fiscais dos ganhos criptográficos no Gold Crest?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Você tem direito ao pagamento acordado, pagamentos de impostos classificados como Gold Crest.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Como evitar fraudes?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Tenha cuidado com esquemas fraudulentos, verifique as fontes e use plataformas seguras.
                </div>
              </div>
            </div>
            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Devo seguir as tendências do mercado?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                Keep informed, but trade decision rely solely on Goldcrest.
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
          <a class="btn btn-link" href="#">Lar</a>
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