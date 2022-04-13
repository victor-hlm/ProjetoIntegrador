<?php
include_once 'topo.php';

// Pegar os dados da tela.
$id = $_POST["id"];
$nome = $_POST["nome"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["uf"];
$ibge = $_POST["ibge"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
//$perfil = $_POST["perfil"];

// abrir a conexão com o banco
include_once 'conexao2.php';

echo $id;
// Montar a instrução de atualizar

$sql = "update usuario set nome = '".$nome."', CEP = '".$cep."', Rua = '".$rua."', Bairro = '".$bairro."', Cidade = '".$cidade."', Estado = '".$estado."', IBGE = '".$ibge."', login = '".$login."', senha = '" .$senha."'  where idusuario = ".$id;

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
    location.href='consultar_usuarios.php';
</script>";

include_once 'rodape.php';
?>