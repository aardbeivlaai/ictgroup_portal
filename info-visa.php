<!doctype html>
<html class="no-js" lang="">

<?php 
  require_once('php/session.php');
  require_once('php/tbc-exemption.php');
?>

<head>
  <meta charset="utf-8">
  <title>Visa - Information</title>
  <meta name="description" content="This Is A Protfolio Website">
  <meta name="title" content="This Is A Protfolio Website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="img/logo-ict.png">
  <link rel="icon" type="ico" sizes="16x16" href="img/logo-ict.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- Normalizer CSS -->
  <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">
  <!-- Resrt CSS -->
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
  <!-- google font  -->
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
  <!-- Main CSS -->
  <link rel="stylesheet" href="style.css" type="text/css" media="all">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!-- header area start  -->
  <div class="header-area">
    <div class="container-fluid">
      <div class="header">
        <div class="row align-center">
          <div class="col-md-6">
            <div class="m-logo-area">
              <div class="logo-area">
                <div class="logo">
                  <div class="logo-img">
                    <img src="img/logo-ict.png" alt="">
                  </div>
                </div>
                <div class="h-search">
                  <i class="fa fa-search"></i>
                  <input type="text" placeholder="Search...">
                </div>
              </div>
              <div class="menu-bar">
                <i class="fa fa-bars"></i>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu">
              <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="Information.html" class="active">Information</a></li>
                <li><a href="faqtopics.html">FAQ</a></li>
                <li><a href="Checklist.html">Checklist</a></li>
                <li><a href="profile.php">Profile</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- header area end  -->

  <!-- visa area start  -->
  <div class="faqvisa-area prototype-m">
    <div class="container-fluid">
      <div class="faqvisa-h">
        <div class="row">
          <div class="col-md-6">
            <div class="faqvisa-hl">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="Information.html">Information</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Visa</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faqvisa-hr">
              <div class="faqh-search">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search In Visa">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="faqvisa-content-area">
        <div class="row">
          <div class="col-md-3">
            <div class="faq-topics" class="sticky">
              <h4>Index</h4>
              <ul>
                <li><a href="#" class="active"><b>Visa</b></a></li>
                <li><a href="info-visa-exterus.php">Exterus</a></li>
                <li><a href="info-visa-types.php">Visa types & Salary criteria</a></li>
                <li><a href="#">Leave options</a></li>
                <li><a href="#">Mobility options</a></li>
                <li><a href="#">Validity of Visa/permit</a></li>
                <li><a href="#">Termination of employment contract</a></li>
                <li><a href="#">Necessary documents for ICT</a></li>
                <?php 

                  if ($_SESSION['Medic'] == "Yes"){
                    echo'<li><a href="#">TBC examination</a></li>';
                  }else
                  {

                  }
                   
                ?>

                
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="faqvisa">
              <h2>Visa</h2>
              <div class="single-faq">

                <p>First and foremost, your visa application needs to be completed in order for you to start your first
                  work day at ICT. </p>
              </div>
              <div class="single-faq">

                <p>The application process approximately takes <span style="color: #0097B1; font-weight: 600;">six to
                  eight weeks.</span> In order to smoothly organize this process, we have partnered with Exterus: a company
                  that will guide you through the visa application. Someone from
                  Exterus will contact you about all the steps that you need to undertake.</p>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- visa area end -->

  <!-- Normalizer Js -->
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <!-- jQuery Js -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
  </script>
  <!-- Plugins Js -->
  <script type="text/javascript" src="js/plugins.js"></script>
  <!-- Pooper Js -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap Js -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- Main Js -->
  <script type="text/javascript" src="js/script.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>