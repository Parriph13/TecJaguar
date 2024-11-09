<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Jaguar.ico">
    <script src="fale_conosco.js"></script>
    <link rel="stylesheet" href="ecommerce.css">
    <link rel="stylesheet" href="faleconosco.css">
    <title>TecJaguar Fale Conosco</title>
</head>
<body>
    <?php 
        include_once("header.html");
    ?>

    <div class="formu">
        <h1>Fale Conosco</h1>
        <form>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome"><br><br>

            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email"><br><br>

            <label for="assunto">Assunto:</label><br>
            <input type="text" id="assunto" name="assunto"><br><br>

            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="5"></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>

    </div>
    <?php 
        include_once("footer.html");
    ?>
</body>
</html>