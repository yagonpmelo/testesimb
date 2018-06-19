<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Slider
	================================================== -->
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet" media="screen">

	<!-- Stylesheet
	================================================== -->
	<link rel="stylesheet" type="text/css"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">
	<style>
		#menu.navbar-default {
			background-color: #b73c9b;
			border-color: rgba(231, 231, 231, 0);
		}
		h1{
			margin: 0 0 20px 0;
			font-weight: 400;
			font-size: 36px;
			color: #b73c9b;
			text-transform: uppercase;
			}
	</style>
</head>
<body>
<!-- Navigation
	==========================================-->
	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container"> 
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand page-scroll" href="#page-top">Simbora</a> </div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			 <ul class="nav navbar-nav navbar-right">
        			 <li><a href="#about" class="page-scroll">Sobre</a></li>
        			 <li><a href="#services" class="page-scroll">Serviços</a></li>
        			 <!--<li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        			<li><a href="#testimonials" class="page-scroll">Testimonials</a></li>-->
        			 <li><a href="#contact" class="page-scroll">Fale Conosco</a></li>
      			 </ul>
    			</div>
				<!-- /.navbar-collapse --> 
			</div>
			<!-- /.container-fluid --> 
		</nav>
		<div class="container">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div id="contact" class="text-center">
  			<div class="container">
    			<div class="section-title center">
      				<h2>Login</h2>
      				 <hr>
    			</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
      
      <!--<form name="sentMessage" id="contactForm" novalidate>-->

      <form action="processa_login.php" method="POST">
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              
              <!--<input type="text" id="name" class="form-control" placeholder="Login" required="required">-->

              <input type="text" name="login" class="form-control" placeholder="Login" required="required">

              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              
              <!--<input type="password" id="email" class="form-control" placeholder="Senha" required="required">-->
              
              <input type="password" name="senha" class="form-control" placeholder="Senha" required="required">

              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <!--<div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>-->
        <button type="submit" class="btn btn-custom btn-lg">Entrar</button>
      </form>

      	<a href="cads_usuariocss.php">Não sou Cadastrado</a>
      		<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
      	<a onclick="window.location='indexcss.php'">Voltar</a>


      <!--<div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>-->
    </div>
	</body>
	</html>