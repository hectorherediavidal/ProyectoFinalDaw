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
            align-items: center;
            flex-direction: column;
            height: 100vh;
            font-family: 'tipografia';
            justify-content: center;
            text-align: center;
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
            padding: 20px;
            width: 120px;
            height: 10px;
            border-radius: 20px;
            border: 3px solid black;
            background-color: #D9D9D9;
        }
    </style>
</head>

<body>
    <picture class="pictureExcuss">

        <source srcset="../assets/img/smartphone/excuss1.webp 1x,
                ../assets/img/smartphone/excuss1@2x.webp 2x,
                ../assets/img/smartphone/excuss1@3x.webp 3x,
                " />


        <img src="" class="excussImagen" alt="Descripción de la imagen" />
    </picture>
    <?php
    // INICIO DE SESION
    session_start();

    // RECIBIR NUEVO NOMBRE DEL FORMULARIO
    if (isset($_SESSION['usuario'])) {
        if (isset($_POST['nuevo_usuario'])) {
            $host = "localhost";
            $user = "edib";
            $password = "edib";
            $bbdd = "proyectofinal";
            // CONEXION A BASE DE DATOS
            try {
                $conector = new PDO("mysql:host=$host;dbname=$bbdd", $user, $password);

                $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Error de conexion: " . $e->getMessage();
            }
            // METODO POST
            $nuevo_usuario = $_POST['nuevo_usuario'];

            // CAMBIO DE NOMBRE EN LA BASE DE DATOS
            $query = "UPDATE usuarios SET nombre = :nuevo_usuario WHERE correo = :correo";
            $statement = $conector->prepare($query);
            $statement->bindParam(':nuevo_usuario', $nuevo_usuario);
            $statement->bindParam(':correo', $_SESSION['correo']);
            $statement->execute();

            // NUEVO NOMBRE DE USUARIO
            $_SESSION['nombre_usuario'] = $nuevo_usuario;


            // DESTRUCCION DE LA SESION Y VUELTA A LOGIN
            session_destroy();
    ?>
            <h1>El nombre de usuario se ha cambiado correctamente</h1>
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