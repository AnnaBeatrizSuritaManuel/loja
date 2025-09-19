<?php include 'cabecalho.php'; ?>

<style>
    .form-container {
        background: linear-gradient(to right, #ceb2f3ff, #ebbef8ff); 
        border-radius: 20px;
        padding: 40px;
        margin-top: 30px;
        color: #333;
    }

    .form-label {
        font-weight: 600;
        color: #5a2a83; 
    }

    .form-control {
        border-radius: 10px;
    }

    .btn-custom {
        background-color: #9b59b6;
        border: none;
        color: white;
        transition: 0.3s;
    }

    .btn-custom:hover {
        background-color: #9ea5ffff;
    }

    .btn-back {
        background-color: transparent;
        color: #4d296dff;
        border: 1px solid #8987fcff;
    }

    .btn-back:hover {
        background-color: #ada3ffff;
        color: white;
    }
</style>

<div class="container form-container">
    <h2 class="mb-4"><i class="fas fa-plus-circle me-2"></i>Cadastro de Produto</h2>

    <?php
    if (isset($_GET['erro'])) {
        $erro = $_GET['erro'];
        if ($erro == 1) {
            echo '<div class="alert alert-danger">Preencha todos os campos corretamente.</div>';
        } else if ($erro == 2) {
            echo '<div class="alert alert-danger">Erro ao cadastrar produto. Tente novamente.</div>';
        }
    }
    ?>

    <form action="inserir.php" method="POST" class="row g-3" autocomplete="off">
        <div class="col-md-4">
            <label class="form-label">Nome do Produto</label>
            <input type="text" name="nome" class="form-control" placeholder="" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" placeholder="" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Quantidade em Estoque</label>
            <input type="number" name="quantidade" class="form-control" placeholder="" required>
        </div>

        <div class="col-12 d-flex justify-content-between mt-4">
            <a href="listar.php" class="btn btn-back">
                <i class="fas fa-arrow-left me-1"></i>Voltar para a lista
            </a>
            <button type="submit" class="btn btn-custom">
                <i class="fas fa-save me-2"></i>Cadastrar Produto
            </button>
        </div>
    </form>
</div>

<?php include 'rodape.php'; ?>
