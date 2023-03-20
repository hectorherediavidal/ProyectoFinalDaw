<?php

$host = "localhost";
$user = "edib";
$password = "edib";
$bbdd = "proyectofinal";

// Metodos post

$correo = $_POST['loginCorreo'];
$contraseña = $_POST['loginContraseña'];

// Conexion a base de datos
try{
    $conector = new PDO("mysql:host=$host;dbname=$bbdd",$user,$password);

    $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}

// Consultar los datos de la base de datos
$consulta = $conector->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena");
$consulta->bindParam(':correo', $correo);
$consulta->bindParam(':contrasena', $contraseña);
$consulta->execute();

// Verificar si se encontró una coincidencia
if ($consulta->rowCount() == 1) {
    $fila = $consulta->fetch(PDO::FETCH_ASSOC);
    $usuario=$fila['nombre'];
  // El usuario inicia sesion y va a su perfil
  session_start();
  $_SESSION['usuario'] = $usuario;
  $_SESSION['correo'] = $correo;
  header("Location: ./cuenta.php");

} else {
  // Error en los datos
  header("Location: ./errorComprobacionCuenta.php");
}

$conector = null;
?>