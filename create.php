<?php

require_once 'conexao.php';

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";
	
	if(mysqli_query($connect, $sql)):
	  
	  header('location: tabela.php?sucesso');
	else:
	 
	  header('location: tabela.php?erro');
	endif;

endif;




