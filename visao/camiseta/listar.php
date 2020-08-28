<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="index.php"> Home </a>
    <br><br>

    <?php
        if(isset($mensagem)){
            echo $mensagem . "<br><br>";
        }
    ?>

    <a href="index.php?rota=camiseta&op=novo">
        Adicionar Camiseta 
    </a>

    <br><br>

    Camisetas  cadastradas: 
    <br><br>

    <?php
        if($camiseta){
            ?>
            <table>
            <?php
            foreach($camiseta as $camiseta){
                ?>
                <tr>
                    <td><a href="index.php?rota=camiseta&op=exibir&id=<?php echo $camiseta['id_camiseta'] ?>">
                        <?php echo "Ref: " . $camiseta['cam_referencia'] . " - Cor: " . $camiseta['cam_cor'] . " - Quantidade: " . $camiseta['cam_quantidade']; ?> 
                    </a></td>
                    <td><a href="index.php?rota=camiseta&op=editar&id=<?php echo $camiseta['id_camiseta'] ?>">editar</a></td>
                    <td><a href="index.php?rota=camiseta&op=deletar&id=<?php echo $camiseta['id_camiseta'] ?>">excluir</a></td>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }else{
            ?>
                Nenhum camiseta cadastrado.
            <?php
        }
    ?>
</body>
</html>