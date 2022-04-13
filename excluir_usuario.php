<?php
include_once 'topo.php';


// retirar a decodificação
// base64_decode
//$id = base64_decode($_GET["id"]); -> Para codficar a URL.
$id = $_GET["id"];

$sql = "delete from usuario where idusuario =".$id;

include_once 'conexao2.php';

if(mysqli_query($con,$sql)){
    //echo"Produto excluido com Sucesso!";
    $msg = "Usuário excluído com sucesso!";
}else{
    //echo"Erro ao Excluir";
    $msg = "Erro ao excluir!";
}
mysqli_close($con);

echo"<script>
    alert ('".$msg."');
    location.href='consultar_usuarios.php';
    </script>";

include_once 'rodape.php';


?>