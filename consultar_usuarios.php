<?php

include_once 'topo.php';
echo"<h1>Consultar Usuário</h1>";
// Abrir a conexão com o banco.
include_once 'conexao2.php';
// Montar a instrução para buscar os produtos cadastrados.   
$sql = "select * from usuario ORDER BY nome ASC"; // ASC --> ascendente.    
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
            <th>CEP</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>IBGE</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Perfil</th>
            <th>Excluir</th>
            <th>Editar</th>
        </tr>               
    <?php        
    while($linha = mysqli_fetch_array($rs)){
    ?>
        <tbody id="myTable">
        <tr>
            <td><?php echo $linha["nome"]; ?></td>
            <td><?php echo $linha["CEP"]; ?></td>
            <td><?php echo $linha["Rua"]; ?></td>
            <td><?php echo $linha["Bairro"]; ?></td>
            <td><?php echo $linha["Cidade"]; ?></td>
            <td><?php echo $linha["Estado"]; ?></td>
            <td><?php echo $linha["IBGE"]; ?></td>
            <td><?php echo $linha["login"]; ?></td>
            <td><?php echo $linha["senha"]; ?></td>
            <td><?php echo $linha["perfil"]; ?></td>
            <td>
            <a href="editar_usuario.php?id=<?php echo base64_encode($linha["idusuario"]); ?>">
                editar
            </a>
            </td>
            <!-- CHAMA A EXCLUSÃO-->
            <!-- iremos codificar id na URL -->
            <td>
                <a href="excluir_usuario.php?id=<?php echo($linha["idusuario"]); ?>">excluir</a>
            </td>
        </tr>
        </tbody>
    <?php          
    }
    ?>
    </table>
    <?php
    }else{
        echo"não existe usuário cadastrado";    
    }
    mysqli_close($con);
    ?>

    <br>
    <a href="painel.php" class="btn btn-sm btn-secondary"> Voltar </a>
    <a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>
    </form>

    <?php include_once 'rodape.php';?>
    