<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Pacientes</title>
    <style>
        body{
    background-color: rgb(85, 85, 85);
    display: flex;
    justify-content: center;        
    align-items: center;
    height: 100vh;  
    margin: 0;
   }
   .mensagem-box {
  text-align: center;
  background-color: #f4b6b2;
  padding: 80px;
  width:30rem;
  margin-top:-2rem;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #f4b6b2;
}


.mensagem {
  font-size: 24px;
  margin-bottom: 20px;
  color:white;
}


.content-box2 a {
  text-decoration: none;
  margin: 0 10px;
  padding:10px;
  color: white;
  background-color: black;
}

    </style>
</head>
<body>
    <div class="mensagem-box">
        <div class="mensagem">
<?php
$nome_procedimento = $_POST['nome'];
$descricao_procedimento = $_POST['descricao'];
$duracao_procedimento = $_POST['duracao'];
$preco_procedimento = $_POST['preco'];
$conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
$sql = "INSERT INTO cadastro_procedimento (nome_procedimento, descricao_procedimento, duracao_procedimento, preco_procedimento) VALUES ('$nome_procedimento', '$descricao_procedimento', '$duracao_procedimento', '$preco_procedimento')";
$inserir = mysqli_query($conexao, $sql);
if($inserir){
	echo "Cadastro com sucesso!";
}
else{
	echo "Erro ao cadastrar.";
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