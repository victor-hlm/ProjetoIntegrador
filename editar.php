<?php include_once 'topo.php'; 

// resgate de dados da URL
$id = base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados
$sql = "select * from filmes where idfilme=".$id;

// abrir a conexão com o banco
include_once 'conexao2.php';

// executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    $reg = mysqli_fetch_array($rs);
}
?>
<h3>Atualizar Filme</h3>
<form class="formgroup" action="atualizar.php" method="post">
Nome:<br>
<input type="text" name="nome" id="nome" class="form-control" value="<?php echo $reg["nome"]; ?>"/>
<br/>
Ano:<br>
<input type="text" name="ano" id="ano" class="form-control"  value="<?php echo $reg["ano"]; ?>"/>
<br/>
Gênero:<br>
<select name="genero" id="genero" class="form-control" >
    <option value="<?php echo $reg["genero"]; ?>"><?php echo $reg["genero"]; ?></option>
    <option value="Ação">Ação</option>
    <option value="Aventura">Aventura</option>
    <option value="Comédia">Comédia</option>
    <option value="Drama">Drama</option>
    <option value="Fantasia">Fantasia</option>
    <option value="Ficcao Científica">Ficção Científica</option>
    <option value="Musical">Musical</option>
    <option value="Romance">Romance</option>
    <option value="Suspense">Suspense</option>
    <option value="Terror">Terror</option>
</select>
<br/>
Nota no IMDB:<br>
<input type="text" name="nota" id="nota" class="form-control" value="<?php echo $reg["nota"]; ?>" />
<br/>
Sinopse:<br>
<textarea type="text" name="sinopse" id="sinopse" class="form-control" value="<?php echo $reg["sinopse"]; ?>"></textarea>
<br/>
<input type="hidden" name="id" value="<?php echo $reg["idfilme"]; ?>"/> 
<input type="submit" value="Atualizar Filme" class="btn btn-sm btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-sm btn-primary"/>
<br>
<br>
<a href="consulta.php" class="btn btn-sm btn-secondary"> Voltar </a>
<a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>
</form>
<?php include_once 'rodape.php'; ?>