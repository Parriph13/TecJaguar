<?php
// Inclusão do arquivo de conexão com o banco de dados
include('../database/conexaoBD.php');

// Verificação da conexão
if (!$conexaoBD) {
    die("Conexão com o banco de dados falhou: " . mysqli_connect_error());
}

$sql_code = "SELECT idproduto, nome_produto, preco_un, quantidade, preco_box, imagem FROM produto";

// Execução da consulta e obtenção dos resultados
$result = $conexaoBD->query($sql_code);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="prod.css">
    <title>Produtos</title>
</head>
<body>
<section class="produtos-nav">
    <div class="nav-categorias">
        <h1>Produtos</h1>
        <hr>
        <nav class="categorias">
            <ul>
                <li><a href="carregador.html"><button>Carregador</button></a></li>
                <li><a href="fone.html"><button>Fone de Ouvido</button></a></li>
                <li><a href="suporte.html"><button>Suporte</button></a></li>
            </ul>
        </nav>
    </div>

    <div class="produtos">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <label>
                    <div id="img">
                        <img src="<?php echo $row['imagem']; ?>" alt="<?php echo $row['nome_produto']; ?>">
                    </div>
                    <div id="nome">
                        <?php echo $row['nome_produto']; ?>
                    </div>
                    <div id="preco">
                        <?php echo $row['preco_un']; ?>
                    </div>
                    <div id="add_car">
                        <form method="POST" action="carrinho.php">
                            <input type="hidden" name="acao" value="adicionar">
                            <input type="hidden" name="produto" value="<?php echo $row['nome_produto']; ?>">
                            <input type="hidden" name="preco" value="<?php echo $row['preco_un']; ?>">
                            <button><i class='bx bx-cart-add'></i></button>
                        </form>
                    </div>
            </label>
            <?php endwhile; ?>
        <?php else: ?>
            <ul>
                <li colspan="6">Nenhum produto encontrado</li>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>