<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = explode(",", $_POST["nombres"]);
    $elementos = count($nombres);

    for ($i = 0; $i < $elementos; $i++) {
        echo trim($nombres[$i]) . "<br>";
    }
}
?>

<form method="POST">
    <label>Nombres separados por comas:</label>
    <input type="text" name="nombres">

    <input type="submit" value="Enviar">
</form>