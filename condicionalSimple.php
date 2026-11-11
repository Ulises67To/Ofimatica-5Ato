<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    if ($edad >17) {
        echo "El usuario es mayor de edad.";

        if ($edad > 65) {
            echo " El usuario está jubilado.";
        }
    }
}
?>

<form method="POST">
    <label>Edad:</label>
    <input type="text" name="edad">
    <input type="submit" value="Enviar">
</form>