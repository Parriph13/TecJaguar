<?php
session_start();

// Funções para adicionar, remover e atualizar carrinho
function adicionarAoCarrinho($produto, $preco, $quantidade) {
    if(isset($_SESSION['carrinho'][$produto])) {
        $_SESSION['carrinho'][$produto]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$produto] = [
            'preco' => $preco,
            'quantidade' => $quantidade
        ];
    }
}

function removerDoCarrinho($produto) {
    if(isset($_SESSION['carrinho'][$produto])) {
        unset($_SESSION['carrinho'][$produto]);
    }
}

function atualizarCarrinho() {
    if(isset($_POST['acao'])) {
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        if($_POST['acao'] == 'adicionar') {
            adicionarAoCarrinho($produto, $preco, $quantidade);
        } elseif ($_POST['acao'] == 'remover') {
            removerDoCarrinho($produto);
        }
    }
}

atualizarCarrinho();

// Cálculo do total
function calcularTotal() {
    $total = 0;
    foreach($_SESSION['carrinho'] as $produto) {
        $total += $produto['preco'] * $produto['quantidade'];
    }
    return $total;
}

$total = calcularTotal();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Jaguar.ico">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ecommerce.css">
    <link rel="stylesheet" href="carrinho.css">
    <title>Carrinho</title>
</head>
<body>
    <?php include('header.html'); ?>

    <!--TABELA DO CARRINHO-->
    <section>
        <div class="principal">
            <table class="tabela-carrinho">
                <thead>
                    <tr>
                        <th style="color: #e2a738;">PRODUTO</th>
                        <th style="color: #e2a738;">PREÇO</th>
                        <th style="color: #e2a738;">QUANTIDADE</th>
                        <th style="color: #e2a738;">TOTAL</th>
                        <th style="color: #f50f0f;">REMOVER</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
                        foreach($_SESSION['carrinho'] as $produto => $detalhes) {
                            echo "<tr>
                                    <td>
                                        <div class='product'>
                                            <img class='item' src='{$produto}.png' alt=''>
                                            <div class='info'>
                                                <div class='name'>{$produto}</div>
                                                <div class='category'>
                                                    <p>{$produto}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class='price'>R$ ".number_format($detalhes['preco'], 2, ',', '.')."</td>
                                    <td>
                                        <div class='qty'>
                                            <button onclick='atualizarQuantidade(\"{$produto}\", {$detalhes['preco']}, -1)'><i class='bx bx-minus'></i></button>
                                            <span>{$detalhes['quantidade']}</span>
                                            <button onclick='atualizarQuantidade(\"{$produto}\", {$detalhes['preco']}, 1)'><i class='bx bx-plus'></i></button>
                                        </div>
                                    </td>
                                    <td class='price'>R$ ".number_format($detalhes['preco'] * $detalhes['quantidade'], 2, ',', '.')."</td>
                                    <td>
                                        <form method='POST'>
                                            <input type='hidden' name='acao' value='remover'>
                                            <input type='hidden' name='produto' value='{$produto}'>
                                            <button class='remove' type='submit'><i class='bx bx-x'></i></button>
                                        </form>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' style='text-align: center;'>Carrinho vazio</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <!--FIM DA TABELA CARRINHO-->

    <!--BOX DA COMPRA-->
    <section class="caixa">
        <div class="box">
            <header class="resumo">RESUMO DA COMPRA</header>
            <div class="info">
                <div><span>SUB-TOTAL</span><span>R$ <?php echo number_format($total, 2, ',', '.'); ?></span></div>
                <div><span>FRETE</span><span>GRATIS</span></div>
                <div><button>Adicionar cupom de desconto<i class='bx bx-right-arrow-alt'></i></button></div>
            </div>
            <footer>
                <span>TOTAL</span>
                <span>R$ <?php echo number_format($total, 2, ',', '.'); ?></span>
            </footer>
        </div>
        <button>FINALIZAR COMPRA</button>
    </section>
    <!--FIM DA BOX DA COMPRA-->

    <?php include('footer.html'); ?>

    <script src="menubar.js"></script>

    <script>
    function atualizarQuantidade(produto, preco, quantidade) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'atualizar_carrinho.php'; // Adicionei a ação do formulário
        form.innerHTML = `
            <input type='hidden' name='acao' value='adicionar'>
            <input type='hidden' name='produto' value='${produto}'>
            <input type='hidden' name='preco' value='${preco}'>
            <input type='hidden' name='quantidade' value='${quantidade}'>
        `;
        document.body.appendChild(form);
        form.submit();
    }
</script>