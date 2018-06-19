<?php
$dbname = "simbora";
            $usuario="root";
            $senha = "";
            $host = "localhost";
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
$tipo = $_GET['tipo'];
$id = $_GET['id'];
$alteracao = $_POST['alteracao'];
if ($tipo == "hora_segunda"){
    $up = mysqli_query($strcon,"UPDATE tabela_horarios SET hora_segunda='$alteracao' WHERE id='$id'");
}
elseif ($tipo == "hora_terca"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_terca='$alteracao' WHERE id='$id'");
}
 elseif ($tipo == "hora_quarta"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_quarta='$alteracao' WHERE id='$id'");
}
elseif ($tipo == "hora_quinta"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_quinta='$alteracao' WHERE id='$id'");
}
elseif ($tipo == "hora_sexta"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_sexta='$alteracao' WHERE id='$id'");
}
elseif ($tipo == "hora_sabado"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_sabado='$alteracao' WHERE id='$id'");
}
elseif ($tipo == "hora_domingo"){
     $up = mysqli_query($strcon,"UPDATE tutorial SET hora_domingo='$alteracao' WHERE id='$id'");
}
 header('location:tabelahorarios.php');

?>