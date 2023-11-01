<?php
if (isset($_SESSION["name"]) && $_SESSION["email"]) {
?>

    <div class="cadastrar">
        <h2>Medidas</h2>
        <form action="../app/process/evaluetion.php" method="POST">
            <div class="div-input">
                <label for="weight">Peso</label>
                <input type="text" name="weight" required>
            </div>
            <div class="div-input">
                <label for="height">Altura:</label>
                <input type="text" name="height" required>
            </div>
            <div class="div-input">
                <label for="age">Idade</label>
                <input type="number" name="age" required>
            </div>
            <div class="div-input">
                <label for="neck">Pescoço:</label>
                <input type="text" name="neck" required>
            </div>
            <div class="div-input">
                <label for="abd">Abdômen:</label>
                <input type="text" name="abd" required>
            </div>
            <input class="sub" type="submit">
        </form>
    </div>


<?php
} else {
    header("Location://localhost/php/aplicationXML/public/index.php");
}
?>