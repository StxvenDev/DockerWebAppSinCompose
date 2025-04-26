<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $conexion->query("INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')");
    header('Location: index.php');
}
?>

<h1>Agregar usuario</h1>
<form action="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" require><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" require><br><br>
    <input type="submit" value="Agregar">
</form>