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
$stmt = $conector->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena");
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':contrasena', $contraseña);
$stmt->execute();

// Verificar si se encontró una coincidencia
if ($stmt->rowCount() == 1) {
  // El usuario inició sesión correctamente, puede redirigir a la página de inicio
  session_start();
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
  $_SESSION["id"] = $usuario["id"];
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["email"] = $usuario["email"];
  header("Location: ../paginasHTML/cuenta.html");
} else {
  // Las credenciales de inicio de sesión son incorrectas, mostrar un mensaje de error
  echo "Correo electrónico o contraseña incorrectos";
}

$conn = null;
?>