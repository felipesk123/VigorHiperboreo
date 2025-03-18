<?php
include ("conexao.php");
include ("banco-cliente.php");

$cod = $_POST['txtcod'];
$nome = $_POST['txtnome'];
$tel = $_POST['txttel'];
$end = $_POST['txtend'];
$email = $_POST['txtemail'];
$idade = $_POST['txtidade'];
$sal = $_POST['txtsal'];

if(alterar($conexao,$nome,$tel,$email,$end,$idade,$sal,$cod)){
	echo "Cliente alterado";
}else{
	$msg = mysqli_errno($conexao);
	echo $msg;
}
?>