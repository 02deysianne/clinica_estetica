<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Pacientes</title>
    <style>
        body {
            background-color: rgb(85, 85, 85);
            display: flex;
            align-items: center;
            margin: 0;
        }

        .mensagem {
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
            padding: 20px;
        }

        table tr th{
            margin: 0;
            
        }

        .content-box2 a {
            text-decoration: none;
            margin: 0 45%;
            padding: 10px;
            color: white;
            background-color: rgb(39, 36, 36);
        }
    </style>
</head>
<body>
    <div class="mensagem-box">
        <div class="mensagem">
        <?php
$conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
$sql = "select * from cadastro_paciente";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id Paciente</th><th>Nome</th><th>Data de Nascimento</th><th>Sexo</th><th>Telefone<th>Email<th>CPF</th></th></th><th>Excluir</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
	$id_paciente = $resultado['id_paciente'];
	$nome_paciente = $resultado['nome_paciente'];
	$data_nascimento = $resultado['data_nascimento'];
	$sexo_paciente = $resultado['sexo_paciente'];
	$telefone_paciente = $resultado['telefone_paciente'];
	$email_paciente = $resultado['email_paciente'];
	$cpf_paciente = $resultado['cpf_paciente'];
	echo "<tr><td>$id_paciente</td><td>$nome_paciente</td><td>$data_nascimento</td><td>$sexo_paciente</td><td>$telefone_paciente<td>$email_paciente</td><td>$cpf_paciente</td></td><td><a href='exclusao_paciente.php?cod=$id_paciente'>Excluir</a></td><td><a href='atualizar_paciente.php?cod=$id_paciente'>Atualizar</a></td></tr>";
}
echo "</table>";
mysqli_close($conexao);
?>
        </div>
        <div class="content-box2">
            <a class="button_card" href="index.html">Página Principal</a>
        </div>
    </div>
</body>
</html>
