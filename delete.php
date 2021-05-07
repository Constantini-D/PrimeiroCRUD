<?php

session_start();
require_once 'conexao.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "	DELETE FROM usuarios WHERE id='$id'";
	
	if(mysqli_query($connect, $sql)):
	  
	  header('location: tabela.php?sucesso');
	else:
	 
	  header('location: tabela.php?erro');
	endif;

endif;
