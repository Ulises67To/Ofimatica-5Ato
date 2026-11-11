<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    if ($edad >= 18) {
        echo "El usuario es mayor de edad.";
    } else {
        echo "El usuario NO es mayor de edad.";
    }
}
?>

<form method="POST">
    <label>Edad:</label>
    <input type="text" name="edad">
    <input type="submit" value="Enviar">
</form>