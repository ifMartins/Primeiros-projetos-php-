<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Adicionar calça:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <form action="" method="POST">
        Refencia:
        <br>
        <input type="number" name="referencia" required/>
        <br><br>
        Modelo:
        <br>
        Masculina<input type="radio" name="modelo" value="M"/>
        <br>
        Feminina<input type="radio" name="modelo" value="F"/>
        <br><br>
        Cor:
        <br>
        <input type="text" name="cor" required/>
        <br><br>
        Tamanho:
        <br>
        36
        <input type="radio" name="tamanho" value="36"><br>
        36
        <input type="radio" name="tamanho" value="38"><br>
        40
        <input type="radio" name="tamanho" value="40"><br>
        42
        <input type="radio" name="tamanho" value="42"><br>
        44
        <input type="radio" name="tamanho" value="44"><br>
        46
        <input type="radio" name="tamanho" value="46"><br>
        <br>
        Composiçãos
        <br><br>
        <input type="text" name="composiçao" required/>
        <br>
        Quantidade
        <br><br>
        <input type="number" name="quantidade" required/>
        <br>
        Descrição
        <br><br>
        <input type="text" name="descriçao" />
        <br><br>
        <input type="submit" value="Adicionar" />
    </form>

    <br><br>
    <a href="index.php?rota=calça&op=listar">Listar calças</a>
</body>
</html>