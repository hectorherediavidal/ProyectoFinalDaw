<?php




$host = "localhost";
$user = "edib";
$password = "edib";
$bbdd = "proyectofinal";
// CONEXION A BASE DE DATOS
try {
  $conector = new PDO("mysql:host=$host;dbname=$bbdd", $user, $password);

  $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexion exitosa";
} catch (PDOException $e) {
  echo "Error de conexion: " . $e->getMessage();
}

// METODOS POST PARA RECOGER DATOS DEL REGISTRO
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = ($_POST['registroNombre']);
  $correo = ($_POST['registroCorreo']);
  $contrasena = ($_POST['registroContraseña']);
  $repetirContrasena = ($_POST['registroRepetirContraseña']);

  // VALIDACIONES DEL FORMULARIO
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

  if (empty($contrasena)) {
    echo "El campo contraseña está vacío.";
  } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $contrasena)) {
    echo "La contraseña solo puede contener letras y números.";
  } elseif (strlen($contrasena) > 10) {
    echo "La contraseña que has introducido es muy larga, solo puede contener 10 caracteres.";
  }

  if (empty($repetirContrasena)) {
    echo "Debe repetir la contraseña.";
  } elseif ($repetirContrasena !== $contrasena) {
    echo "Las contraseñas no coinciden.";
  }
}

// CONSULTA PARA COMPROBAR SI YA EXISTE ESE CORREO
$consulta = 'SELECT COUNT(*) FROM usuarios WHERE correo = :correo';
$sentencia = $conector->prepare($consulta);
$sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
$sentencia->execute();
$resultados = $sentencia->fetch(PDO::FETCH_NUM);

// MENSAJE DE ERROR SI EL CORREO YA ESTA REGISTRADO
if ($resultados[0] > 0) {
  header('Location: ./errorCorreo.php');
} else {

  $insercion = "INSERT INTO  usuarios(nombre, contrasena, correo) VALUES ( '$nombre', '$contrasena','$correo');";
  $resultado = $conector->query($insercion);
  header('Location: ./creacionCuenta.php');
}
$conn = null;
