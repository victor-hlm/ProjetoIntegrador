<?php include_once 'topo.php'; ?>

<!-- Adicionando Javascript -->
<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>

<h3>Novo Usuário</h3>

<!-- Inicio do formulario -->
<form class="formgroup" name="FormSenha" action="cadastrado_user.php" method="post" onsubmit="return validarSenha()">
    <label>Nome:
    <input name="nome" type="text" id="nome" size="60" class="form-control" requerid="true"/></label><br />
    <label>Cep:
    <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
            onblur="pesquisacep(this.value);" class="form-control"/></label><br />
    <label>Rua:
    <input name="rua" type="text" id="rua" size="60" class="form-control"/></label><br />
    <label>Bairro:
    <input name="bairro" type="text" id="bairro" size="40" class="form-control"/></label><br />
    <label>Cidade:
    <input name="cidade" type="text" id="cidade" size="40" class="form-control"/></label><br />
    <label>Estado:
    <input name="uf" type="text" id="uf" size="2" class="form-control"/></label><br />
    <label>IBGE:
    <input name="ibge" type="text" id="ibge" size="8" class="form-control"/></label><br />
    <label>Login:
    <input name="login" type="text" id="login" size="20" class="form-control"/></label><br />
    
    <label>Senha:
    <input name="senha" type="password" id="senha" size="20" class="form-control"/></label><br />
    <label>Confirmar Senha:
    <input name="senhaconf" type="password" id="senhaconf" size="20" class="form-control"/></label><br/><br/>
    
    <input type="submit" value="Cadastrar Usuário" class="btn btn-sm btn-primary"/>  
    <input type="reset" value="Limpar Campos" class="btn btn-sm btn-primary"/>
</form>

<br>
<a href="index.php" class="btn btn-sm btn-secondary"> Voltar </a>
</form>
<?php include_once 'rodape.php'; ?>