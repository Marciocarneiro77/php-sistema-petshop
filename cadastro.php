<?php 
   if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $cadastro = [];

    $cadastro['nome'] = $_GET['nome'];

    if(isset($_GET['raca'])){
        $cadastro['raca'] = $_GET['raca'];
    }else{
        $cadastro['raca'] = '';
    }

    if(isset($_GET['idade'])){
        $cadastro['idade'] = $_GET['idade'];
    }else{
        $cadastro['idade'] = ' ';
    }

    if(isset($_GET['sexo'])){
        $cadastro['sexo'] = $_GET['sexo'];
    }else{
        $cadastro['sexo'] = ' ';
    }

    if(isset($_GET['data'])){
        $cadastro['data'] = $_GET['data'];
    }else{
        $cadastro['data'] = ' ';
    }

    if(isset($_GET['hora'])){
        $cadastro['hora'] = $_GET['hora'];
    }else{
        $cadastro['hora'] = ' ';
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

}

include "conexao.php";

if(isset($cadastro)){
    $sqlInserir = "INSERT INTO tb_cadastrocaes(
        nome, raca, idade,sexo,dono, telefone, email
    ) VALUES(
        '{$cadastro['nome']}',
        '{$cadastro['raca']}',
        '{$cadastro['idade']}'
        '{$cadastro['sexo']}'
        '{$cadastro['dono']}'
        '{$cadastro['telefone']}'
        '{$cadastro['email']}'
    );";

    mysqli_query($conexao, $sqlInserir);
}

include "template.php";
?> 