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
        <img src="./img/cao4.png" alt="Usuário">
        <h1>CADASTRO DE CÃES</h1>
        <form action="cadastro.php" method="GET">
            <div class="row">
                <div>
                    <label for="usuario">Nome do cão</label><br>
                    <input type="text" name="usuario" id="usuario" maxlenght="50" required>
                </div>
                <div>
                    <label for="raca">Raça</label><br>
                    <input type="text" name="raca" id="raca">
                </div>
                <div>
                 <label for="idade">Idade</label><br>
                    
                 <div class="input-group"></div>
                 <div><label>Anos</label> <label>Meses</label></div>

                      <div><input type="number" name="number">

                     
                    <input type="number" name="number"></div>


                </div>

                    
                
                
                <div><br>
                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                 <option value="macho">Macho </option>
                 <option value="femea">Femêa</option>

                 </select>
                 </div>
                 
                 <div><form name="cadastro" method="GET" action="script.php"><br>
       <label>Data de Cadastro:</label></form><br>
       <input type="date" id="data" name="dataCadastro">
         <br><br>
         
       <label>Hora do Cadastro:</label><br>
       <input type="time" id="hora" name="horaCadastro">
       </div>
       
       <div><br>
                <div>
                    <label>Contato do dono:</label><br>
                    <label>Nome:</label><br>
                    <input type="contato" name="contato" id="contato"><br>
                    
                    <label>Telefone:</label><br>
                    <input type="telefone" name="telefone" id="telefone"><br>

                    <label>E-mail:</label><br>
                    <input type="email" name="email" id="email"><br>
                
                </div>
             <div>
                    <input type="checkbox" name="administrador" id="administrador" value="sim">
                    <label for="administrador">Já é Cliente</label>
                </div><br>

                <fieldset>
            <legend>Observações:</legend>
            <textarea name="minicurriculo" id="minicurriculo"></textarea>
        </fieldset>
            </div>

            <button type="submit">Cadastrar</button>
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
                    <th>IDADE</th>
                    <th>SEXO</th>
                    <th>DONO</th>
                    <th>TELEFONE</th>

                </tr>
            </thead>
            <tbody>
            <tr>
                  <?php include"conexao.php";?>
                  <?php 
                    $sqlBuscar = "SELECT * FROM tb_cadastrocaes"; 
                    $resultado = mysqli_query($conexao , $sqlBuscar);

                    $listaCadastros = [];

                   while($cadastro = mysqli_fetch_assoc($resultado)) {
                       $listaCadastros[] = $cadastro;
                   } 

                   foreach($listaCadastros as $cadastro): ?>
                    <tr>
                        <td><?php echo $cadastro['nomedocao']; ?></td>
                        
                       
                        <td><?php echo $cadastro['raca']; ?></td>
                    
                    
                        <td><?php echo $cadastro['idade']; ?></td>
                    
                    
                        <td><?php echo $cadastro['sexo']; ?></td>
                    
                    
                        <td><?php echo $cadastro['dono']; ?></td>

                        <td><?php echo $cadastro['telefone']; ?></td>
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