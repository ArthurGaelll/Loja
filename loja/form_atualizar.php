<?php
    include 'cabecalho.php';
    require 'conexao.php';

    // Pega o ID via GET
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
    } else {
        die("ID do produto não informado!");
    }

    // Atualização do produto
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':preco' => $preco,
            ':quantidade' => $quantidade,
            ':id' => $id
        ]);

        echo "<script>alert('Produto atualizado com sucesso!'); window.location='index.php';</script>";
        exit;
    }

    // Busca os dados do produto
    $sql = "SELECT * FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produto) {
        die("Produto não encontrado!");
    }
?>
<link rel="stylesheet" href="atualizar.css">
<body>
    <h1>ATUALIZAÇÃO DE PRODUTO</h1>
    

    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">            
               Nome: <input value="<?php echo htmlspecialchars($produto['nome']); ?>" type="text" name="produto" class="form-control">            
            </div>
            <div class="mb-3">            
                Preço: <input value="<?php echo htmlspecialchars($produto['preco']); ?>" type="text" name="preco" class="form-control">
            </div>
            <div class="mb-3">
                Quantidade: <input value="<?php echo htmlspecialchars($produto['quantidade']); ?>" type="text" name="quantidade" class="form-control">            
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>