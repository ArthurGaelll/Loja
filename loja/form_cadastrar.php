<?php
    include 'cabecalho.php';
?>
<body>
    <h1>Bem Vindo ao 1° Sistema com CRUD </h1>
    <h2>Gabriela Romano</h2>
    <div class="container">
        <form>
            <div class="mb-3">            
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto">            
            </div>
            <div class="mb-3">            
                <input type="text" class="form-control" placeholder="Digite o preço do produto">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Digite a quantidade">            
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <a href="index.php" type="button" class="btn btn-warning" >Voltar</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>