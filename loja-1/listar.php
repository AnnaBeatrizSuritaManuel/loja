<?php include 'cabecalho.php'; ?>

<style>
    .custom-container {
        background: linear-gradient(to right, #e0c3fc, #8ec5fc);
        border-radius: 20px;
        padding: 40px;
        margin-top: 30px;
        color: #333;
    }

    .table thead {
        background-color: #9b59b6;
        color: white;
    }

    .table tbody tr:hover {
        background-color: rgba(155, 89, 182, 0.1);
    }

    .btn-primary {
        background-color: #9b59b6;
        border-color: #9b59b6;
    }

    .btn-primary:hover {
        background-color: #8e44ad;
        border-color: #8e44ad;
    }

    .btn-outline-light {
        color: #9b59b6;
        border-color: #9b59b6;
    }

    .btn-outline-light:hover {
        background-color: #9b59b6;
        color: white;
    }

    .btn-warning {
        background-color: #f39c12;
        border-color: #f39c12;
        color: white;
    }

    .btn-danger {
        background-color: #e74c3c;
        border-color: #e74c3c;
        color: white;
    }

    .btn-warning:hover {
        background-color: #d68910;
    }

    .btn-danger:hover {
        background-color: #c0392b;
    }
</style>

<div class="custom-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2><i class="fas fa-list me-2"></i>Lista de Produtos</h2>
        <a href="form_cadastrar.php" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>Novo Produto
        </a>
    </div>

    <?php
    if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong> Produto cadastrado com êxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    if (isset($_GET['atualizado']) && $_GET['atualizado'] == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong> Produto atualizado com êxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }

    if (isset($_GET['excluido']) && $_GET['excluido'] == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong> Produto excluído com êxito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
    }
    ?>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço (R$)</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'conexao.php';
                        
                        $tableExists = $pdo->query("SHOW TABLES LIKE 'produtos'")->rowCount() > 0;
                        
                        if ($tableExists) {
                            $sql = "SELECT * FROM produtos ORDER BY id DESC";
                            $stmt = $pdo->query($sql);
                            
                            if ($stmt->rowCount() > 0) {
                                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>";
                                    echo "<td>" . $produto['id'] . "</td>";
                                    echo "<td>" . htmlspecialchars($produto['nome']) . "</td>";
                                    echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
                                    echo "<td>" . $produto['quantidade'] . "</td>";
                                    echo "<td class='text-center'>";
                                    echo "<div class='btn-group' role='group'>";
                                    echo "<a href='form_atualizar.php?id=" . $produto['id'] . "' class='btn btn-sm btn-warning me-1'>";
                                    echo "<i class='fas fa-edit me-1'></i>Editar</a>";
                                    echo "<a href='delete.php?id=" . $produto['id'] . "' class='btn btn-sm btn-danger' 
                                          onclick='return confirm(\"Tem certeza que deseja excluir este produto?\")'>";
                                    echo "<i class='fas fa-trash me-1'></i>Excluir</a>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center py-4'>Nenhum produto cadastrado.</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center py-4'>Tabela de produtos não existe. <a href='form_cadastrar.php'>Cadastre o primeiro produto</a> para criá-la automaticamente.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="index.php" class="btn btn-outline-light">
            <i class="fas fa-arrow-left me-1"></i>Voltar para o Início
        </a>
    </div>
</div>

<?php include 'rodape.php'; ?>
