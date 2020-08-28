<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    Editar camiseta:
    <br> <br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <?php if($camiseta) { ?>
        <form action="" method="POST">
            Referencia:
            <br>
            <input type="hidden" name="id" value="<?php echo $camiseta['id_camiseta'] ?>" />
            <input type="number" name="referencia" value="<?php echo $camiseta['cam_referencia'] ?>" required/>
            <br><br>
            Modelo:
            <br>
            Masculina<input type="radio" name="modelo" value="M" <?php if($camiseta['cam_modelo'] == "M" ){echo "checked";} ?>/>
            <br>
            Feminina<input type="radio" name="modelo" value="F"  <?php if($camiseta['cam_modelo'] == "F" ){echo "checked";} ?>/>
            <br><br>
            Cor:
            <br>
            <input type="text" name="cor" value="<?php echo $camiseta['cam_cor']?>" required/>
            <br><br>
            Tamanho:
            <br>
            P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="tamanho" value="P" <?php if($camiseta['cam_tamanho'] == "P" ){echo "checked";} ?> > <br>
            M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="tamanho" value="M" <?php if($camiseta['cam_tamanho'] == "M" ){echo "checked";} ?>> <br>
            G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="tamanho" value="G" <?php if($camiseta['cam_tamanho'] == "G" ){echo "checked";} ?> > <br>
            GG&nbsp;&nbsp;&nbsp;
            <input type="radio" name="tamanho" value="GG" <?php if($camiseta['cam_tamanho'] == "GG" ){echo "checked";} ?> > <br>
            XG&nbsp;&nbsp;&nbsp;
            <input type="radio" name="tamanho" value="XG" <?php if($camiseta['cam_tamanho'] == "XG" ){echo "checked";} ?> > <br>
            XGG
            <input type="radio" name="tamanho" value="XGG" <?php if($camiseta['cam_tamanho'] == "XGG" ){echo "checked";} ?> > <br>
            <br><br>
            Composiçãos:
            <br>
            <input type="text" name="composiçao" value="<?php echo $camiseta['cam_composiçao'] ?>" required/>
            <br><br>
            Quantidade:
            <br><br>
            <input type="number" name="quantidade" value="<?php echo $camiseta['cam_quantidade'] ?>" required/>
            <br>
            Descrição:
            <br><br>
            <input type="text" name="descriçao" value="<?php echo $camiseta['cam_descriçao'] ?>" />
            <br><br>
            <input type="submit" value="Editar" />
        </form>
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