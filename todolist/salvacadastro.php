<?php
	include_once('conexao.php');
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	
	$result_msg_contato = "INSERT INTO mensagens_contatos(nome, email, assunto, mensagem, created) VALUES ('$nome', '$email', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>