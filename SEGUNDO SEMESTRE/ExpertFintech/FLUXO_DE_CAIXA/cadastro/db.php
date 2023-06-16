<?php

class db{
    
    public function conectar() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = 'livro_caixa';
    
        $conn = new mysqli($servername, $username, $password, $dbname);

        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
         echo "ta errado";

        }else{
            return $conn;
        }          
    }
  
}