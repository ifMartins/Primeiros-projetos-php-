<?php

class ModeloCalça{

    function listarTodos(){
        $query = "SELECT * FROM tabela_calça order by cal_referencia";
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
         $query = "SELECT * FROM tabela_calça WHERE id_calça = $1";
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
            return " não pode estar em branco.";
        }

        $query = "INSERT INTO tabela_calça (cal_referencia, cal_cor, cal_tamanho, cal_composiçao, cal_quantidade, cal_descriçao, cal_modelo) VALUES ($1, $2, $3, $4, $5, $6, $7)";
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
            return "Não foi possível deletar a referencia.";
        }
        $query = "DELETE FROM tabela_calça WHERE id_calça = $1";
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
            return "Não foi possível editar a referencia.";
        }
        if(is_null($referencia) || $referencia == ''){
            return " não pode estar em branco.";
        }

        $query = "UPDATE tabela_calça SET  cal_referencia = $1, cal_cor = $2, cal_tamanho = $3, cal_composiçao = $4, cal_quantidade = $5, cal_descriçao = $6, cal_modelo = $7 WHERE id_calça = $8";
        $result = pg_query_params($query, array($referencia, $cor, $tamanho, $composiçao, $quantidade, $descriçao, $modelo, $id))
                or die("Não foi possível executar a query: " . pg_last_error());

        if(pg_affected_rows($result) > 0){
            return "ok";
        }else{
            return false;
        }
    }
}