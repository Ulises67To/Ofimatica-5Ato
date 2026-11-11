<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    $usuario = ($edad >= 18)
        ? "El usuario es mayor de edad."
        : "El usuario NO es mayor de edad.";

    echo $usuario;
}
?>

<form method="POST">
    <label>Edad:</label>
    <input type="text" name="edad">
    <input type="submit" value="Enviar">
</form>