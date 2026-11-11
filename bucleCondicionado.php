
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ciudades = explode(",", $_POST["ciudades"]);
    $buscar = trim($_POST["buscar"]);
    $indice = 0;
    $ciudad = "";

    while ($ciudad != $buscar && $indice < count($ciudades)) {
        $ciudad = trim($ciudades[$indice]);
        echo $ciudad . "<br>";
        $indice++;
    }
}
?>

<form method="POST">
    <label>Ciudades separadas por comas:</label>
    <input type="text" name="ciudades">

    <label>Ciudad que deseas encontrar:</label>
    <input type="text" name="buscar">

    <input type="submit" value="Enviar">
</form>