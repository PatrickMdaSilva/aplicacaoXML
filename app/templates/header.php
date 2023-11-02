<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Validation XML</title>
</head>

 <body>
    <header>
        <div class="title">
            <h1>Atleta <?= isset($_SESSION["name"]) ? $_SESSION["name"] : "" ?></h1>
        </div>
        <div class="menu-list">
            <ul>
                <?php if(isset($_SESSION["email"])) { ?>             
                <li><a href="../public/index.php?pag=measures&folder=templates">Medidas</a></li>
                <li><a href="../public/index.php?pag=nav&folder=templates">Avaliações</a></li>
                <li><a href="">item</a></li>
                <li><a href="../public/index.php?pag=logout&folder=templates">Sair</a></li>
                <?php } else { ?> 
                <li><a href="../public">Home</a></li>
                <li><a href="../public/index.php?pag=register&folder=templates">Cadastrar</a></li>
                <li><a href="../public/index.php?pag=login&folder=templates">Login</a></li>
                <li><a href="">Contato</a></li>
                <?php } ?>               
        </ul>
    </div>
    </header>