<?php
include_once 'topo.php';

// Pegar os dados da tela.
$id = $_POST["id"];
$nome = $_POST["nome"];
$ano = $_POST["ano"];
$genero = $_POST["genero"];
$nota = $_POST["nota"];
$sinopse = $_POST["sinopse"];

// abrir a conexão com o banco
include_once 'conexao2.php';

// Montar a instrução de atualizar
$sql = "update filmes set nome = '".$nome."', ano = '".$ano."', genero = '".$genero."', nota = '".$nota."', sinopse = '".$sinopse."' where idfilme =".$id;

// Executar
$rs = mysqli_query($con,$sql); // $rs -> variável que recebe o booleano.
    if($rs){    
        //echo"Atualizado com sucesso!";
        $msg = "Atualizado com sucesso!";
    }else{    
        //echo"Erro ao Gravar!";
        $msg = "Erro ao Gravar!";
    }

// Fechar conexão co o banco
mysqli_close($con);
echo"<script>
    alert('".$msg."');
    location.href='consulta.php';
</script>"; 

include_once 'rodape.php';
?>