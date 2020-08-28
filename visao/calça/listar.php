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

    <a href="index.php?rota=calça&op=novo">
        Adicionar calça 
    </a>

    <br><br>

    calças  cadastradas: 
    <br><br>

    <?php
        if($calça){
            ?>
            <table>
            <?php
            foreach($calça as $calça){
                ?>
                <tr>
                    <td><a href="index.php?rota=calça&op=exibir&id=<?php echo $calça['id_calça'] ?>">
                        <?php echo "Ref: " . $calça['cal_referencia'] . " - Cor: " . $calça['cal_cor'] . " - Quantidade: " . $calça['cal_quantidade']; ?> 
                    </a></td>
                    <td><a href="index.php?rota=calça&op=editar&id=<?php echo $calça['id_calça'] ?>">editar</a></td>
                    <td><a href="index.php?rota=calça&op=deletar&id=<?php echo $calça['id_calça'] ?>">excluir</a></td>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }else{
            ?>
                Nenhuma calça cadastrado.
            <?php
        }
    ?>
</body>
</html>