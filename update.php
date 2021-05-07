<?php

session_start();
require_once 'conexao.php';

if(isset($_POST['id_'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$id = mysqli_escape_string($connect, $_POST['id_']);

	$sql = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE id='$id'";
	
	if(mysqli_query($connect, $sql)):
	  
	  header('location: tabela.php?sucesso');
	else:
	 
	  header('location: tabela.php?erro');
	endif;

endif;
