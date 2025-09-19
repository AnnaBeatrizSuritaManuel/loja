<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #2e1a47; 
            color: #dcd6f7; 
            padding-top: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            margin-bottom: 20px;
            background-color: #4b367c !important; 
            flex-direction: column; 
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar-title {
            color: #dcd6f7;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 8px;
            user-select: none;
        }

        .navbar-nav {
            gap: 30px;
        }

        .nav-link {
            color: #dcd6f7 !important;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .nav-link:hover {
            color: #b49fcc !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark d-flex align-items-center justify-content-center">
  <div class="container d-flex flex-column align-items-center">
    <div class="navbar-title">Loja de Pelúcias</div>
    <div class="navbar-nav d-flex flex-row justify-content-center">
      <a class="nav-link" href="index.php">Início</a>
      <a class="nav-link" href="form_cadastrar.php">Cadastrar</a>
      <a class="nav-link" href="listar.php">Listar</a>
    </div>
  </div>
</nav>
<div class="container">
