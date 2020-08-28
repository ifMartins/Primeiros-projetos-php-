<?php
//host=127.0.0.1 port=5432 dbname=VScodeDB user=postgres password=123456"
class BancoDeDados {

    private static $dbNome = "VScodeDB";
    private static $dbHost = '127.0.0.1'; //127.0.0.1
    private static $dbPorta = '5432';
    private static $dbUsuario = 'postgres';
    private static $dbSenha = '123456';
    private static $conn = null;

    public static function conectar(){
        //apenas uma conexão para toda a aplicação
        if(self::$conn == null){
            $con_string = "host=" . self::$dbHost . 
                " port=" . self::$dbPorta .
                " dbname=" . self::$dbNome . 
                " user=" . self::$dbUsuario . 
                " password=" . self::$dbSenha;

            self::$conn = pg_connect($con_string)
            or die("Não foi possível conectar com o banco de dados.");
        }
        //retorna a conexão
        return self::$conn;
    }

}