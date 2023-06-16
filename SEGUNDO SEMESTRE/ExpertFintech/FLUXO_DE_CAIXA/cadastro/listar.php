<?php

require_once '../cadastro/db.php';
$db = new db();
$conexao = $db->conectar();
$sql = " SELECT * FROM login_empresa";
$resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");


while ($registro = mysqli_fetch_array($resultado))
{ 
  $nome = $registro['nome'];
  $senha = $registro['senha'];

  echo $nome . ' - ' . $senha . ' - ' . '<br />' ;
}
 mysqli_close($conn);