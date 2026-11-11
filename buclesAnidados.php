<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pisos = $_POST["pisos"];
    $puertas = $_POST["puertas"];

    for ($piso = 1; $piso <= $pisos; $piso++) {
        for ($puerta = 1; $puerta <= $puertas; $puerta++) {
            echo "Piso: $piso - Puerta: $puerta<br>";
        }
    }
}
?>

<form method="POST">
    <label>Número de pisos:</label>
    <input type="text" name="pisos">

    <label>Puertas por piso:</label>
    <input type="text" name="puertas">

    <input type="submit" value="Enviar">
</form>