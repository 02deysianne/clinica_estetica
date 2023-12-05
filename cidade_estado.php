<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Paciente</title>
  <style>
    * {
      box-sizing: border-box;
    }


    html {
      scroll-behavior: smooth;
      background-image: url(./img/fundo2.png);
    }

    body {
      margin: 0;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
    }


    img {
      max-width: 100%;
      height: auto;
    }

    header {
      background-color: rgb(85, 85, 85);
      border-bottom: 1px solid #cccccc;
      display: flex;
      justify-content: space-between;
      padding: 20px;
    }


    #area-logo img {
      padding-right: 9%;
      height: 40%;
      width: 40%;
    }

    #area-logo h1 {
      padding-left: 20%;
      font-size: 30px;
      margin: 0;
      font-weight: bold;
    }

    #area-logo span {
      color: #f4b6b2;
      font-size: 30px;
      font-weight: bold;
    }

    nav {
      display: flex;
    }

    h1 {
      text-align: center;
      justify-content: center;
    }

    .form {
            background-color: #f4b6b2;
            width: 40%;
            /* Aumentado para melhor visualização em telas maiores */
            border-radius: 5px;
            padding: 35px;
            /* Reduzido o padding para evitar muita margem interna */
            margin: 3rem auto;
        }




        .form h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }


        .bairro-estado {
            width: 100%;
            margin-right: 1rem;
        }


        label {
            display: flex;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .flex-item1 {
            width: 45%;
        }

        .flex-item {
            width: 30%;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        select:focus {
            border-color: #555;
        }

        input[type="submit"] {
            background-color: rgb(0, 0, 0);
            color: rgb(253, 245, 245);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        .container {
            left: 2rem;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

    .submit {
      display: block;
      margin: 0 auto;
      background: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      text-align: center;
    }

    #container-quaternario {
      width: 92%;
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      justify-content: space-between;
      margin-top: 50px;
      margin-right: 0px;
      margin-left: 20px;
      margin-bottom: 50px;
    }

    #container-separador01 {
      width: 20%;
      padding-top: 4%;
      padding-left: 4%;
      font-size: 120%;
      color: #f4b6b2;
      text-shadow: 1px 1px 3px #000000;
      text-align: center;
      margin: 0;
    }

    nav {
      display: flex;
    }

    #area-menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
    }

    #area-menu li {
      margin: 0 10px;
    }

    #area-menu li:first-child {
      margin-left: 0;
    }

    #area-menu li:last-child {
      margin-right: 0;
    }

    #area-menu a {
      text-decoration: none;
      color: white;
      padding: 4px;
      border-radius: 5px;
      transition: background-color 0.3s ease-in-out;
    }

    #area-menu a:hover {
      background-color: #f4b6b2;
    }

    #button-type-1 {
      background-color: #f4b6b2;
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    #button-type-1:hover {
      background-color: rgb(247, 206, 213);
    }

    #button-type-2 {
      background-color: transparent;
      color: #333333;
      padding: 10px 20px;
      border: 2px solid #333333;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    #button-type-2:hover {
      background-color: #333333;
      color: #ffffff;
    }

    #container-quaternario {
      width: 92%;
      display: flex;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      justify-content: space-between;
      margin-top: 50px;
      margin-right: 0px;
      margin-left: 20px;
      margin-bottom: 50px;
    }


    #container-separador01 {
      width: 20%;
      padding-top: 4%;
      padding-left: 4%;
      font-size: 120%;
      color: #f4b6b2;
      text-shadow: 1px 1px 3px #000000;
      text-align: center;
      margin: 0;
    }


    #container-quinario {
      background-repeat: no-repeat;
      background-size: cover;
      font-size: 130%;
      padding: 15px;
      color: #f4b6b2;
      text-align: center;
      background-color: #333333;
    }

    .styled-select {
      width: 200px;
    }

    .styled-select select {
      width: 100%;
      padding: 10px;
      border: 1px solid transparent;
      border-radius: 5px;
      background-color: #f5ccc9;
      color: black;
    }
  </style>
</head>

<body>
  <header>
    <div id="area-logo">
      <h1><img src="./img/logo1.png"></img><span>Centro de Estética Lótus</span></h1>
    </div>
    <nav>
      <ul id="area-menu">
      <li><a id="link" href="./index.html">Home</a></li>
      <li><a id="link" href="cadastro_procedimento.html">Procedimetos</a></li>
      <li><a id="link" href="">Carrinho</a></li>
        <div class="styled-select">
        <select onchange="window.location.href=this.value;">
          <option value="#" selected>Cadastros</option>
          <option value="cadastro_paciente.html">Pacientes</option>
          <option value="cadastro_procedimento.html">Procedimentos</option>
          <option value="cadastro_produtos.html">Produtos</option>
          <option value="cadastro_fornecedor.html">Fornecedores</option>
          <option value="cadastro_funcionario.html">Funcionários</option>
      </select>  
        </div>
      </ul>
    </nav>
  </header>
  <form class="form" action="endereco2.php" method="post">


        <h2>Endereço do Cliente</h2>
        <label for="endereco_logradouro">Logradouro:</label>
        <input type="text" name="endereco_logradouro" required><br><br>


        <div class="flex-container">
            <div class="flex-item1">
                <label for="endereco_numero">Número:</label>
                <input type="text" name="endereco_numero" required>
            </div>
            <div class="flex-item1">
                <label for="endereco_CEP">CEP:</label>
                <input type="text" id="cep" placeholder="Ex:12345-678" oninput="formatCEP(this)"maxlength="9" required>
            </div>
        </div>


        <div class="flex-container">
            <div class="flex-item1">
                <label for="endereco_bairro">Bairro:</label>
                <input type="text" name="endereco_bairro" required>


            </div>
            <div class="flex-item1">
                <label for="endereco_complemento">Complemento:</label>
                <input type="text" name="endereco_complemento">
            </div>
        </div>
        
        

        <div class="flex-container">
            <div class="flex-item">
                <label for="estados">Estado:</label>
                <select id="estados" name="estados">
                    <?php
                    $conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
                    if (mysqli_connect_errno()) {
                        echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
                        exit();
                    }
                    $sql = "SELECT id_estados, nome FROM estados";
                    $result = mysqli_query($conexao, $sql);
                    if (!$result) {
                        die("Erro na consulta: " . mysqli_error($conexao));
                    }
                    echo "<option value='Selecione...'>Selecione...</option>";
                    while ($dados = mysqli_fetch_array($result)) {
                        echo "<option value='" . utf8_encode($dados['id_estados']) . "'>" . utf8_encode($dados['nome']) . "</option>";
                    }
                    mysqli_close($conexao);
                    ?>
                </select>
            </div>
            <div class="flex-item"> 
                <label for="cidades">Cidade:</label>
                <select id="cidades" name="cidades">
                    <?php
                    $conexao = mysqli_connect('localhost', 'root', '', 'projeto_final');
                    if (mysqli_connect_errno()) {
                        echo "Falha na conexão com o MySQL: " . mysqli_connect_error();
                        exit();
                    }
                    $sql = "SELECT id_cidades, nome FROM cidades";
                    $result = mysqli_query($conexao, $sql);
                    if (!$result) {
                        die("Erro na consulta: " . mysqli_error($conexao));
                    }
                    echo "<option value='Selecione...'>Selecione...</option>";
                    while ($dados = mysqli_fetch_array($result)) {
                        echo "<option value='" . utf8_encode($dados['id_cidades']) . "'>" . utf8_encode($dados['nome']) . "</option>";
                    }
                    mysqli_close($conexao);
                    ?>
                </select>
            </div>

            <div class="flex-item">
                <label for="endereco_pais">Pais:</label>
                <input type="text" name="endereco_pais" required>
            </div>
        </div>


        <input type="submit" value="CADASTRAR">


    </form>


  <div className="container-quaternario" id="container-quinario">
    <div className="container-separador02">
      <h1>Entre em Contato Conosco!</h1>
      <p>Rua XV de Novembro, 7840 - XXXXX-XXX - Guarapuava, PR</p>
      <p>Telefone: (42) XXXXX-XXXX</p>
      <p>E-mail: esteticalotus@gmail.com</p>
      <p>Lótus - Estética e Saúde - CNPJ XX.XXX.XXX/XXXX-XX</p>
      <p>&copy; Todos os direitos reservados a Lótus - Estética e Saúde</p>
    </div>
  </div>
  <script>
    function formatCEP(input) {
            input.value = input.value.replace(/\D/g, '');
            input.value = input.value.replace(/(\d{5})(\d{3})/, '$1-$2');
        }
  </script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>