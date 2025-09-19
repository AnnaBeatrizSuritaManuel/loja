<?php include 'cabecalho.php'; ?>

<style>
    .card {
        background-color: #433974; 
        border: 1px solid #6b5da8; 
        color: #dcd6f7; 
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: transparent;
    }

    .card-footer small {
        color: #f0ebff; 
    }

    .btn-primary {
        background-color: #7a64c9;
        border-color: #7a64c9;
    }

    .btn-primary:hover {
        background-color: #6b5da8;
        border-color: #6b5da8;
    }
</style>

<div class="row">
    <div class="col-md-8 mx-auto text-center">
        <h1>Bem-vindo a minha loja de pelúcias</h1>
        <p>Anna Beatriz</p>
        
        
        <div class="mt-4">
            <a href="form_cadastrar.php" class="btn btn-primary me-2">Cadastrar Produto</a>
            <a href="listar.php" class="btn btn-outline-light">Ver Produtos</a>
        </div>
    </div>
</div>

<main class="container">
    <h2>Produtos em destaque</h2>

    <section>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/xiao.jpg" class="card-img-top" alt="Pelúcia do Xiao">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia do Xiao</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, Xiao na versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 55</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/scara.jpg" class="card-img-top" alt="Pelúcia do Scaramouche">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia do Scaramouche</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, Scaramouche na versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 60</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/furina.jpg" class="card-img-top" alt="Pelúcia da Furina">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia da Furina</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, Furina na versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 50,00</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/neuvilete.png" class="card-img-top" alt="Pelúcia da Amber">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia do neuvillete</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, neuvillete versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 45,00</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/arlecchino.png" class="card-img-top" alt="Pelúcia da Keqing">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia da Arlecchino</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, Arlecchino na versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 58,00</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/wesley.png" class="card-img-top" alt="Pelúcia do Wriothesley">
                    <div class="card-body">
                        <h5 class="card-title">Pelúcia do Zhongli</h5>
                        <p class="card-text">Pelúcia do personagem de Genshin Impact, Wriothesley na versão gato.</p>
                    </div>
                    <div class="card-footer">
                        <small>R$ 65,00</small>
                        <a href="listar.php" class="btn btn-primary btn-sm">Ver Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'rodape.php'; ?>
