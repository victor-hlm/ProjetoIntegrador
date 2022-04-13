<?php include_once 'topo.php'; ?>

<h3>Novo Filme</h3>

<form class="formgroup" action="cadastrado.php" method="post">
Nome:<br>
<input type="text" name="nome" id="nome" class="form-control" />
<br/>
Ano:<br>
<input type="text" name="ano" id="ano" class="form-control" />
<br/>
Gênero:<br/>
<select name="genero" id="genero" class="form-control" >
    <option value="">Selecione</option>
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
<input type="text" name="nota" id="nota" class="form-control" />
<br/>
Sinopse:<br>
<textarea type="text" name="sinopse" id="sinopse" class="form-control"></textarea>
<br/>


<input type="submit" value="Cadastrar Filme" class="btn btn-sm btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-sm btn-primary"/>
<br>
<br>
<a href="painel.php" class="btn btn-sm btn-secondary"> Voltar </a>
<a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>
</form>
<?php include_once 'rodape.php'; ?>