
 
<?php 
//verificando se o formulario foi submitado

//se existir a variável submit ele irá salvar no banco de dados todas as informações

if(isset($_POST['submit'])) {

    //testar se as variávis estão funcionando
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Sobrenome: ' . $_POST['sobrenome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Endereço: '. $_POST['endereco']);
    // print_r('<br>');
    // print_r('Número: ' . $_POST['numero']);
    // print_r('<br>');
    // print_r('telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('cep: ' . $_POST['cep']);
    // print_r('<br>');
    // print_r('sexo: ' . $_POST['sexo']);

//incluindo arquivo de conexão
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $sexo = $_POST['sexo'];

 // variável de conexão
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,endereco,numero,telefone,cep,sexo) VALUES ('$nome','$sobrenome','$email','$endereco','$numero','$telefone','$cep','$sexo')");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Clientes</title>

    <link rel="stylesheet" href="./style.css"/>
    
    

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap"
      rel="stylesheet"
    />

</head>
<body>
    <div class="container">

        <!--Formulário-->
<!--action envia os dados deste arquivo-->
        <form action="formulario.php" method="POST" id="formulario" class="formulario">
            <legend>
                Cadastro de cliente
            </legend>

            <div class="input-group">
                <label for="nome">Nome:</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    class="required"
                    placeholder="Insira seu nome"
                    oninput="nameValidate()"
                />
                <a class="error">Preencha um nome</a>
            </div>

            <div class="input-group">
                <label for="sobrenome">Sobrenome: </label>
                <input
                    type="text"
                    id="sobrenome"
                    name="sobrenome"
                    class="required"
                    placeholder="Insira seu sobrenome"
                    oninput="sobrenomeValidate()"   
                />
                <a class="error">Preencha um sobrenome</a>
            </div>

            <div class="input-group">
                <label for="email">E-mail: </label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="required"
                    placeholder="Insira seu e-mail"
                />
            </div>

            <div class="colunas">
            <div class="input-group">
                <label for="endereco">Endereço: </label>
                <input
                    type="text"
                    id="endereco"
                    name="endereco"
                    class="required"
                    placeholder="Insira o endereço" 
                />
            </div>

            <div class="input-group">
                <label for="numero">Número</label>
                <input
                    type="text"
                    id="numero"
                    name="numero"
                    class="required"
                    placeholder="Insira o número"
                />
            </div>
                
            </div>

            <div class="colunas">
                <div class="input-group">
                    <label for="telefone">Telefone:</label>
                    <input
                        type="text"
                        id="telefone"
                        name="telefone"
                        class="required"
                        placeholder="Insira seu Telefone"
                />
                </div>
                
                <div class="input-group">
                    <label for="cep">CEP:</label>
                    <input
                        type="text"
                        id="cep"
                        name="cep"
                        class="required"
                        placeholder="Insira seu CEP"
                />
                </div>
            </div>
            <div class="colunas">
                <div class="input-group">
                    <label for="sexo">Sexo: </label>
                    <select name="sexo" id="sexo">
                        <option value="">informar...</option>
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                        <option value="x">Não informar</option>
                    </select>
                </div>
            </div>
            <div class="footer">
                <button type="submit" id="submit" class="botao" name="submit" >
                    Enviar
                </button>
            </div>
        </form>

    </div>
    <script src="./script.js"> </script>
    
</body>
</html>