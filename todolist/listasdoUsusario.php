<!DOCTYPE html>

<html>
<head>
	<title>To do List Assessment</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/mainpage.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Hammersmith+One|Oswald&display=swap" rel="stylesheet">
	<link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
	<meta name="viewport" content="width=device-width, user-scalable=no">

	

</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script  src="javascript.js"></script>
	<ul>	
  		<li style="float:right"><a class="active" href="novaLista.php">Criar nova tarefa</a></li>
 	 	<li style="float:right"><a class="active" href="entrarTE.php">Entrar em tarefa existente</a></li>
		<li style="float: left"><a class="active" href="mainpage.php">Voltar </a></li>
	</ul>

	<div id="cadastro"> 
		<h2>Entre!</h2>
		<form method="POST" action='listas.php' id="formentrar">		
			
			<label for="email">E-mail:</label> <input type="text" name="mail" placeholder="E-mail" class="form" required></input>
			<input type="hidden" name="url" id="url" value="<?php echo URL;?>contato"/>	
			</br><br>
			<label for="senha">Senha:</label><input type="password" name="senha" placeholder="Senha" class="form" required /> <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
			<br><br>
			<input type="submit" name="Entrar" class="enviar" onclick="Entrar();" value="Entrar" id="entrar" />
		</form>
	</div>

	

</html>