<?php
class  Usuarios extends model{
    
    public $erro;
    
    public function getUsuario($cpf){
        $array = array();
        
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE cpf = :cpf");
        $sql->bindValue(":cpf", $cpf);
        $sql->execute();
        
        if ($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        
        return $array;
        
    }
    
    public function login ($cpf, $senha){
        $sql = $this->db->prepare("SELECT * FROM usuario
                                         WHERE cpf = :cpf AND senha = :senha");
        $sql->bindValue(":cpf", $cpf);
        $sql->bindValue(":senha", md5($senha));
        try{
            $sql->execute();
            
        } catch (PDOException $sql){
            $this->erro = "Falha ao conectar com o banco de dados: ".$sql->getMessage();
            return false;
        }
        
        if($sql->rowCount() > 0){
            return TRUE;
        } else {
            $this->erro = "Usuário ou Senha Inválida.";
            return FALSE;
        }
    }
}