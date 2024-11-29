<?php
// Inclusão do arquivo de conexão com o banco de dados
include('../database/conexaoBD.php');

// Verificação da conexão
if (!$conexaoBD) {
    die("Conexão com o banco de dados falhou: " . mysqli_connect_error());
}

// Inicialização da variável "busca"
$busca = "";

// Verificação se o parâmetro de busca foi definido
if (isset($_GET['busca'])) {
    $busca = $_GET['busca'];
}

// Comando SQL para selecionar produtos com base na busca
$sql_code = "SELECT idproduto, nome_produto, preco_un, quantidade, preco_box, imagem FROM produto";
if ($busca != "") {
    // Adiciona WHERE à consulta se houver um termo de busca
    $sql_code .= " WHERE nome_produto LIKE '%" . $conexaoBD->real_escape_string($busca) . "%'";
}

// Execução da consulta e obtenção dos resultados
$result = $conexaoBD->query($sql_code);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>LISTA DE PRODUTOS</h1>
    <br><br>
    <form action="" method="GET">
        <input name="busca" placeholder="Digite o nome do produto" type="text" value="<?php echo htmlspecialchars($busca); ?>">
        <button type="submit">Pesquisar</button>
    </form>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Preço Atacado</th>
            <th>Imagem</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['idproduto']; ?></td>
                    <td><?php echo $row['nome_produto']; ?></td>
                    <td><?php echo $row['preco_un']; ?></td>
                    <td><?php echo $row['quantidade']; ?></td>
                    <td><?php echo $row['preco_box']; ?></td>
                    <td><img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome_produto']; ?>"></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum produto encontrado</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
// Fechar a conexão com o banco de dados
$conexaoBD->close();
?>
