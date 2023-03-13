<?php




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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = ($_POST['registroNombre']);
    $correo = ($_POST['registroCorreo']);
    $contraseña = ($_POST['registroContraseña']);
    $repetirContraseña = ($_POST['registroRepetirContraseña']);
  
    if (empty($nombre)) {
      echo "El campo nombre está vacío.";
    } elseif (!preg_match('/^[a-zA-Z ]+$/', $nombre)) {
      echo "El nombre solo puede contener letras y espacios.";
    }
  
    if (empty($correo)) {
      echo "El campo correo está vacío.";
    } elseif (!preg_match('/^[^\s@]+@[^\s@]+.[^\s@]+$/', $correo)) {
      echo "El correo electrónico es inválido. Por favor, ingrese un correo electrónico válido.";
    }
  
    if (empty($contraseña)) {
      echo "El campo contraseña está vacío.";
    } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $contraseña)) {
      echo "La contraseña solo puede contener letras y números.";
    } elseif (strlen($contraseña) > 10) {
      echo "La contraseña que has introducido es muy larga, solo puede contener 10 caracteres.";
    }
  
    if (empty($repetirContraseña)) {
      echo "Debe repetir la contraseña.";
    } elseif ($repetirContraseña !== $contraseña) {
      echo "Las contraseñas no coinciden.";
    }
  }

  // Consulta para comprobar si ya existe el correo electrónico en la base de datos
  $consulta = 'SELECT COUNT(*) FROM usuarios WHERE correo = :correo';
  $sentencia = $conector->prepare($consulta);
  $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
  $sentencia->execute();
  $resultados = $sentencia->fetch(PDO::FETCH_NUM);

  // Si el correo electrónico ya existe en la base de datos, mostrar un mensaje de error
  if ($resultados[0] > 0) {
      header('Location: ./errorCorreo.php');
  } else {

$insercion = "INSERT INTO  usuarios(nombre, contrasena, correo) VALUES ( '$nombre', '$contraseña','$correo');";
$resultado = $conector->query($sentencia);
header('Location: ../paginasHTML/login.html');
  }
$conn = null;