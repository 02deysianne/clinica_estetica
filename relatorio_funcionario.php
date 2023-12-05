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
echo "<table border='1'><tr><th>Id Funcionário</th><th>Nome</th><th>Data de Nascimento</th><th>Sexo</th><th>Telefone<th>Email</th><th>Cargo</th><th>Contratação</th><th>Salário</th><th>CPF</th></th></th><th>Excluir</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
	$id_funcionario = $resultado['id_funcionario'];
	$nome_funcionario = $resultado['nome'];
	$data_nascimento = $resultado['data_nascimento'];
	$sexo_funcionario = $resultado['sexo_funcionario'];
	$telefone_paciente = $resultado['telefone_funcionario'];
	$email_paciente = $resultado['email_funcionario'];
	$cargo_funcionario = $resultado['cargo_funcionario'];
	$contratacao_funcionario = $resultado['contratacao_funcionario'];
	$salario_funcionario = $resultado['salario_funcionario'];
	$cpf_funcionario = $resultado['cpf_funcionario'];
	echo "<tr><td>$id_funcionario</td><td>$nome_funcionario</td><td>$data_nascimento</td><td>$sexo_funcionario</td><td>$telefone_funcionario<td>$email_funcionario</td><td>$cargo_funcionario</td><td>$contratacao_funcionario</td><td>$salario_funcionario</td><td>$cpf_funcionario</td></td><td><a href='exclusao_funcionario.php?cod=$id_funcionario'>Excluir</a></td><td><a href='atualizar_funcionario.php?cod=$id_funcionario'>Atualizar</a></td></tr>";
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
