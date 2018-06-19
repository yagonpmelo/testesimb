<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
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
      				<h2>Cadastre-se</h2>
      					<hr>
    			</div>
			</div>
			<div class="col-md-8 col-md-offset-2">

		<form action="processa_usu.php" method="POST">
			<div class="row">
				
				<div class="col-md-6">
            		<div class="form-group">
						<input type="text" name="nome" placeholder="Nome" class="form-control" required="required>
						<p class="help-block text-danger"></p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="sobrenome" placeholder="Sobrenome" class="form-control" required="required">
						<p class="help-block text-danger"></p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="numero" placeholder="WhatsApp" class="form-control" required="required">
						<p class="help-block text-danger"></p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="login" placeholder="Login" class="form-control" required="required">
						<p class="help-block text-danger"></p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<input type="password" name="senha" placeholder="Senha" class="form-control" required="required">
						<p class="help-block text-danger"></p>
					</div>
				</div>

				<button type="submit" class="btn btn-custom btn-lg" style="margin-top: 20%;
				margin-left: -100%;">Cadastrar</button>
			</div>
			<br>
			<br>
			<a href="login.php">Faça Login</a>
		</form>
		<br>

		<a href="index.php" onclick="window.location='index.php'">Voltar</a>
</body>
</html>