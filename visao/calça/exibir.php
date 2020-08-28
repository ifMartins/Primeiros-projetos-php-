<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Calça:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <?php if($calça) { ?>
            Referencia: <?php echo $calça['cal_referencia'] ?>
            <br>
            Modelo: <?php if ($calça['cal_modelo'] == "M"){echo "Masculina";}else{echo "Feminina";} ?>
            <br>
            Cor: <?php echo $calça['cal_cor'] ?>
            <br>
            Tamanho: <?php echo $calça['cal_tamanho'] ?>
            <br>
            Composição: <?php echo $calça['cal_composiçao'] ?>
            <br>
            Quantidade: <?php echo $calça['cal_quantidade'] ?>
            <br>
            Descrição: <?php echo $calça['cal_descriçao'] ?>

         
    <?php
    } else{
    ?>
        calça não cadastrada.
    <?php
    }
    ?>


    <br><br>
    <a href="index.php?rota=calça&op=listar">Listar Calça</a>
</body>
</html>