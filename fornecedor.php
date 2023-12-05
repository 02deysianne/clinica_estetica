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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .mensagem {
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
        }

        .content-box2 a {
            text-decoration: none;
            margin: 0 10px;
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
            $sql = "SELECT * FROM cadastro_fornecedor";
            $executar = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($executar) > 0) {
                echo "<table border='1'>";
                echo "<tr><th>Código</th><th>Razão Social</th><th>Nome Fantasia</th><th>Telefone</th><th>Email</th><th>CNPJ</th><th>excluir</th></tr>";

                while ($res = mysqli_fetch_array($executar)) {
                    echo "<tr>";
                    echo "<td>" . $res['id_fornecedor'] . "</td>";
                    echo "<td>" . $res['razao_social'] . "</td>";
                    echo "<td>" . $res['nome_fantasia'] . "</td>";
                    echo "<td>" . $res['telefone_fornecedor'] . "</td>";
                    echo "<td>" . $res['email_fornecedor'] . "</td>";
                    echo "<td>" . $res['cnpj_fornecedor'] . "</td>";
                    echo "<td> <a href='exclusao_fornecedor.php?cod=".$res['id_fornecedor']."'>Apagar</a></td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "Nenhum fornecedor encontrado.";
            }

            mysqli_close($conexao);
            ?>
        </div>
        <div class="content-box2">
            <a class="button_card" href="index.html">Página Principal</a>
        </div>
    </div>
</body>
</html>
