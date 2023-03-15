<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #00BEDA;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        a {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "tipografia";
            font-size: 20px;
            color: black;
            text-decoration: none;
            text-align: center;
            margin-left: 30px;
            margin-right: 30px;
            margin-top: 20px;
            padding: 15px;
            width: 150px;
            height: 10px;
            border-radius: 20px;
            border: 3px solid black;
            background-color: white;
        }
    </style>
</head>
<body>

<?php
session_start();

if(isset($_SESSION['usuario'])) {
    if(isset($_POST['nuevo_usuario'])) {
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

        $nuevo_usuario = $_POST['nuevo_usuario'];

        $query = "UPDATE usuarios SET nombre = :nuevo_usuario WHERE correo = :correo";
        $statement = $conector->prepare($query);
        $statement->bindParam(':nuevo_usuario', $nuevo_usuario);
        $statement->bindParam(':correo', $_SESSION['correo']);
        $statement->execute();

        $_SESSION['nombre_usuario'] = $nuevo_usuario;

        echo "Se ha cambiado correctamente el nombre";

        ?>
        <a href="../paginasHTML/login.html">Volver a iniciar sesión</a>
    <?php
        exit();
    } else {
        echo "Debe proporcionar un nombre de usuario";
    }
} else {
    
    exit();
}

?>
</body>
</html>