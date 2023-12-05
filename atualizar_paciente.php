<?php
$id_paciente = $_GET['cod'];
$conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
$sql = "select nome_paciente, data_nascimento, sexo_paciente from cadastro_paciente where id_paciente=$id_paciente";
$executar = mysqli_query($conexao, $sql);
$resultado = mysqli_fetch_array($executar);
$nome_paciente = $resultado['nome_paciente'];
$data_nascimento = $resultado['data_nascimento'];
$sexo_paciente = $resultado['sexo_paciente'];
mysqli_close($conexao);
?>
<html>
  <head>
  </head>
  <body>
    <form action="paciente_atualiza.php" method="post">
	  Id do Paciente: <input type="text" name="id_paciente" value="<?php echo $id_paciente;?>" readonly><br> 
	  Nome do Paciente: <input type="text" name="nome" value="<?php echo $nome_paciente;?>"><br>
	  Data de Nascimento: <input type="text" name="data_nascimento" value="<?php echo $data_nascimento;?>"><br>
	  Gênero: <input type="text" name="sexo_paciente" value="<?php echo $sexo_paciente;?>"><br>
	  <input type="submit" value="Atualizar">
	</form>
  </body>
</html>