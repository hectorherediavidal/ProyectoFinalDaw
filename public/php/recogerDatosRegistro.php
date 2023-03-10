<?php


$nombre = $_POST['registroNombre'];
$contraseña = $_POST['registroContraseña'];
$correo = $_POST['registroCorreo'];

$host = "localhost";
$user = "edib";
$password = "edib";
$bbdd = "proyectofinal";

try{
    $conector = new PDO("mysql:host=$host;dbname=$bbdd",$user,$password);

    $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}


$sentencia = "INSERT INTO  usuarios(nombre, contraseña, correo) VALUES ( '$nombre', '$contraseña','$correo');";
$resultado = $conector->query($sentencia);


$conn = null;