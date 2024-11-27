<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD DOS PRODUTOS</title>
</head>
<body>
    <h1>ADICIONAR PRODUTOS NO BANCO DE DADOS</h1>

    <form enctype="multipart/form-data" method="post" action="script.php">
        <label for="nome_produto">Nome do produto: </label>
        <input type="text" name="nome_produto" id="nome_produto" required>
        <br><br>
        <label for="preco_un">Preço: </label>
        <input type="number" id="preco_un" name="preco_un" step="0.01" required>
        <br><br>
        <label for="quantidade">Quantidade :</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br><br>
        <label for="imagem">Adicionar imagem do produto: </label>
        <input type="file" name="imagem" id="imagem" accept="image/*" required>
        <br><br>
        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>