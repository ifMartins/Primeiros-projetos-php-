<?php

class Controladorcalça {

    //objeto modelo
    private $modeloCalça;

    //contrutor
    public function __construct(){
        include_once BASE_PATH . 'modelo/modeloCalça.php';
        $this->modeloCalça = new modeloCalça();
    }

    public function novo(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //se for POST, adiciona um novo calça
            $adicionou = $this->modeloCalça->adicionar($_POST['referencia'], $_POST['cor'], $_POST['tamanho'], $_POST['composiçao'], $_POST['quantidade'], $_POST['descriçao'], $_POST['modelo']);
            if($adicionou == "ok"){
                $mensagem = "Calça ref: " . $_POST['referencia'] . " adicionado com sucesso.";
            }else{
                $mensagem = $adicionou;
            }
        }
        include_once BASE_PATH . 'visao/calça/novo.php';
    }

    public function listar(){
        $calça = $this->modeloCalça->listarTodos();
        include_once BASE_PATH . 'visao/calça/listar.php';
    }

    public function exibir(){
        $calça = $this->modeloCalça->buscar($_GET['id']);
        include_once BASE_PATH . 'visao/calça/exibir.php';
    }

    public function editar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //se for POST, edita o calça
            $editou = $this->modeloCalça->editar($_POST['id'], $_POST['referencia'], $_POST['cor'], $_POST['tamanho'], $_POST['composiçao'], $_POST['quantidade'], $_POST['descriçao'], $_POST['modelo']);
            if($editou == "ok"){
                $mensagem = "Calça ref: " . $_POST['referencia'] . " editado com sucesso.";
            }else{
                $mensagem = $editou;
            }
        }

        $calça = $this->modeloCalça->buscar($_GET['id']);
        include_once BASE_PATH . 'visao/calça/editar.php';
    }

    public function deletar(){
        $deletou = $this->modeloCalça->deletar($_GET['id']);
        if($deletou){
            $mensagem = "Referencia deletado com sucesso.";
        }else{
            $mensagem = "Não foi possível deletar a referencia.";
        }

        //lista os calça
        $calça = $this->modeloCalça->listarTodos();
        include_once BASE_PATH . 'visao/calça/listar.php';
    }

}