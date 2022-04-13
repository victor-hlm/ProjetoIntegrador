<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include_once 'topo.php'; ?>   
    
    <?php
    echo "Seja Bem Vindo(a) ".$_SESSION["nome"]; 
    ?>
    <a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>
    <?php
    if($_SESSION["perfil"] == "adm"){
        include_once 'menu_adm.php';
    }else{
        include_once 'menu_user.php'; 
    }

    ?>
    
    <?php include_once 'rodape.php'; ?>

</body>
</html>