<?php
    include 'cabecalho.php';
?>
<link rel="stylesheet" href="listar.css">

<body>
    <h1>Bem Vindo ao 1° Sistema com CRUD </h1>
    
    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$produto['id']."</td>";
                    echo "<td>".$produto['nome']."</td>";
                    echo "<td>".$produto['preco']."</td>";
                    echo "<td>".$produto['quantidade']."</td>";
                    echo "
                        <td>
                            <div class='btn-group' role='group'>
                                <a href='form_atualizar.php?id=".$produto['id']."' class='btn btn-danger'>Atualizar</a>
                                <a href='deletar.php?id=".$produto['id']."' class='btn btn-warning' onclick=\"return confirm('Tem certeza que deseja excluir este produto?');\">Apagar</a>
                            </div>
                        </td>
                    ";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-back">Voltar</a>
    </div>
    
</body>
</html>
