<?php
include ("conexao.php");

if($conexao){
	echo "Conexao efetuada";
}else{
	$mensagem = mysqli_errno($conexao);
	echo $mensagem;
}
?>