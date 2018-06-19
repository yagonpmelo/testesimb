<?php 
$id = 8;

try {
	$username = 'root';
	$password = '';
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=simbora', $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare('DELETE FROM tabela_horarios WHERE id = :id');
	$stmt->bindParam(':id', $id); 
	if ($stmt->execute()){
		header('location:tabelahorarios.php');
}
echo $stmt->rowCount(); 
} catch(PDOException $e) {
	echo 'Error: ' . $e->getMessage();
}
?>