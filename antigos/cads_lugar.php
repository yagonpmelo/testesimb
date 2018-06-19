<?php
 
include 'conexao.php';
session_start();
if ($_SESSION['logado'] == false){
	header('location:index.php');
}
?>



<!DOCTYPE html>
  <head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Cadastrar</title>
	</head>
	<body>
		<a href="index.php">Mapa</a><br><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa_cad.php">
			<label>Nome: </label>
			<input type="text" name="name" placeholder="Nome da Empresa ou Filial"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="address" placeholder="Digite o número e o Logradouro"><br><br>
			
			<label>Latitude: </label>
			<input type="text" name="lat" placeholder="Digite a latitude"><br><br>
			
			<label>Longitude: </label>
			<input type="text" name="lng" placeholder="Digite a mensagem"><br><br>		
			
			<label>Tipo da Empresa: </label>
			<input type="text" name="type" placeholder="Educação, Restaurante..."><br><br>	
		
			<input type="submit" value="Cadastrar"><br><br>
		</form>
	</body>
</html>















<!--<!DOCTYPE html >
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<title>Cadastrar Endereço</title>

</head>

<body>
	
	<form action="processa_cad.php?id=<?=$id?>" method="POST">
		<input type="text" name="name" placeholder="Nome">
		<input type="text" name="address" placeholder="Endereço">
		<input type="text" name="diasemana" placeholder="Dia da Semana">
		<input type="text" name="horariosaida" placeholder="Horário de Saída">
		<input type="text" name="horariovolta" placeholder="Horário de Volta">
		<input type="text" name="destino" placeholder="destino">
		<input type="submit" value="Cadastrar">
	</form><br>


	<a href="tabelahorarios.php"></a> 

</body>
</html>