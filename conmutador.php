<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pais = strtoupper($_POST["pais"]);

    switch ($pais) {
        case "INGLATERRA":
            echo "El usuario es inglés.";
            break;

        case "ALEMANIA":
            echo "El usuario es alemán.";
            break;

        case "ITALIA":
            echo "El usuario es italiano.";
            break;

        case "ESPAÑA":
            echo "El usuario es español.";
            break;

        case "FRANCIA":
            echo "El usuario es francés.";
            break;

        default:
            echo "Nacionalidad no especificada.";
            break;
    }
}
?>

<form method="POST">
    <label>País:</label>
    <input type="text" name="pais">
    <input type="submit" value="Enviar">
</form>