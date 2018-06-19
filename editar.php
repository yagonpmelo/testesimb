<html>
    <table>
        <tr>
            <th>Segunda</th>
            <th>Terça</th>
            <th>Quarta</th>
            <th>Quinta</th>
            <th>Sexta</th>
            <th>Sábado</th>
            <th>Domingo</th>
            
        </tr>

<?php 
include 'conexao.php';
$id = $_GET['id'];
            $dbname = "simbora";
            $usuario="root";
            $senha = "";
            $host = "localhost";
            $strcon = mysqli_connect("$host","$usuario","$senha","$dbname") or die('Erro ao conectar ao banco!');
            $sql = "SELECT * FROM tabela_horarios WHERE id = '$id'";
            $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
            $name = mysqli_query($strcon, "SELECT id hora_segunda,hora_terca,hora_quarta,hora_quinta,hora_sexta,hora_sabado,hora_domingo FROM tabela_horarios WHERE id = '$id'") or die(mysqli_error($strcon));
            $re = mysqli_fetch_array($name);
            while($dados = mysqli_fetch_array($resultado)): 
    ?>
            
    <?php
        $id = $dados['id'];
        $hora_segunda= $dados['hora_segunda'];
        $hora_terca = $dados['hora_terca'];
        $hora_quarta = $dados['hora_quarta'];
        $hora_quinta = $dados['hora_quinta'];
        $hora_sexta = $dados['hora_sexta'];
        $hora_sabado = $dados['hora_sabado'];
        $hora_domingo = $dados['hora_domingo'];
    	    echo "<tr>
                  <td> ".$hora_segunda."</td>
                  <td>".$hora_terca."</td>
                  <td>".$hora_quarta."</td>  
                  <td>".$hora_quinta."</td>  
                  <td>".$hora_sexta."</td>  
                  <td>".$hora_sabado."</td>  
                  <td>".$hora_domingo."</td>  
                </tr>";
    ?>
    <?php
        endwhile;
        mysqli_close($strcon);
    ?>
    
    <tr>
        <td><a onclick="editahora_segunda()" href="#"> Editar</a></td>
        <td><a onclick="editahora_terca()" href="#"> Editar</a></td>
        <td><a onclick="editahora_quarta()" href="#"> Editar</a></td>
        <td><a onclick="editahora_quinta()" href="#"> Editar</a></td>
        <td><a onclick="editahora_sexta()" href="#"> Editar</a></td>
        <td><a onclick="editahora_sabado()" href="#"> Editar</a></td>
        <td><a onclick="editahora_domingo()" href="#"> Editar</a></td>
    </tr>
            </table>
    <p id="altera"></p>
                <br>
        <script>
            function editahora_segunda(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_segunda'> Alterar Seguna: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
            function editahora_terca(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_terca'> Alterar Terca: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
            function editahora_quarta(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_quarta'> Alterar Quarta: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }

            function editahora_quinta(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_quinta'> Alterar Quinta: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }

            function editahora_sexta(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_sexta'> Alterar Sexta: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }

            function editahora_sabado(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_sabado'> Alterar Sabado: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }

            function editahora_domingo(){
                var a = document.getElementById('altera').innerHTML="<form method='POST' action='editahorarios.php?id=<?=$id?>&tipo=hora_domingo'> Alterar Domingo: <input type='text' name='alteracao'><input type='submit' value='salvar'></form>";
            }
            
        </script>
    </body>
    </html>