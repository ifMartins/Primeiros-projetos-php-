<?php 

class controladorprincipal {
    //objeto controladorAuth
    private $controladorAuth;
    private $logado = false;

    //construtor
    public function __construct(){
        include_once BASE_PATH . 'controle/controladorAuth.php';
        $this->controladorAuth = new ControladorAuth();
        $this->logado = $this->controladorAuth->estaLogado();
    }

    public function trataRequisicao(){

        //tratando a rota (controlador)
        $rota = isset($_GET['rota']) ? $_GET['rota'] : null;

        if(!$rota){
            //chama a home do sistema
            $this->home();
            return;
        }else if($rota == 'login'){
            $this->telaDeLogin();
            return;
        }else if($rota == 'logout'){
            $this->telaDelogout();
            return;
        } else if($rota == 'camiseta'){
            
            //protege a rota de calça para que apenas usuários logados possam acessar
            $this->apenasLogado();
            
            //controlador = camiseta
            include_once BASE_PATH . 'controle/controladorCamiseta.php';
            $controlador = new controladorCamiseta();
        } else if($rota == 'calça'){
            
            //protege a rota de calça para que apenas usuários logados possam acessar
            $this->apenasLogado();

            //controlador = calça
            include_once BASE_PATH . 'controle/controladorCalça.php';
            $controlador = new ControladorCalça();
        } else if($rota == 'usuarios'){

            //protege a rota de usuarios para que apenas usuários logados possam acessar
            $this->apenasLogado();

            //controlador = usuarios
            include_once BASE_PATH . 'controle/controladorUsuarios.php';
            $controlador = new ControladorUsuarios();
        }else{
            echo "Página não encontrada.";
            return;
        }

        //tratando a operação
        $operacao = isset($_GET['op']) ? $_GET['op'] : null;

        if(!$operacao || $operacao == 'listar'){
            $controlador->listar();
        }else if($operacao == 'exibir'){
            $controlador->exibir();
        }else if($operacao == 'novo'){
            $controlador->novo();
        }else if($operacao == 'editar'){
            $controlador->editar();
        }else if($operacao == 'deletar'){
            $controlador->deletar();
        }else{
            echo "Página não encontrada.";
            return;
        }

    }

    public function apenasLogado(){
        if(!$this->logado){
            $this->telaDeLogin();
            exit();
        }
    }

    public function telaDeLogin(){
        $this->controladorAuth->login();
    }

    public function telaDeLogout(){
        $this->controladorAuth->logout();
    }

    public function home(){
        include_once BASE_PATH . 'visao/index.php';
    }

    public function notFound(){
        http_response_code(404);
        include_once BASE_PATH . 'visao/pagina_nao_encontrada.html';
    }
}