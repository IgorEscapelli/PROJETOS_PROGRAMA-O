<?php
require_once '../cadastro/models.php';
if(isset($_POST['nome'])){

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = " INSERT INTO livro_caixa.login_empresa
        VALUES ('".$nome."', '".$senha."') ";
        
    $db = new db();
    $conn = $db->conectar();
    echo 'Até aqui deu certo';

    print_r($conn);

    if ($conn->query($sql) == true) {
        $id = $conn->insert_id;
        $conn->close();

        echo 'Entrou no IF';
            
        header("Location: login.php?id=". $id);
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo 'Entrou no Else';
        exit();
    } 


    
    // $login = new login();


    // $login->setNome($nome);
    // $login->setSenha($senha);
    
    
    // $login->insert($nome, $senha,);
}