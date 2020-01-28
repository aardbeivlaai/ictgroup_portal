<!doctype html>
<html class="no-js" lang="">

<?php 
  require_once('php/session.php');
  require_once('php/tbc-exemption.php');
?>

<head>
  <meta charset="utf-8">
  <title>Visa Exterus - Information</title>
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
                  <li class="breadcrumb-item active" aria-current="page">Exterus</li>
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
      <div class="faqvisa-content-area" >
        <div class="row">
          <div class="col-md-3">
            <div class="faq-topics" class="sticky-top">
              <h4>Index</h4>
              <ul>
                <li><a href="info-visa.php" >Visa</a></li>
                <li><a href="#" class="active"><b>Exterus</b></a></li>
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
              <h2>Exterus</h2>
              <div class="single-faq">

                <p>Exterus is specialized in immigration law and will therefore be your point of contact
                  throughout the whole procedure. Their services consist of the following:
                   </p>

                   <p>- Drafting and submitting the complete application for your Dutch residence permit together with your work authorization (e.g. as a <span data-toggle="tooltip" title="High Skilled Migrant" data-placement="bottom" class="definition" class="red-tooltip">HSM</span>); <br>
                    - Monitoring the process with the Dutch authorities and/or embassies of your home country;<br>
                    - Arranging any necessary appointments (e.g. visa application); <br>
                    - Verifying the details on your Dutch permit as HSM; and <br>
                    - Applying for the 30% tax facility (if you’re eligible). <br>
                    </p>

                    <p>In order to do this, they will ask you to fill out some forms (Antecedents Certificate, etc.) and ask you for some documents (e.g. legalized birth certificate, etc.). You may also approach your contact person at Exterus for any questions regarding your visa (application).</p>

                    <p>ICT highly values your well-being and integration within the Netherlands. Therefore, we also offer to arrange (and pay for) the visa of your family members (spouse and/or children) if they were to move to the Netherlands in the first year of your employment at ICT. Exterus will also monitor and coordinate this process.</p>

                    <p>If your spouse and/or child(ren) are accompanying you when first coming to the Netherlands, you can inform Exterus about this. However, if they come to the Netherlands at another point in time (within the first year), you need to inform HR (<a href="mailto:hr.team@ict.nl">hr.team@ict.nl</a>) for it to be arranged.</p>

                    <p>ICT will cover the costs regarding the visa application and arrangement of the 
                      <span data-toggle="tooltip" title="Regular Provisional Residence Permit" data-placement="bottom" class="definition" class="red-tooltip">MVV</span>
                       for your spouse and/or children. You will be responsible for the costs of the plane ticket(s) and visa fees for your family.</p>

                    <p>The fee will be:<Br>
                      € 171,- for the visa of a spouse<br>
                      € 57,- for the visa per child<br>
                      Note: certain conditions set by <span data-toggle="tooltip" title="Immigration and Naturalisation Service" data-placement="bottom" class="definition" class="red-tooltip">IND</span> apply.</p>
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
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
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