<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php if($this->logado){ ?><h3> Manage Clothes </h3>
    Olá <?php echo $_SESSION['nome'] ?>, bem vindo ao sistema de gerenciamento de estoque de roupas!<br>
    <?php}else { ?>
    <?php } ?>
    <?php if($this->logado) { ?>
    <br>
    Gerencie suas roupas
    <br>
    <a href="index.php?rota=camiseta&op=listar">Listar Camisetas</a>
    <br>
    <a href="index.php?rota=calça&op=listar">Listar Calças</a>
    <br>
    <br>
    <a href="index.php?rota=usuarios&op=listar">Listar Usuários</a>
    <br>
    <a href="index.php?rota=logout"><br>logout</a>
    <?php } else { ?>
    <a href="index.php?rota=login">Login</a>
    <?php } ?>
</body>
</html>