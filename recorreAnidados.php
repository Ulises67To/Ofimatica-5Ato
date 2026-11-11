<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudad = $_POST["ciudad"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $telefono = $_POST["telefono"];

    $amigos = array(
        $ciudad => array(
            "nombre" => $nombre,
            "edad" => $edad,
            "telefono" => $telefono
        )
    );

    foreach ($amigos as $ciudad => $cadaUno) {
        echo "En $ciudad vive el amigo:<br>";

        foreach ($cadaUno as $clave => $valor) {
            echo $clave . ": " . $valor . "<br>";
        }
    }
}
?>

<form method="POST">
    <label>Ciudad:</label>
    <input type="text" name="ciudad">

    <label>Nombre:</label>
    <input type="text" name="nombre">

    <label>Edad:</label>
    <input type="text" name="edad">

    <label>Teléfono:</label>
    <input type="text" name="telefono">

    <input type="submit" value="Enviar">
</form>