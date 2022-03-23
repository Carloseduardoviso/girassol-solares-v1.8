<?php

    if(isset($_POST['submit']))
    {
         print_r('Nome: ' . $_POST['name']);
         print_r('<br>');
         print_r('Email: ' . $_POST['email']);
         print_r('<br>');
         print_r('Assunto: ' . $_POST['subject']);
         print_r('<br>');
         print_r('Message: ' . $_POST['message']);
         print_r('<br>');
         
        include_once('config.php');

        $Nome = $_POST['name'];
        $Email = $_POST['email'];
        $Assunto = $_POST['subject'];
        $Message = $_POST['message'];
    
        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,subject,message) 
        VALUES ('$Nome','$Assunto','$Message'");

        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link rel="shortcut icon" type="imagex/png" href="./assets/images/logo.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">



  <title>Bem-Vindo ao Girassol Solares</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!---->
</head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Bem-Vindo ao Girassol Solares</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <!-- <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li> -->
              <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>
              <li><a
                  href="https://wa.me/55699269-3502/?text=Bom%20dia%20estou%20interessado%20em%20instalar%20umas%20placas%20solares"><i
                    class="fa fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              Girassol Solares </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <!--<li><a href="meetings.html"></a></li>-->
              <!-- <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>-->
              <!--<li class="has-sub">
                  <a href="javascript:void(0)">Pages</a>
              <ul class="sub-menu">
                  <li><a href="meetings.html">Upcoming Meetings</a></li>
                  <li><a href="meeting-details.html">Meeting Details</a></li>
                  
              </ul>
              </li>-->
              <li class="scroll-to-section"><a href="#courses">Apresentação</a></li>
              <li class="scroll-to-section"><a href="#contact">Contato</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
      <source src="assets/images/fundo-tela.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h6>JÁ PENSOU EM FAZER UM INVERTIMENTO?</h6>
              <h2>Na Natureza, nada se cria, nada se perde, tudo se transforma</h2>
              <p>A natureza usa a energia Solar a milhares de anos, agora é a vez da raça humana usa-la em toda sua
                potência.
                Com a girassol solares, e com os melhores custos, isso se torna possível.
              </p>
              <div class="main-button-red">
                <div class="scroll-to-section"><a href="#contact">JUNTE-SE A NÓS AGORA!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <div class="icon">
                <img src="assets/images/free.png" alt="">
              </div>
              <div class="down-content">
                <h4>Frete grátis</h4>
                <p>para kits com microinversor.</p>
                <p>*100% grátis para as regiões norte e norteste, e 50% de desconto para as demais regiões.*</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/desconto.png" alt="">
              </div>
              <div class="down-content">
                <h4>Doblo Black friday</h4>
                <p>Para comemorar a estreia da Girassol Solares.</p>
                <p>Toda loja por até 30% OFF por tempo indeterminado.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/black-friday-sale.png" alt="">
              </div>
              <div class="down-content">
                <h4>OFERTA BLACK FRAUDE</h4>
                <p>Kits off grid com</p>
                <p>BATERIA DE LÍTIO</p>
                <p>&nbsp</p>
                <P>CONFIRA!</P>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/caixa.png" alt="">
              </div>
              <div class="down-content">
                <h4>Lançamentos</h4>
                <p>Veja os novos lançamentos de controladores de carga, bombas TPON e inversores de última geração só na </p>
                <p>Girassol Solares!</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="assets/images/interrogacao-980.png" alt="">
              </div>
              <div class="down-content">
                <h4>Você sabia?</h4>
                <p>Que existe três tipos de energia solar:</p>
                <p>A energia solar fotovoltaica, a térmica e a heliotérmica</p>                
                <p>Saiba tudo sobre energia solar</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!----
  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Upcoming Meetings</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Meeting Catgories</h4>
            <ul>
              <li><a href="#">Sed tempus enim leo</a></li>
              <li><a href="#">Aenean molestie quis</a></li>
              <li><a href="#">Cras et metus vestibulum</a></li>
              <li><a href="#">Nam et condimentum</a></li>
              <li><a href="#">Phasellus nec sapien</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Upcoming Meetings</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$22.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="meeting-details.html">
                    <h4>New Lecturers Meeting</h4>
                  </a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$36.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html">
                    <h4>Online Teaching Techniques</h4>
                  </a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$14.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html">
                    <h4>Higher Education Conference</h4>
                  </a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>$48.00</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html">
                    <h4>Student Training Meetup</h4>
                  </a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <!----
  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You
                  can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please
                  contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                <span>About Edu Meeting HTML Template</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a
                      rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a
                    working contact form script, please visit <a href="https://templatemo.com/contact"
                      target="_parent">our contact page</a> for more info.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>HTML CSS Bootstrap Layout</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper
                    sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae.
                    Aliquam a elit massa.<br><br>
                    Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat
                    aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec
                    mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Please tell your friends</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper
                    justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                    Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat
                    luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                </div>
              </div>
            </article>
            <article class="accordion last-accordion">
              <div class="accordion-head">
                <span>Share this to your colleagues</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac
                    ante ipsum primis in faucibus.<br><br>
                    Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut
                    tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>OFERTAS</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/painel-solar/painel-solar-10w.png" alt="Course One">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 10W - Resun RSM010-P</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$89,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/painel-solar-20w.png" alt="Course Two">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 20W - Resun RSM020-P</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$129,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/painel-solar-30w.png" alt="">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 30W - Resun RSM030-P</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$169,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/painel-solar-60w.png" alt="">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 60W - Resun RSM060-P</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$279,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/painel-solar-100w.png" alt="">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 100W - Resun RSM-100P</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$349,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/painel-solar-155w.png" alt="">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 155W - Resun RS6E-155M </h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$459,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <img src="assets/painel-solar/painel-solar-550w.png" alt="">
              <div class="down-content">
                <h4>Painel Solar Fotovoltaico 550W - Sunova SS-550-72-M</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>R$1.899,00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--
            <div class="item">
              <img src="assets/painel-solar/mini-panel-solar-10w.png" alt="">
              <div class="down-content">
                <h4>PROMOÇÃO 10</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>PREÇO</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/mini-panel-solar-10w.png" alt="">
              <div class="down-content">
                <h4>PROMOÇÃO 11</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>PREÇO</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/painel-solar/mini-panel-solar-10w.png" alt="">
              <div class="down-content">
                <h4>PROMOÇÃO 12</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>PREÇO</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  -->
  </section>
  <!---
  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">94</div>
                    <div class="count-title">Succesed Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">126</div>
                    <div class="count-title">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">New Students</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/painel-solar/play-icon.png"
                alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  --->

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form action="index.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>VAMOS ENTRAR EM CONTATO.</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="SEU NOME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="SEU EMAIL...*"
                        required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="ASSUNTO...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message"
                        placeholder="SUA MENSAGEM..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">ENVIE MENSAGEM AGORA</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Número de telefone</h6>
                <span>(69) 99269-3502</span>
              </li>
              <li>
                <h6>Endereço eletrônico</h6>
                <span>solaresgirassol @gmail.com</span>
              </li>
              <li>
                <h6>Endereço</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>http://www.girassol .solar.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>© 2021 Copyright - Girassol Solares - Desenvolvido por: Carlos Eduardo Carvalho do Viso -
        Departamento de T.I.

      </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos
        },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
  </script>
</body>

</body>

</html>