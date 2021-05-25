<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cães</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
   <div class="pagina">

      <div class="container text-center">
        <img src="./img/cao4.png" alt="Cadastro">
        <h1>CADASTRO DE CÃES</h1>
        <form action="cadastro.php" method="GET">
            <div class="row">
                <div>
                    <label for="nome">Nome do cão</label><br>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="raca">Raça</label><br>
                    <input type="text" name="raca" id="raca">
                </div>
                <div>
                 <label for="idade">Idade:</label><br>
                    
                 <div class="input-group"></div>
                 <div><label>Anos</label> <label>Meses</label></div>

                      <div><input type="number" id="idade_anos" name="idade_anos">

                     
                    <input type="number" id="idade_meses" name="idade_meses"></div>


                </div>

                    
                
                
                <div><br>
                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                 <option value="macho">Macho </option>
                 <option value="femea">Femêa</option>

                 </select>
                 </div>
                 
                 <div><form name="cadastro" method="GET" action="cadastro.php"><br>
       <label>Data de Cadastro:</label></form><br>
       <input type="date" id="data_cadastro" name="data_cadastro">
         <br><br>
         
       <label>Hora do Cadastro:</label><br>
       <input type="time" id="hora_cadastro" name="hora_cadastro">
       </div>
       
       <div><br>
                <div>
                    <label>Contato do dono:</label><br>
                    <label>Nome:</label><br>
                    <input type="text" name="nome_dono" id="nome_dono"><br>
                    
                    <label>Telefone:</label><br>
                    <input type="telefone" name="telefone" id="telefone"><br>

                    <label>E-mail:</label><br>
                    <input type="email" name="email" id="email"><br>
                
                </div>
             <div>
                   <label>Já é Cliente:</label>
                   
                   <input  name="cliente" type="checkbox" id="cliente"  value="sim">
                    
                </div><br>

                <fieldset>
                     <legend>Observações:</legend>
                     <textarea name="minicurriculo" id="minicurriculo"></textarea>
                </fieldset>
            </div>
<div><br>
            <button type="submit" id="btn" class="mt-3 d-block btn btn-danger">Cadastrar</button>
            </div>
        </form>
    </div><br>
    <footer>
        <h6>Desenvolvido por Marcio Oliveira Carneiro - TI</h6></footer>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>NOME DO CÃO</th>
                    <th>RAÇA</th>
                    <th>ANOS</th>
                    <th>MESES</th>
                    
                    <th>SEXO</th>
                    <th>DONO</th>
                    <th>TELEFONE</th>
                    <th>E-MAIL</th>
                    <th>DATA CADASTRO</th>
                    <th>HORA CADASTRO<th>
                   <th>JÁ É CLIENTE</th>

                </tr>
            </thead>
            <tbody>
            <tr>
         
                <?php include "conexao.php"?>;
                  <?php 
                    $sqlBuscar = "SELECT * FROM tb_cadastrocaes"; 
                    $resultado = mysqli_query($conexao , $sqlBuscar);
                   
                    $sistemaCadastros = [];

                   while($cadastro = mysqli_fetch_assoc($resultado)) {
                       $sistemaCadastros[] = $cadastro;
                       
                   }?>
<?php
                   foreach($sistemaCadastros as $cadastro): ?>
                   
                    <tr>
                        <td><?php echo $cadastro['nome']; ?></td>
                        
                       
                        <td><?php echo $cadastro['raca']; ?></td>
                    
                    
                        <td><?php echo $cadastro['idade_anos']; ?></td>
                    
                        <td><?php echo $cadastro['idade_meses']; ?></td>
                    
                        <td><?php echo $cadastro['sexo']; ?></td>
                        
                        <td><?php echo $cadastro['nome_dono']; ?></td>

                        <td><?php echo $cadastro['telefone']; ?></td>

                        <td><?php echo $cadastro['email']; ?></td>

                        <td><?php echo $cadastro['data_cadastro']; ?></td>

                        <td><?php echo $cadastro['hora_cadastro']; ?></td>
                        <td><?php echo $cadastro['cliente']; ?></td>
                        
                    </tr>
                    
                    
                <?php endforeach; ?>

                </tr>
                
                
            </tbody>
        </table> 
    </div>
                   

    <script src="bootstrap-5/bootstrap.bundle.min.js"></script>
    <script src="js/funcoes.js"></script>
    
</body>
</html>