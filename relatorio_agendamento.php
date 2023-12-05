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
$sql = "select * from agendamento";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id Agendamento</th><th>Nome Paciente</th><th>Data do Agendamento</th><th>Hora do Agendamento</th><th>Procedimento<th>Profissional</th><th>Telefone Paciente</th><th>Excluir</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
	$id_agendamento = $resultado['id_agendamento'];
	$nome_paciente = $resultado['nome_paciente'];
	$data_agendamento = $resultado['data_agendamento'];
	$hora_agendamento = $resultado['hora_agendamento'];
	$nome_procedimento = $resultado['nome_procedimento'];
	$nome_funcionario = $resultado['nome_funcionario'];
	$telefone_paciente = $resultado['telefone_paciente'];
	echo "<tr><td>$id_agendamento</td><td>$nome_paciente</td><td>$data_agendamento</td><td>$hora_agendamento</td><td>$nome_procedimento<td>$nome_funcionario</td><td>$telefone_paciente</td><td><a href='exclusao_agendamento.php?cod=$id_agendamento'>Excluir</a></td><td><a href='atualizar_agendamento.php?cod=$id_agendamento'>Atualizar</a></td></tr>";
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
