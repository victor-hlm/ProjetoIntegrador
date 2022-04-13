<?php include_once 'topo.php'; 

// resgate de dados da URL
$id = base64_decode($_GET["id"]);
// montar a instrução para selecionar o registro na base de dados

$sql = "select * from usuario where idusuario=".$id;

// abrir a conexão com o banco
include_once 'conexao2.php';

// executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){
    $reg = mysqli_fetch_array($rs);
}
?>

<h3>Atualizar Usuário</h3>
<form class="formgroup" name="FormSenha" action="atualizar_usuario.php" method="post" onsubmit="return validarSenha()">
<label>Nome:
<input name="nome" type="text" id="nome" size="60" class="form-control" requerid="true" value="<?php echo $reg["nome"]; ?>"/></label><br/>
<label>Cep:
<input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
    onblur="pesquisacep(this.value);" class="form-control"  value="<?php echo $reg["CEP"]; ?>"/></label><br/>
<label>Rua:
<input name="rua" type="text" id="rua" size="60" class="form-control" value="<?php echo $reg["Rua"]; ?>"/></label><br />
<label>Bairro:
<input name="bairro" type="text" id="bairro" size="40" class="form-control" value="<?php echo $reg["Bairro"]; ?>"/></label><br />
<label>Cidade:
<input name="cidade" type="text" id="cidade" size="40" class="form-control" value="<?php echo $reg["Cidade"]; ?>"/></label><br />
<label>Estado:
<input name="uf" type="text" id="uf" size="2" class="form-control" value="<?php echo $reg["Estado"]; ?>"/></label><br />
<label>IBGE:
<input name="ibge" type="text" id="ibge" size="8" class="form-control" value="<?php echo $reg["IBGE"]; ?>"/></label><br />
<label>Login:
<input name="login" type="text" id="login" size="20" class="form-control" value="<?php echo $reg["login"]; ?>"/></label><br />

<label>Senha:
<input name="senha" type="password" id="senha" size="20" class="form-control" value="<?php echo $reg["senha"]; ?>"/></label><br />
<label>Confirmar Senha:
<input name="senhaconf" type="password" id="senhaconf" size="20" class="form-control" value="<?php echo $reg["ano"]; ?>"/></label><br/><br/>

<input type="hidden" name="id" value="<?php echo $reg["idusuario"]; ?>"/> 
<input type="submit" value="Atualizar Usuário" class="btn btn-sm btn-primary"/>  
<input type="reset" value="Limpar Campos" class="btn btn-sm btn-primary"/>
<br>
<br>
<a href="consulta.php" class="btn btn-sm btn-secondary"> Voltar </a>
<a href="sair.php" class="btn btn-sm btn-secondary"> Sair </a>
</form>
<?php include_once 'rodape.php'; ?>