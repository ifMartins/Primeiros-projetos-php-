<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Camiseta:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <?php if($camiseta) { ?>
            Referencia: <?php echo $camiseta['cam_referencia'] ?>
            <br>
            Modelo: <?php if ($camiseta['cam_modelo'] == "M"){echo "Masculina";}else{echo "Feminina";} ?>
            <br>
            Cor: <?php echo $camiseta['cam_cor'] ?>
            <br>
            Tamanho: <?php echo $camiseta['cam_tamanho'] ?>
            <br>
            Composição: <?php echo $camiseta['cam_composiçao'] ?>
            <br>
            Quantidade: <?php echo $camiseta['cam_quantidade'] ?>
            <br>
            Descrição: <?php echo $camiseta['cam_descriçao'] ?>

         
    <?php
    } else{
    ?>
        camiseta não cadastrada.
    <?php
    }
    ?>


    <br><br>
    <a href="index.php?rota=camiseta&op=listar">Listar camisetas</a>
</body>
</html>