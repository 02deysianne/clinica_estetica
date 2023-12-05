<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   body{
    background-color: rgb(129, 1, 1);
    display: flex;
    justify-content: center;        
    align-items: center;
    height: 100vh;  
    margin: 0;
   }
   .mensagem-box {
  text-align: center;
  background-color: black;
  padding: 80px;
  width:30rem;
  margin-top:-2rem;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
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
  background-color: rgb(39, 36, 36);;
}


    </style>
</head>
<body>
<div class="mensagem-box">
<div class=mensagem>
<?php
$endereco_logradouro = $_POST['endereco_logradouro'];
$endereco_numero = $_POST['endereco_numero'];
$endereco_CEP = $_POST['endereco_CEP'];
$endereco_bairro = $_POST['endereco_bairro'];
$endereco_complemento = $_POST['endereco_complemento'];
$endereco_estado = $_POST['endereco_estado'];
$endereco_cidade = $_POST['endereco_cidade'];
$endereco_pais = $_POST['endereco_pais'];


$conexao = mysqli_connect('localhost', 'root', '', 'projeto');
$sql = "insert into endereco (endereco_logradouro, endereco_numero, endereco_CEP, endereco_bairro, endereco_complemento, endereco_estado, endereco_cidade,  endereco_pais)
 values ('$endereco_logradouro', '$endereco_numero', '$endereco_CEP','$endereco_bairro', '$endereco_complemento', '$endereco_estado', '$endereco_cidade', '$endereco_pais')";
$inserir = mysqli_query($conexao,$sql);




if ($inserir) {
echo "Cadastro realizado com sucesso!";
}
else{
echo "erro";
}
mysqli_close ($conexao);
?>
</div>
<div class="content-box2">
<a class="button_card" href="index.html">IR A PÁGINA PRINCIPAL</a>
</div>
</div>
</body>
</html>