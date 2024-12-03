<?php
include('../database/conexaoBD.php');

//Conexão o banco
if (!$conexaoBD) {
    die("Conexão com o banco de dados falhou: " . mysqli_connect_error());
}

// Verifica se o formulário foi submetido
if (isset($_POST['submit'])) {

    // Atribui valores das entradas do formulário às variáveis
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : ''; // Verifica se o campo 'sexo' está definido
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];

    // Inserindo dados no banco de dados
    $sql = "INSERT INTO cliente (nome_cliente, cpf, email, senha, telefone, sexo, data_nascimento, cidade, bairro, endereco, cep, estado, pais) 
            VALUES ('$nome', '$cpf', '$email', '$senha', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$bairro', '$endereco', '$cep', '$estado', '$pais')";
    
    if (mysqli_query($conexaoBD, $sql)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexaoBD);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conexaoBD);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Cadastra-se aqui</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="label-input">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="label-input">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="label-input">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="label-input">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="label-input">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>
                    <label for="bairro" class="label-input">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="label-input">Endereço com n°</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="label-input">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="pais" id="pais" class="inputUser" required>
                    <label for="pais" class="label-input">País</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>

