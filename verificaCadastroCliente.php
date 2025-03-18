<?php
include("conexao.php");
include("banco-cliente.php");

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$telefone = $_POST['txttelefone'];
$mensagem = $_POST['txtmensagem'];

if (inserirAutomovel($conexao, $nome, $email, $telefone, $mensagem)) {
    $tipo = "sucess";
    $mensagem = "Cliente cadastrado com sucesso!";
} else {
    $tipo = "danger";
    $mensagem = "Erro ao cadastrar Cliente: " . mysqli_error($conexao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro de Clientes</title>
    
    
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Resultado do Cadastro</h1>
        <div class="alert alert-<?php echo $tipo; ?> alert-custom" role="alert">
            <?php echo $mensagem; ?>
        </div>
        <a href="listaCliente.php" class="btn btn-custom-alt">Voltar para Lista de Clientes</a>
        <a href="../../inicio.html" class="btn btn-custom">Cadastrar Outro Novo Cliente</a>
    </div>

 
</body>
</html>
