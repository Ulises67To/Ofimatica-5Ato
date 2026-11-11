<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $claves = explode(",", $_POST["claves"]);
    $valores = explode(",", $_POST["valores"]);

    $ciudades = array_combine($claves, $valores);

    foreach ($ciudades as $clave => $valor) {
        echo "Índice: $clave - Nombre: $valor<br>";
    }
}
?>

<form method="POST">
    <label>Claves separadas por comas:</label>
    <input type="text" name="claves">

    <label>Ciudades separadas por comas:</label>
    <input type="text" name="valores">

    <input type="submit" value="Enviar">
</form>