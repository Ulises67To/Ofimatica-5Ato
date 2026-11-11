<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    for ($i = $numero; $i >= 1; $i -= 2) {
        echo $i . "<br>";
    }
}
?>

<form method="POST">
    <label>Número inicial:</label>
    <input type="text" name="numero">

    <input type="submit" value="Enviar">
</form>