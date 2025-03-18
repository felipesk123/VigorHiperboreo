<?php
include ("conexao.php");
include ("banco-cliente.php");

$idcliente = $_GET['idcliente'];
$cliente = buscaCliente($conexao, $idcliente);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
    
    
</head>
<body>
    <div class="form-container">
        <h1>Alterar Cliente</h1>
        <form method="post" action="verificaAlteracaoCliente.php">
            <div class="form-group">
                <label for="txtcod">Código</label>
                <input type="text" class="form-control" name="txtcod" value="<?php echo $cliente['idcliente']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="txtnome">Nome do Cliente</label>
                <input type="text" class="form-control" name="txtnome" value="<?php echo $cliente['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="txtemail">E-mail</label>
                <input type="text" class="form-control" name="txtemail" value="<?php echo $cliente['email']; ?>">
            </div>
            <div class="form-group">
                <label for="txttelefone">Telefone</label>
                <input type="number" class="form-control" name="txttelefone" value="<?php echo $cliente['telefone']; ?>">
            </div>
            <div class="form-group">
                <label for="txtmensagem">mensagem</label>
                <input type="date" class="form-control" name="txtmensagem" value="<?php echo $cliente['mensagem']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>
    
   
</body>
</html>
