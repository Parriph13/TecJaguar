<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Jaguar.ico">
    <link rel="stylesheet" href="ecommerce.css">
    <link rel="stylesheet" href="index.css">
    <title>TecJaguar</title>
</head>
<body>
    <?php 
        include_once("header.html");
    ?>

    <section class="banner">
        <div id="noticiadestaque">
            <hr>
            <p class="n1">Ganhe 20% de desconto</p>
            <p class="n2">Na compra de um carrinho com mais de 5 items!</p>
            <hr>
        </div>

        <div class="destaque">
            <div class="h-destaque">Confira nossos produtos:</div>
            <div class="produtos">
                <label for="philipsfone">
                    <img src="https://m.media-amazon.com/images/I/51+W7A115SL._AC_SX679_.jpg" id="philipsfone">
                    <p class="item">Fone de Ouvido Philips</p>
                    <p class="preço">R$89,26</p>
                    <a class="add-carrinho" href="carrinho.php"><button><span>+</span> Carrinho</button></a>
                </label>
                <label for="cabo-usbc">
                    <img src="https://m.media-amazon.com/images/I/41j7VoTN4oL._AC_SX679_.jpg" id="cabo-usbc">
                    <p class="item">Carregador Cabo USB Tipo-C</p>
                    <a class="add-carrinho" href="carrinho.php"><button><span>+</span> Carrinho</button></a>
                    <p class="preço">R$53,99</p>
                </label>
            </div>
        </div>
    </section>

    <section class="nos">
        <div class="sobre_nos">
            <h2>Sobre nós</h2>
            <p>
                Bem-vindo à TecJaguar, onde a tecnologia encontra a excelência!<br> 
                Somos uma empresa apaixonada por eletrônicos e comprometida em oferecer produtos de alta qualidade que atendem às suas necessidades diárias.<br>
                Desde celulares de última geração até carregadores e fones de ouvido inovadores, nossa missão é proporcionar a melhor experiência tecnológica para nossos clientes.<br>
                
                Na TecJaguar, acreditamos que a tecnologia deve ser acessível e prática. Por isso, além de uma vasta gama de produtos,<br> também oferecemos suporte especializado para garantir que você aproveite ao máximo seus dispositivos.<br>
                Nossa equipe está sempre pronta para ajudar, tornando sua experiência de compra não apenas satisfatória, mas memorável.
            </p>
        </div>
        
        <div class="missao">
            <h2>Missão</h2>
            <p>
                Nossa missão é ser a referência em produtos eletroeletrônicos, proporcionando qualidade, inovação e suporte excepcional aos nossos clientes.<br>
                Queremos que cada interação com a TecJaguar seja sinônimo de confiança e satisfação.
            </p>    
        </div>      
        
        <div class="visao">
            <h2>Visão</h2>
            <p>
                Ser reconhecida como a principal escolha em eletrônicos no Brasil, destacando-nos pela excelência em produtos e serviços, e pela construção de relacionamentos duradouros com nossos clientes.<br>
                Na TecJaguar, estamos sempre um passo à frente, prontos para trazer as melhores soluções tecnológicas para você.
            </p>
        </div>
    </section>

    <?php 
        include_once("footer.html");
    ?>
</body>
</html>