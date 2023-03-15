<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>ExcuseParadise</title>
</head>

<body class="azulContainer">
    <header class="headerCuenta">
    <a href="../php/cerrarSesion.php">
        <img
          src="../assets/img/svg/iconoCerrarSesion.svg"
          alt="icono perfil"
          class="iconoCerrarSesion"
        />
      </a>
    </header>
    <main class="cuentaMain">
        <section>
            <div class="circuloFoto">
                <img src="../assets/img/svg/iconoPersona.svg" alt="fotoPerfil" class="fotoPerfil" />
            </div>
        </section>

        <section class="sectionNombreUsuario">
        <div class="rectanguloNombre">

            <p class="nombreUsuario">
                <?php

                session_start();
                echo $_SESSION['usuario'];
                ?>
            </p>
            
            </p>
            <a href="./cambiarNombre.php" class="iconoLapiz">
                    <img src="../assets/img/svg/lapiz.svg" alt="icono_lapiz" class="iconoLapiz">
                </a>
        </div>
       
        </section>

        <p class="cambiarFoto">¿Quieres cambiar tu foto?</p>
        <section class="sectionTresFotos">
            <div class="foto1">
                <img src="../assets/img/smartphone/monster2.webp" alt="monstruo1" class="monstruo1">
            </div>
            <div class="foto2">
                <img src="../assets/img/smartphone/monster3.webp" alt="monstruo2" class="monstruo2">
            </div>
            <div class="foto3">
                <img src="../assets/img/smartphone/monster4.webp" alt="monstruo3" class="monstruo3">
            </div>
        </section>
        
        <a href="../paginasHTML/aplicacion.html" class="botonJugar">JUGAR</a>
    </main>

    <footer class="footer">
        <nav class="footerIconos">
            <a href="./terminos.html" target="_blank">
                <img src="../assets/img/svg/persona.svg" alt="icono perfil" class="persona" />
            </a>
            <a href="./terminos.html" target="_blank">
                <img src="../assets/img/svg/new.svg" alt="icono novedades" class="new" />
            </a>
            <a href="./terminos.html" target="_blank">
                <img src="../assets/img/svg/contacto.svg" alt="icono contacto" class="contacto" />
            </a>
        </nav>
    </footer>
    </div>
</body>

</html>