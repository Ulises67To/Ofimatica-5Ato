<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = explode(",", $_POST["nombres"]);

    foreach ($nombres as $clave => $valor) {
        echo "El nombre con índice $clave es " . trim($valor) . "<br>";
    }
}
?>

<form method="POST">
    <label>Nombres separados por comas:</label>
    <input type="text" name="nombres">

    <input type="submit" value="Enviar">
</form>