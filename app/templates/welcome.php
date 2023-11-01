<?php

if (isset($_SESSION["name"]) && $_SESSION["email"]) {
?>

        <div class="cadastrar">
            <h2>Bem vindo(a)</h2>
            <p>Vamos coletar alguns dados para realizarmos a sua avaliação! Insira suas medidas para evitar erros Na barra superior há algumas opções de avaliação.</p>
        </div>
    </body>

    </html>

<?php
} else {
    header("Location://localhost/php/aplicationXML/public/index.php");
}
?>