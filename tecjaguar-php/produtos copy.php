// esse arquivo existe só pra deixar os produtos salvos enquanto o produtos.php é editado

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Jaguar.ico">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="ecommerce.css">
    <link rel="stylesheet" href="produtos.css">
    <title>TecJaguar Produtos</title>
</head>
<body>
    <?php 
        include_once("header.html");
    ?>

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
            <label for="opeanear">
                <img src="https://c.media-amazon.com/images/I/71gpJ2SQfTL._AC_SX679_.jpg" id="openear">
                <p class="item">Fone de Ouvido Bluetooth Open Ear CLip</p>
                <p class="preço">R$449,77</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="philipsfone">
                <img src="https://m.media-amazon.com/images/I/51+W7A115SL._AC_SX679_.jpg" id="philipsfone">
                <p class="item">Fone de Ouvido Philips</p>
                <p class="preço">R$29,26</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="supcarro">
                <img src="https://m.media-amazon.com/images/I/51Ylol7SzUL._AC_SX679_.jpg" id="supcarro">
                <p class="item">Suporte Veicular para Celular</p>
                <p class="preço">R$42,90</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="crrgdr-usbc">
                <img src="https://m.media-amazon.com/images/I/41j7VoTN4oL._AC_SX679_.jpg" id="crrgdr-usbc">
                <p class="item">Carregador Cabo USB Tipo-C</p>
                <p class="preço">R$42,21</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="crrgdr-prttl">
                <img src="https://m.media-amazon.com/images/I/310xpIJLfPL._AC_.jpg" id="crrgdr-prttl">
                <p class="item">Carregador Portátil Ampla Compatibilidade</p>
                <p class="preço">R$84,70</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="crrgdr-prttl-sfio">
                <img src="https://m.media-amazon.com/images/I/41WwStl2oCL._AC_SL1000_.jpg" id="crrgdr-prttl-sfio">
                <p class="item">Carregador Portátil Sem Fio</p>
                <p class="preço">R$99,00</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
            <label for="tripeflex">
                <img src="https://m.media-amazon.com/images/I/712ZZtsSiNS._AC_SL1500_.jpg" id="tripeflex">
                <p class="item">Tripé Flexível para Celular</p>
                <p class="preço">R$43,93</p>
                <a class="add-carrinho" href="carrinho.html"><button><i class='bx bx-cart-add'></i></button></a>
            </label>
        </div>
    </section>

    <?php 
        include_once("footer.html");
    ?>
</body>
</html>
