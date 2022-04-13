
<?php include_once 'topo.php'; ?>
    
    <div class="container">

    <div class="card-deck mb-3 text-center">
        
        <div class="col-sm"></div>

        <div class="card-deck mb-4 shadow-sm col-sm">
            
            <div class="card-body">
                <h3> Faça Seu Login </h3>
                <form action="login.php" method="post">
                Usuário:<br>
                <input type="text" name="login"/><br>
                Senha:<br>
                <input type="password" name="senha"/><br>                
                <input type="submit" value="login"/>
                </br>

                <?php
                if(isset($_GET["msg"])){
                echo $_GET["msg"];
                }
                ?>
                </form>

                </br>
                <a href="cadastrar_user.php" class="btn btn-sm btn-primary">Cadastrar Novo Usuário</a> 
                </br>

            </div>

        </div>

        <div class="col-sm"></div>
    </div>
<?php include_once 'rodape.php'; ?>