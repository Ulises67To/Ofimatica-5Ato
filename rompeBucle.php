<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudades = explode(",", $_POST["ciudades"]);
    $buscar = trim($_POST["buscar"]);

    foreach ($ciudades as $clave => $valor) {
        $valor = trim($valor);

        if ($valor == $buscar) {
            break;
        }

        echo "Índice: $clave - Nombre: $valor<br>";
    }
}
?>

<form method="POST">
    <label>Ciudades separadas por comas:</label>
    <input type="text" name="ciudades">

    <label>Ciudad para detener el bucle:</label>
    <input type="text" name="buscar">

    <input type="submit" value="Enviar">
</form>