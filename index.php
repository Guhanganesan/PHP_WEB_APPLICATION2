<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payilagam</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/icon.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php" style="font-weight:bold;color:white;">பயிலகம்</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll" style="color:white;font-size:18px;">Home</a></li>

        
        
        <li><a href="#team-section" class="page-scroll" style="color:white;font-size:18px;">Team</a></li>
        <li><a href="#contact-section" class="page-scroll" style="color:white;font-size:18px;">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to <span class="color" style="color:white;">Payilagam</span></h1>
    <p style="color:white;font-size:18;">Our goal is to provide latest technology with smartest way</p>
    <div class="clearfix"></div>
    <a href="/Application/Index.php" style="color:white;
    background:rgba(10, 9, 6,0.1);" class="btn btn-default btn-lg page-scroll">Application</a> </div>
</header>



<!-- Team Section -->
<div id="team-section">
  <div class="container">
    <div class="section-title">
      <h2>Meet the Team</h2>
      <hr>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/mani.jpg" alt="..." class="team-img">
          <div class="caption">
            <h3>Mr. Manikandan B.E, M.B.A.,</h3>
            <p>Director</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/muth.png" alt="..." class="team-img">
          <div class="caption">
            <h3>Mr. Muthuramalingam Krishnan B.Tech.,</h3>
            <p>CEO</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/naren.jpg" alt="..." class="team-img">
          <div class="caption">
            <h3>Mr. Narendran B.E.,</h3>
            <p>Manager</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/guha.jpg" alt="..." class="team-img">
          <div class="caption">
            <h3>Mr. Guhan M.E.,</h3>
            <p>Consultant</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<!-- Contact Section -->
<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
    </div>
    <div class="col-md-4">
      <h4>Contact info</h4>
      <div class="space"></div>
      <p><i class="fa fa-map-marker"></i>1st Main Road,<br>
        Vijaya Nagar, Velachery, <br>
        Chennai: 600042.</p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o"></i>info@payilagam.com</p>
      <div class="space"></div>
      <p><i class="fa fa-phone"></i>+91- 8883 77 55 33</p>
    </div>
    <div class="col-md-8">
        <h4><a href="/Application/Index.php">  Click here for Application Form</a></h4>
        
      <h4>Leave us message</h4> 
      
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/Payilagam"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/payilagam"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://plus.google.com/u/0/+Payilagamtraining"><i class="fa fa-dribbble"></i></a></li>
        
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p style="color:white;"> Designed by <a href="https://payilagam.com/" rel="nofollow" style="color:white;">Guhan (Web Developer & Consultant), Payilagam, Chennai:600042.</a></p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>