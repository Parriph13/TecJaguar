<?php
// Inicio da parte das instruções no banco de dados

// Inclusão do arquivo de conexão com o banco
include('../database/conexaoBD.php');

// Verificação da conexão
if (!$conexaoBD) {
    die("Conexão com o banco de dados falhou: " . mysqli_connect_error());
}

// Verifica se a imagem foi enviada
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $file = $_FILES['imagem'];
    $fileType = mime_content_type($file['tmp_name']);
    $validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];

    if (in_array($fileType, $validImageTypes)) {
        // Verifica se o diretório existe, se não, cria
        $uploadDir = __DIR__ . '/upload/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $destination = $uploadDir . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $destination)) {
            // Obter dados do formulário
            $nome_produto = $_POST['nome_produto'];
            $preco_un = $_POST['preco_un'];
            $quantidade = $_POST['quantidade'];
            $imagem = $destination; // Caminho para o arquivo de imagem

            // Preparar instrução SQL para inserção
            $sql = "INSERT INTO produto (nome_produto, preco_un, quantidade, imagem) VALUES (?, ?, ?, ?)";
            $stmt = $conexaoBD->prepare($sql);
            $stmt->bind_param("sdis", $nome_produto, $preco_un, $quantidade, $imagem);

            if ($stmt->execute()) {
                echo "Produto adicionado com sucesso";
                echo 
                    '
                        <br><br>
                        <a href="index.php">Voltar</a>
                    ';
            } else {
                echo "Erro ao adicionar produto: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Erro ao mover o arquivo.";
        }
    } else {
        echo "Por favor, selecione um arquivo de imagem válido (JPEG, PNG ou GIF).";
    }
} else {
    echo "Nenhum arquivo enviado ou erro no envio.";
}

$conexaoBD->close();

//FIM DA PARTE DO BANCO DE DADOS
?>
