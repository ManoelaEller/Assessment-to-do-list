<!DOCTYPE html>

<html>
<head>
	<title>To do List Assessment</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mainpage.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Hammersmith+One|Oswald&display=swap" rel="stylesheet">
	<link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="javascript.js"></script>
	<ul>	
  		<li style="float:right"><a class="active" href="cadastro.php">Cadastro</a></li>
 	 	<li style="float:right"><a class="active" href="entrar.php">Entrar</a></li>
		<li style="float: left"><a class="active" href="mainpage.php">Voltar </a></li>
	</ul>

	<div id="cadastro"> 
		<h2>Cadastre-se!</h2>
		<form method="POST" action="salvacadastro.php" id="form">	
			
			<label for="nome">Nome:</label><input type="text" id="nome" name="Nome" placeholder="Nome e Sobrenome" class="form" required></input> </br></br>
			<label for="email">E-mail:</label> <input type="text" id="mail" name="mail" placeholder="E-mail" class="form" required></input>
			</br><br>
			<label for="senha">Crie uma Senha:</label><input type="password" id="senha" name="senha" placeholder="Senha" class="form" required />
			<br><br>
			<input type="submit" name="Enviar" class="enviar" onclick="Enviar();" value="Enviar"/>
		</form>
	</div>

</html>

