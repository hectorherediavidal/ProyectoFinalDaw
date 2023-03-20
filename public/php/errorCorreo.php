<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css" />
    <title>ExcuseParadise</title>
    <style>
        body {
            background-color: #00BEDA;
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            font-family: 'tipografia';
            font-size: 14px;
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

    <!-- Error con los datos introducidos -->

    <h1>El correo que has introducido ya esta registrado, por favor escribe un correo distinto</h1>

    <a href="../paginasHTML/registro.html">Volver a registro</a>
</body>

</html>