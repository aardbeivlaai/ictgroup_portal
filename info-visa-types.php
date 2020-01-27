<!doctype html>
<html class="no-js" lang="">

<?php 
  require_once('php/session.php');
  require_once('php/tbc-exemption.php');
?>

<head>
  <meta charset="utf-8">
  <title>Visa types and Salary criteria - Information</title>
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
                  <li class="breadcrumb-item" aria-current="page"><a href="info-visa.php">Visa</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Visa types & Salary Criteria</li>
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
            <div class="faq-topics" class="sticky-top">
              <h4>Index</h4>
              <ul>
                <li><a href="info-visa.php">Visa</a></li>
                <li><a href="info-visa-exterus.php">Exterus</a></li>
                <li><a href="#" class="active"><b>Visa types & Salary criteria</b></a></li>
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
              <h2>Visa types and salary criteria</h2>
              <div class="single-faq">

                <p>The visa process you will go through depends on your situation. The salary criteria for a visa also
                  vary per person and are dependent on factors such as the type of visa
                  and your age. The Immigratie- en Naturalisatiedienst (IND) is the governmental institution that
                  handles all visa applications. There are several visa types that could
                  be applicable to you.

                </p>

                <p> <img src="img/visatype.png" usemap="#image-map" />
                  <map name="image-map">
                    <area onclick="popout1()" data-modal-target="#modal" coords="848,182,1010,300" shape="rect">
                    <area onclick="popout2()" data-modal-target="#modal" coords="668,450,505,562" shape="rect">
                    <area onclick="popout3()" data-modal-target="#modal" coords="179,548,346,663" shape="rect">
                  </map>

                  <div class="popup">
                    <span class="popuptext" id="myPopup1">You are subject to salary criteria based on your age: < 30
                        years or> 30 years (ICT will cover the costs of the IND fees).
                        <br>If you change employer after turning 30 years old, you will be subject to the highest salary
                        criteria.</br>
                    </span>
                    <span class="popuptext" id="myPopup2">If possible, ICT prefers that you obtain your own visa due to
                      a lower risk.
                      <br>In that case, you need to comply with the criteria set by the IND (see below).
                      <br> Whether or not this is possible and/or desirable depends on your situation<br> (factors such
                      as salary, amount of years in the Netherlands and age)
                      <br>ICT will cover the costs of the IND fees for applying for a highly skilled migrant visa.
                      <br>In case this is not a possibility, the dependency visa is still an option.</br>
                    </span>
                    <span class="popuptext" id="myPopup3">Apply for an HSM visa after the zoekjaar or immediately after
                      graduating in the Netherlands (Beng/BSc/Meng/PDeng/PhD).
                      <br>You will be subject to the lowest salary criteria of the IND and this will remain so for the
                      rest of your career in the Netherlands.<br> (ICT will cover the costs of the IND fees)</br>
                    </span>
                  </div>
                </p>

                <p>In order to do this, they will ask you to fill out some forms (Antecedents Certificate, etc.) and ask
                  you for some documents (e.g. legalized birth certificate, etc.). You may also approach your contact
                  person at Exterus for any questions regarding your visa (application).</p>

                <p>ICT highly values your well-being and integration within the Netherlands. Therefore, we also offer to
                  arrange (and pay for) the visa of your family members (spouse and/or children) if they were to move to
                  the Netherlands in the first year of your employment at ICT. Exterus will also monitor and coordinate
                  this process.</p>

                <p>If your spouse and/or child(ren) are accompanying you when first coming to the Netherlands, you can
                  inform Exterus about this. However, if they come to the Netherlands at another point in time (within
                  the first year), you need to inform HR (<a href="mailto:hr.team@ict.nl">hr.team@ict.nl</a>) for it to
                  be arranged.</p>

                <p>ICT will cover the costs regarding the visa application and arrangement of the
                  <span data-toggle="tooltip" title="Longterm Visa" data-placement="bottom" class="definition"
                    class="red-tooltip">MVV</span>
                  for your spouse and/or children. You will be responsible for the costs of the plane ticket(s) and visa
                  fees for your family.</p>

                <p>The fee will be:<Br>
                  € 171,- for the visa of a spouse<br>
                  € 57,- for the visa per child<br>
                  Note: certain conditions set by IND apply.</p>
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

  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <script>
    var toggle_1 = false;
    var toggle_2 = false;
    var toggle_3 = false;
    var popup_1 = document.getElementById("myPopup1");
    var popup_2 = document.getElementById("myPopup2");
    var popup_3 = document.getElementById("myPopup3");

    function popout1() {

      if (toggle_2 == false && toggle_3 == false) {
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
      } else if (toggle_2 != false && toggle_3 == false) {
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
      } else if (toggle_3 != false && toggle_2 == false) {
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
      } else if (toggle_3 == true && toggle_2 == true) {
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
      }
    }

    function popout2() {

      if (toggle_1 == false && toggle_3 == false) {
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
      } else if (toggle_1 != false && toggle_3 == false) {
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
      } else if (toggle_3 != false && toggle_1 == false) {
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
      } else if (toggle_3 == true && toggle_1 == true) {
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
      }
    }

    function popout3() {

      if (toggle_2 == false && toggle_1 == false) {
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
      } else if (toggle_2 != false && toggle_1 == false) {
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
      } else if (toggle_1 != false && toggle_2 == false) {
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
      } else if (toggle_2 == true && toggle_1 == true) {
        popup_1.classList.toggle("show");
        toggle_1 = !toggle_1;
        popup_2.classList.toggle("show");
        toggle_2 = !toggle_2;
        popup_3.classList.toggle("show");
        toggle_3 = !toggle_3;
      }
    }
  </script>


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