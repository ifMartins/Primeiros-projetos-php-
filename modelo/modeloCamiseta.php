<?php

class modeloCamiseta{

    function listarTodos(){
        $query = "SELECT * FROM tabela_camisetas order by cam_referencia";
        $result = pg_query($query)
                    or die("Não foi possível executar a query: " . pg_last_error());
        return pg_fetch_all($result);
    }

    function buscar($id){
         //validação para buscar
         $id = intval($id);
         if(is_null($id) ){
             return "Não foi possível buscar as referencias.";
         }
         $query = "SELECT * FROM tabela_camisetas WHERE id_camiseta = $1";
         $result = pg_query_params($query, array($id))
                    or die("Não foi possível executar a query: " . pg_last_error());
 
         if(pg_num_rows($result) > 0){
             return pg_fetch_assoc($result, 0);
         }else{
             return false;
         }
    }

    function adicionar($referencia, $cor, $tamanho, $composiçao, $quantidade, $descriçao, $modelo){
        //validações ao adicionar
        if(is_null($referencia) || $referencia == ''){
            return "O referencia não pode estar em branco.";
        }

        $query = "INSERT INTO tabela_camisetas (cam_referencia, cam_cor, cam_tamanho, cam_composiçao, cam_quantidade, cam_descriçao, cam_modelo) VALUES ($1, $2, $3, $4, $5, $6, $7)";
        $result = pg_query_params($query, array($referencia, $cor, $tamanho, $composiçao, $quantidade, $descriçao, $modelo))
                    or die("Não foi possível executar a query: " . pg_last_error());

        $adicionou = false;
        if(pg_affected_rows($result) > 0){
            $adicionou = "ok";
        }
        return $adicionou;
    }

    function deletar($id){
        //validação para deletar
        $id = intval($id);
        if(is_null($id) ){
            return "Não foi possível deletar o prato.";
        }
        $query = "DELETE FROM tabela_camisetas WHERE id_camiseta = $1";
        $result = pg_query_params($query, array($id)) 
            or die("Não foi possível executar a query: " . pg_last_error());

        $deletou = false;
        if(pg_affected_rows($result) > 0){
            $deletou = true;
        }
        return $deletou;
    }

    function editar($id, $referencia, $cor, $tamanho, $composiçao, $quantidade, $descriçao, $modelo){
        //validações para editar
        $id = intval($id);
        if(is_null($id) ){
            return "Não foi possível editar a camiseta.";
        }
        if(is_null($referencia) || $referencia == ''){
            return "O referencia de camiseta não pode estar em branco.";
        }

        $query = "UPDATE tabela_camisetas SET cam_referencia = $1, cam_cor = $2, cam_tamanho = $3, cam_composiçao = $4, cam_quantidade = $5, cam_descriçao = $6, cam_modelo = $7 WHERE id_camiseta = $8";
        $result = pg_query_params($query, array($referencia, $cor, $tamanho, $composiçao, $quantidade, $descriçao, $modelo, $id))
                or die("Não foi possível executar a query: " . pg_last_error());

        if(pg_affected_rows($result) > 0){
            return "ok";
        }else{
            return false;
        }
    }
}