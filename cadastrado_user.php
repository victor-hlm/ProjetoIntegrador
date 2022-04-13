<?php include_once 'topo.php';

// 1 resgatar os dados vindo do formulário
$nome = $_POST["nome"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["uf"];
$ibge = $_POST["ibge"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$perfil = $_POST["perfil"];


// 2 abrir a conexão com o banco de dados
include_once 'conexao1.php';

// 3 montar a instrução para gravar
$sql ="insert into usuario values(NULL,'".$nome."','".$cep."','".$rua."','".$bairro."','".$cidade."','".$estado."','".$ibge."','".$login."','".$senha."','".$perfil."')";

// 4 gravar --> resultado é boolean se ok true... se deu ruim false.
$result = mysqli_query($con,$sql); // mysqli_query() para executar uma consulta no banco de dados.
    
    if($result){    
        //echo"Gravado com sucesso!";
        $msg = "Novo usuário cadastrado com sucesso!";
    }else{    
        //echo"Erro ao Gravar!";
        $msg = "Erro ao cadastrar usuário!";
    }

// 6 fechar a conexão com o banco   
mysqli_close($con);
echo"<script>alert('".$msg."');
    location.href = 'cadastrar_user.php';
</script>";
include_once 'rodape.php';
?>