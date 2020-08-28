<?php

class controladorCamiseta {

    //objeto modelo
    private $modeloCamiseta; 

    //contrutor
    public function __construct(){
        include_once BASE_PATH . 'modelo/modeloCamiseta.php';
        $this->modeloCamiseta = new modeloCamiseta();
    }

    public function novo(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //se for POST, adiciona um novo prato
            $adicionou = $this->modeloCamiseta->adicionar($_POST['referencia'], $_POST['cor'], $_POST['tamanho'], $_POST['composiçao'], $_POST['quantidade'], $_POST['descriçao'], $_POST['modelo']);
            if($adicionou == "ok"){
                $mensagem = "Camiseta ref: " . $_POST['referencia'] . " adicionado com sucesso.";
            }else{
                $mensagem = $adicionou;
            }
        }
        include_once BASE_PATH . 'visao/camiseta/novo.php';
    }

    public function listar(){
        $camiseta = $this->modeloCamiseta->listarTodos();
        include_once BASE_PATH . 'visao/camiseta/listar.php';
    }

    public function exibir(){
        $camiseta = $this->modeloCamiseta->buscar($_GET['id']);
        include_once BASE_PATH . 'visao/camiseta/exibir.php';
    }

    public function editar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //se for POST, edita
            $editou = $this->modeloCamiseta->editar($_POST['id'], $_POST['referencia'], $_POST['cor'], $_POST['tamanho'], $_POST['composiçao'], $_POST['quantidade'], $_POST['descriçao'], $_POST['modelo']);
            if($editou == "ok"){
                $mensagem = "Referencia" . $_POST['referencia'] . " editado com sucesso.";
            }else{
                $mensagem = $editou;
            }
        }

        $camiseta = $this->modeloCamiseta->buscar($_GET['id']);
        include_once BASE_PATH . 'visao/camiseta/editar.php';
    }

    public function deletar(){
        $deletou = $this->modeloCamiseta->deletar($_GET['id']);
        if($deletou){
            $mensagem = "Prato deletado com sucesso.";
        }else{
            $mensagem = "Não foi possível deletar a camiseta.";
        }

        //lista os camiseta
        $camiseta = $this->modeloCamiseta->listarTodos();
        include_once BASE_PATH . 'visao/camiseta/listar.php';
    }

}