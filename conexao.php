<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_caes';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não Conectou</h2>!!! Erro: " . mysqli_error());
    
}
else{
    echo"Conectado";
    
}


?>