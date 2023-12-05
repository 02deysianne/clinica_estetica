<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Funcionario</title>
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
$nome_funcionario = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$sexo_funcionario = $_POST['sexo_funcionario'];
$telefone_funcionario = $_POST['telefone'];
$email_funcionario = $_POST['email'];
$cargo_funcionario = $_POST['cargo'];
$contratacao_funcionario = $_POST['contratacao'];
$salario_funcionario = $_POST['preco'];
$cpf_funcionario = $_POST['cpf'];
$conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
$sql = "INSERT INTO cadastro_funcionario (nome_funcionario, data_nascimento, sexo_funcionario, telefone_funcionario, email_funcionario, cargo_funcionario, contratacao_funcionario, salario_funcionario, cpf_funcionario) VALUES ('$nome_funcionario', '$data_nascimento', '$sexo_funcionario', '$telefone_funcionario', '$email_funcionario', '$cargo_funcionario', '$contratacao_funcionario', '$salario_funcionario', '$cpf_funcionario')";
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