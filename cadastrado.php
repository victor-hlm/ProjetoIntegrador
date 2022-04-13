<?php include_once 'topo.php';

// 1 resgatar os dados vindo do formulário
$nome = $_POST["nome"];
$ano = $_POST["ano"];
$genero = $_POST["genero"];
$nota = $_POST["nota"];
$sinopse = $_POST["sinopse"];

// 2 abrir a conexão com o banco de dados
include_once 'conexao2.php';

// 3 montar a instrução para gravar
$sql ="insert into filmes values(NULL,'".$nome."','".$ano."','".$genero."','".$nota."','".$sinopse."')";

// 4 gravar --> resultado é boolean se ok true... se deu ruim false.
$result = mysqli_query($con,$sql); // mysqli_query() para executar uma consulta no banco de dados.
    
    if($result){    
        //echo"Gravado com sucesso!";
        $msg = "Gravado com sucesso!";
    }else{    
        //echo"Erro ao Gravar!";
        $msg = "Erro ao Gravar!";
    }

// 6 fechar a conexão com o banco   
mysqli_close($con);
echo"<script>alert('".$msg."');
    location.href = 'cadastrar.php';
</script>";
include_once 'rodape.php';
?>