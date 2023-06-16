<?php

require_once '../cadastro/db.php';

class login{
    private $nome;
    private $senha;
    
    public function setNome($nome) {
        $this->nome = $nome;

    }

    public function getNome(){
        return $this->nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;

    }

    public function getSenha(){
        return $this->senha;
    }


    public function insert($nome, $senha) {

        $sql = " INSERT INTO livro_caixa.login_empresa
        VALUES ('".$nome."', '".$senha."') ";
        
        $db = new db();
        $conn = $db->conectar();
        if ($conn->query($sql) === true) {
            $id = $conn->insert_id;
            $conn->close();
            
            header("Location: login.php?id=". $id);
        }else{
          echo "Error: " . $sql . "<br>" . $conn->error;
          exit();
    } 
}
}
