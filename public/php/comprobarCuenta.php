<?php
// Conexión a la base de datos
$host = "localhost";
$user = "edib";
$password = "edib";
$bbdd = "proyectofinal";


$correo = $_POST['loginCorreo'];
$contraseña = $_POST['loginContraseña'];

try{
    $conector = new PDO("mysql:host=$host;dbname=$bbdd",$user,$password);

    $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}

// Consultar la base de datos utilizando consultas preparadas para evitar inyección SQL
$consulta = $conector->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena");
$consulta->bindParam(':correo', $correo);
$consulta->bindParam(':contrasena', $contraseña);
$consulta->execute();

// Verificar si se encontró una coincidencia
if ($consulta->rowCount() == 1) {
    $fila = $consulta->fetch(PDO::FETCH_ASSOC);
    $usuario=$fila['nombre'];
  // El usuario inició sesión correctamente, puede redirigir a la página de inicio
  session_start();
  $_SESSION['usuario'] = $usuario;
  header("Location: ./cuenta.php");

} else {
  // Las credenciales de inicio de sesión son incorrectas, mostrar un mensaje de error
  echo "Correo electrónico o contraseña incorrectos";
}

$conector = null;
?>