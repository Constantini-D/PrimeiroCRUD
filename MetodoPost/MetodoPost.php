<?php

$email = $_POST['email'];
$senha =$_POST['senha'];

if($email=="master" and $senha=="123")
{
	header("Location: ..\SegundoIndex.html");
	
  		
}
else{
	die('falha ao logar');
}





?>

