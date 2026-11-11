<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $permisoPaterno = $_POST["permisoPaterno"];

    if ($edad >= 18 || ($edad >= 16 && $permisoPaterno == "si")) {
        echo "El usuario cumple los requisitos.";
    } else {
        echo "El usuario NO cumple los requisitos.";
    }

    if ($edad > 18 && $edad < 66) {
        echo "<br>El usuario está en edad laboral.";
    } else {
        echo "<br>El usuario NO está en edad laboral.";
    }
}
?>

<form method="POST">
    <label>Edad:</label>
    <input type="text" name="edad">

    <label>¿Tiene permiso paterno? (si/no):</label>
    <input type="text" name="permisoPaterno">

    <input type="submit" value="Enviar">
</form>