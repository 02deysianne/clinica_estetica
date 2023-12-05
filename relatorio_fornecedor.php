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
$sql = "select * from cadastro_fornecedor";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id Fornecedor</th><th>Razão Social</th><th>Nome Fantasia</th><th>Telefone</th><th>Email</th><th>CNPJ</th><th>Excluir</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
	$id_fornecedor = $resultado['id_fornecedor'];
	$razao_social = $resultado['razao_social'];
	$nome_fantasia = $resultado['nome_fantasia'];
	$telefone_fornecedor = $resultado['telefone_fornecedor'];
	$email_fornecedor = $resultado['email_fornecedor'];
	$cnpj_fornecedor = $resultado['cnpj_fornecedor'];
	echo "<tr><td>$id_fornecedor</td><td>$razao_social</td><td>$nome_fantasia</td><td>$telefone_fornecedor</td><td>$email_fornecedor<td>$cnpj_fornecedor</td><td><a href='exclusao_fornecedor.php?cod=$id_fornecedor'>Excluir</a></td><td><a href='atualizar_fornecedor.php?cod=$id_fornecedor'>Atualizar</a></td></tr>";
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
