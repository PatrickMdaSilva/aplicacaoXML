<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Validation XML</title>
</head>

<body>
    <div class="cadastrar">
        <h2>Entrar</h2>
        <form action="../process/login.php" method="POST">
            <div class="div-input">
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="div-input">
                <label for="password">Senha:</label>
                <input type="password" name="password" required>
            </div>
            <input class="sub" type="submit">
        </form>
    </div>
    <div class="login">
        <p><a class="sub" href="index.php">Criar conta</a></p>
    </div>

</body>

</html>