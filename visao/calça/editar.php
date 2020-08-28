<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Editar calça:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <?php if($calça) { ?>
        <form action="" method="POST">
            Referencia:
            <br>
            <input type="hidden" name="id" value="<?php echo $calça['id_calça'] ?>" />
            <input type="number" name="referencia" value="<?php echo $calça['cal_referencia'] ?>" />
            <br><br>
            Modelo:
            <br>
            Masculina<input type="radio" name="modelo" value="M" <?php if($calça['cal_modelo'] == "M" ){echo "checked";} ?>/>
            <br>
            Feminina<input type="radio" name="modelo" value="F" <?php if($calça['cal_modelo'] == "F" ){echo "checked";} ?>/>
            <br><br>
            Cor:
            <br>
            <input type="text" name="cor" value="<?php echo $calça['cal_cor']?>" />
            <br><br>
            tamanho:
            <br>
            36
            <input type="radio" name="tamanho" value="36" <?php if($calça['cal_tamanho'] == "36" ){echo "checked";} ?> > <br>
            38
            <input type="radio" name="tamanho" value="38" <?php if($calça['cal_tamanho'] == "38" ){echo "checked";} ?>> <br>
            40
            <input type="radio" name="tamanho" value="40" <?php if($calça['cal_tamanho'] == "40" ){echo "checked";} ?> > <br>
            42
            <input type="radio" name="tamanho" value="42" <?php if($calça['cal_tamanho'] == "44" ){echo "checked";} ?> > <br>
            44
            <input type="radio" name="tamanho" value="44" <?php if($calça['cal_tamanho'] == "46" ){echo "checked";} ?> > <br>
            46
            <input type="radio" name="tamanho" value="46" <?php if($calça['cal_tamanho'] == "48" ){echo "checked";} ?> > <br>
            <br><br>
            Composiçãos:
            <br>
            <input type="text" name="composiçao" value="<?php echo $calça['cal_composiçao'] ?> " required/>
            <br><br>
            Quantidade:
            <br><br>
            <input type="number" name="quantidade" value="<?php echo $calça['cal_quantidade'] ?>" required />
            <br>
            Descrição:
            <br><br>
            <input type="text" name="descriçao" value="<?php echo $calça['cal_descriçao'] ?>"  />
            <br><br>
            <input type="submit" value="Editar" />
        </form>
    <?php
    } else{
    ?>
        calça não cadastrada.
    <?php
    }
    ?>


    <br><br>
    <a href="index.php?rota=calça&op=listar">Listar calças</a>
</body>
</html>