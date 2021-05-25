<?php 
   if(isset($_GET['nome']) && $_GET['nome'] != ' '){
    $cadastro = [];

    $cadastro['nome'] = $_GET['nome'];

    if(isset($_GET['raca'])){
        $cadastro['raca'] = $_GET['raca'];
    }else{
        $cadastro['raca'] = ' ';
    }

    if(isset($_GET['idade_anos'])){
        $cadastro['idade_anos'] = $_GET['idade_anos'];
    }else{
        $cadastro['idade_anos'] = ' ';
    }
    if(isset($_GET['idade_meses'])){
        $cadastro['idade_meses'] = $_GET['idade_meses'];
    }else{
        $cadastro['idade_meses'] = ' ';
    }


    if(isset($_GET['sexo'])){
        $cadastro['sexo'] = $_GET['sexo'];
    }else{
        $cadastro['sexo'] = ' ';
    }

    if(isset($_GET['data_cadastro'])){
        $cadastro['data_cadastro'] = $_GET['data_cadastro'];
    }else{
        $cadastro['data_cadastro'] = ' ';
    }

    if(isset($_GET['hora_cadastro'])){
        $cadastro['hora_cadastro'] = $_GET['hora_cadastro'];
    }else{
        $cadastro['hora_cadastro'] = ' ';
    }
    if(isset($_GET['nome_dono'])){
        $cadastro['nome_dono'] = $_GET['nome_dono'];
    }else{
        $cadastro['nome_dono'] = ' ';
    }
    if(isset($_GET['telefone'])){
        $cadastro['telefone'] = $_GET['telefone'];
    }else{
        $cadastro['telefone'] = ' ';
    }

    if(isset($_GET['email'])){
        $cadastro['email'] = $_GET['email'];
    }else{
        $cadastro['email'] = ' ';
    }

    if(isset($_GET['cliente'])){
        $cadastro['cliente'] = $_GET['cliente'];
    }else{
        $cadastro['cliente'] = ' ';
    }
}

include "conexao.php";

if(isset($cadastro)){
    $sqlInserir = "INSERT INTO tb_cadastrocaes(
        nome, raca, idade_anos, idade_meses, sexo, data_cadastro, hora_cadastro, nome_dono, telefone, email, cliente
    ) VALUES(
        '{$cadastro['nome']}',
        '{$cadastro['raca']}',
        '{$cadastro['idade_anos']}',
        '{$cadastro['idade_meses']}',
        '{$cadastro['sexo']}',
        '{$cadastro['data_cadastro']}',
        '{$cadastro['hora_cadastro']}',
        '{$cadastro['nome_dono']}',
        '{$cadastro['telefone']}',
        '{$cadastro['email']}',
        '{$cadastro['cliente']}'
    );";
// print_r($sqlInserir);
// exit();

    mysqli_query($conexao, $sqlInserir);

}
include "index.php";
include "template.php";

?> 