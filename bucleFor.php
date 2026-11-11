<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicio = $_POST["inicio"];
    $final = $_POST["final"];

    for ($i = $inicio; $i <= $final; $i++) {
        echo $i . "<br>";
    }
}
?>

<form method="POST">
    <label>Número inicial:</label>
    <input type="text" name="inicio">

    <label>Número final:</label>
    <input type="text" name="final">

    <input type="submit" value="Enviar">
</form>