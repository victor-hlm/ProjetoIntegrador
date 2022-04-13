<?php

include_once 'topo.php';
echo"<h1>Consultar Filmes</h1>";
// Abrir a conexão com o banco.
include_once 'conexao2.php';
// Montar a instrução para buscar os produtos cadastrados.   
$sql = "select * from filmes ORDER BY nome ASC"; // ASC --> ascendente.    
// Executar a consulta na base de dados
$rs = mysqli_query($con,$sql);
// Vou verificar se tem produto no banco    
if(mysqli_num_rows($rs) > 0){
?>
    <input id="myInput" type="text" placeholder="Search..">
    <br><br>
    <table table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Ano</th>
            <th>Gênero</th>
            <th>Nota</th>
            <th>Sinopse</th>
        </tr>               
    <?php        
    while($linha = mysqli_fetch_array($rs)){
    ?> 
        <tbody id="myTable">
        <tr>
            <td><?php echo $linha["nome"]; ?></td>
            <td><?php echo $linha["ano"]; ?></td>
            <td><?php echo $linha["genero"]; ?></td>
            <td><?php echo $linha["nota"]; ?></td>
            <td><?php echo $linha["sinopse"]; ?></td>
        </tr>
        </tbody>
    <?php          
    }
    ?>
    </table>
    <?php
    }else{
        echo"não existe produto cadastrado";    
    }
    mysqli_close($con);
    ?>

    <br>
    <a href="painel.php" class="btn btn-sm btn-secondary"> Voltar </a>
    <a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>

    <?php include_once 'rodape.php';?>