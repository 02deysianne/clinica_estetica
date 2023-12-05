<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Procedimentos</title>
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
$sql = "select * from cadastro_procedimento";
$executar = mysqli_query($conexao, $sql);
echo "<table border='1'><tr><th>Id Procedimento</th><th>Nome</th><th>Descrição</th><th>Duração</th><th>Preço</th><th>Excluir</th><th>Atualizar</th></tr>";
while($resultado = mysqli_fetch_array($executar)){
	$id_procedimento = $resultado['id_procedimento'];
	$nome_procedimento = $resultado['nome_procedimento'];
	$descricao_procedimento = $resultado['descricao_procedimento'];
	$duracao_procedimento = $resultado['duracao_procedimento'];
	$preco_procedimento = $resultado['preco_procedimento'];
	echo "<tr><td>$id_procedimento</td><td>$nome_procedimento</td><td>$descricao_procedimento</td><td>$duracao_procedimento</td><td>$preco_procedimento</td><td><a href='exclusao_procedimento.php?cod=$id_procedimento'>Excluir</a></td><td><a href='atualizar_procedimento.php?cod=$id_procedimento'>Atualizar</a></td></tr>";
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
