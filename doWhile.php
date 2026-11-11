<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= $numero);
}
?>

<form method="POST">
    <label>Número de repeticiones:</label>
    <input type="text" name="numero">

    <input type="submit" value="Enviar">
</form>