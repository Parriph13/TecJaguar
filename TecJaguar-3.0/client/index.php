<?php
// Inclusão do arquivo de conexão com o banco de dados
include('../database/conexaoBD.php');

// Verificação da conexão
if (!$conexaoBD) {
    die("Conexão com o banco de dados falhou: " . mysqli_connect_error());
}

// Inicialização da variável de resposta
$mensagem = "";

// Verificação se o formulário foi submetido
if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar o login
    $sql_code = "SELECT * FROM cliente WHERE email = '" . $conexaoBD->real_escape_string($email) . "' AND senha = '" . $conexaoBD->real_escape_string($senha) . "'";
    $result = $conexaoBD->query($sql_code);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        header("Location: TecJaguar-3.0/upload/index.php"); // Verifique se este caminho está correto
        exit(); // Certifique-se de que o script pare de ser executado após o redirecionamento
    } else {
        // Login falhou
        $mensagem = "E-mail ou senha incorretos.";
    }
}

// Fechar a conexão com o banco de dados
$conexaoBD->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>
<body>
    <h1>CONTA NA TECJAGUAR</h1>
    <?php if ($mensagem != ""): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="email">E-mail: </label>
        <input type="text" name="email" id="email" required>
        <p></p>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <p></p>
        <button type="submit" name="entrar">ENTRAR</button>
        <p></p>
        <a href="#">Não possuo conta</a>
    </form>
</body>
</html>
