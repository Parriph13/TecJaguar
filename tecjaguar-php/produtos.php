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

                $consulta = "SELECT * FROM produtos";
                $con = $connectionDb->query($consulta) or die($connectionDb->error);
            ?>

            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Produto </td>
                    <td>Preço</td>
                    <td>Destaque</td>
                </tr>
                <?php while($dado = $con->fetch_array()) { ?>
                <tr>
                    <td><?php echo $dado["id"]; ?></td>
                    <td><?php echo $dado["nome"]; ?></td>
                    <td><?php echo $dado["preco"]; ?></td>
                    <td><?php echo $dado["destaque"]; ?></td>
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