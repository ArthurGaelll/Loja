<?php
    require 'conexao.php';

    $nome = $_POST['produto'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $estoque);

    $sucesso = false;
    if ($stmt->execute()) {
        $sucesso = true;
    }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Produto</title>
        <link rel="stylesheet" href="inserir.css">
    </head>
    <body>
        <div class="container">
            <?php if ($sucesso): ?>
                <div class="msg sucesso">✅ Produto inserido com sucesso!</div>
                <a href="listar.php" class="btn">Ver Produtos</a>
            <?php else: ?>
                <div class="msg erro">❌ Erro ao inserir produto.</div>
                <a href="form_cadastrar.php" class="btn">Tentar Novamente</a>
            <?php endif; ?>
        </div>
    </body>
</html>
