<?php
$servername= "localhost";
$username="root";
$password="";
$db_name= "cadastrar";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect,"utf8");

if(mysqli_connect_errno()){
	echo "Falha na conexão ".mysqli_connect_error();
}
?>