<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		h1{
			margin: 0 0 20px 0;
			font-weight: 400;
			font-size: 36px;
			color: #b73c9b;
			text-transform: uppercase;
		}
	</style>
</head>
</head>
<body>
	<?php include_once "menu.php" ?>
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
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" class="form-control" name="login" placeholder="Login">
					<p class="help-block text-danger"></p>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<input type="password" class="form-control" name="senha" placeholder="Senha">
				</div>
			</div>
				<button type="submit" class="btn btn-custom btn-lg">Entrar</button>	
		</form>
		<a href="cads_usuario.php">Não sou Cadastrado</a>
		<br>
		<br>
		<a onclick="window.location='index.php'">Voltar</a>
</body>
</html>