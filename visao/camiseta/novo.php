<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Adicionar camiseta:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <form action="" method="POST">
        Refencia:
        <br>
        <input type="number" name="referencia" />
        <br><br>
        Modelo:
        <br>
        Masculina<input type="radio" name="modelo" value="M"/>
        <br>
        Feminina<input type="radio" name="modelo" value="F"/>
        <br><br>
        Cor:
        <br>
        <input type="text" name="cor" />
        <br><br>
        Tamanho:
        <br>
        P.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="tamanho" value="P"><br>
        M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="tamanho" value="M"><br>
        G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="tamanho" value="G"><br>
        GG&nbsp;&nbsp;&nbsp;
        <input type="radio" name="tamanho" value="GG"><br>
        XG&nbsp;&nbsp;&nbsp;
        <input type="radio" name="tamanho" value="XG"><br>
        XGG
        <input type="radio" name="tamanho" value="XGG"><br>
        <br>
        Composiçãos
        <br><br>
        <input type="text" name="composiçao" />
        <br>
        Quantidade
        <br><br>
        <input type="number" name="quantidade" />
        <br>
        Descrição
        <br><br>
        <input type="text" name="descriçao" />
        <br><br>
        <input type="submit" value="Adicionar" />
    </form>

    <br><br>
    <a href="index.php?rota=camiseta&op=listar">Listar Camisetas</a>
</body>
</html>