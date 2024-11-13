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
            <?php 
                include("connectionDb.php");

                $consulta = "SELECT * FROM stock";
                $con = $connectionDb->query($consulta) or die($connectionDb->error);
            ?>

            <table border="1">
                <tr>
                    <td>ID do produto</td>
                    <td>Produto </td>
                    <td>Preço unitário</td>
                    <td>Quantidade</td>
                    <td>Preço do lote</td>
                    <td>Status do produto</td>
                </tr>
                <?php while($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado["idproduct"]; ?></td>
                    <td><?php echo $dado["name_product"]; ?></td>
                    <td><?php echo $dado["price_unitary"]; ?></td>
                    <td><?php echo $dado["quantity"]; ?></td>
                    <td><?php echo $dado["price_box"]; ?></td>
                    <td><?php echo $dado["status_product"]; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </section>

    <?php 
        include_once("footer.html");
    ?>
</body>
</html>