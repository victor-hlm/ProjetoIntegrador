<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include_once 'topo.php'; ?>
<body>
    <br>
    <br>
    <div class="row justify-content-evenly text-center responsive">
        
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="img/catalogo.png" class="card-img-top img-responsive" alt="...">
                <hr>
                <a href="cadastrar.php" class="btn btn-sm btn-primary">Cadastrar Novo Filme</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="img/consulta.png" class="card-img-top img-responsive" alt="...">
                <hr>
                <a href="consulta.php" class="btn btn-sm btn-primary">Consultar Filmes</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="img/usuario.png" class="card-img-top img-responsive" alt="...">
                <hr>
                <a href="consultar_usuarios.php" class="btn btn-sm btn-primary">Consultar Usuários</a>
            </div>
        </div>
    </div>
 
</body>
<?php include_once 'rodape.php'; ?>
</html>
