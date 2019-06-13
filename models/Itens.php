<?php
class  Itens extends model{
    public function getItem($id){
        $array = array();
        
        $sql = $this->db->prepare("SELECT * FROM item WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetch(PDO::FETCH_ASSOC);
        }
        
        return $array;
        
    }
    
    public function getRelatorio($data_inicio,$data_fim){
        $array = array();
        
        $sql = $this->db->prepare("SELECT i.id AS codigo
                                , i.data_criacao AS criacao     
                                , i.title AS item
                                , u.nome AS nome_cliente
                                , u.dt_cadastro AS data_cadastro_usuario
                                , u.cpf AS identificacao
                                , u.ativo AS status_ativo
                                    FROM itens i INNER JOIN usuario u ON i.id_usuario = u.id
                                      WHERE i.data_criacao BETWEEN  :data_inicio AND  :data_fim
                                     ORDER BY i.data_criacao ASC");
        $sql->bindValue(":data_inicio", $data_inicio);
        $sql->bindValue(":data_fim", $data_fim);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $array;
        
    }
    
}