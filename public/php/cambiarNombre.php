<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css" />
  <title>ExcuseParadise</title>
</head>
<!-- BODY -->

<body class="containerFormularios">
  <section class="mitadIzquierda">
    <a href="../php/cuenta.php">
      <img src="../assets/img/svg/iconoFlecha.svg" alt="icono perfil" class="flechita" />
    </a>
    <h4 class="tituloMitadIzquierda">Cambio de nombre de usuario</h4>
    <header class="header">
      <picture class="pictureExcuss">

        <source srcset="../assets/img/smartphone/excuss1.webp 1x,
              ../assets/img/smartphone/excuss1@2x.webp 2x,
              ../assets/img/smartphone/excuss1@3x.webp 3x,
               " />


        <img src="" class="excussImagenForm" alt="Descripción de la imagen" />
      </picture>
    </header>
    <!-- MAIN -->
    <main class="recordarContraMain">
      <section class="recordarContraCaja">
        <p class="recordarContraTitulo">Cambio de nombre de usuario</p>
        <p class="recordarContraTexto">Escribe el nombre de usuario al que quieras cambiar</p>
        <!-- FORMULARIO CAMBIO DE NOMBRE -->
        <form action="../php/procesarCambioNombre.php" class="recordarContraFormulario" method="post">
          <input type="text" class="registroNombre" placeholder="Nuevo nombre" name="nuevo_usuario">
          <button type="submit" class="recordarContraEnviar">ENVIAR</button>
        </form>
        <p class="recordarContraAyuda">¿Necesitas ayuda? <a href="../paginasHTML/contacto.html" class="recordarContraContactame">Contáctame</a></p>
      </section>
    </main>
    <!-- FOOTER -->
    <footer class="footer">
      <nav class="footerIconos">
        <a href="../../index.html">
          <img src="../assets/img/svg/persona.svg" alt="icono perfil" class="persona" />
        </a>
        <a href="../paginasHTML/novedades.html">
          <img src="../assets/img/svg/new.svg" alt="icono novedades" class="new" />
        </a>
        <a href="../paginasHTML/contacto.html">
          <img src="../assets/img/svg/contacto.svg" alt="icono contacto" class="contacto" />
        </a>
      </nav>
    </footer>
  </section>

  <!-- MITAD DERECHA -->


  <section class="mitadDerecha">
    <h4 class="tituloMitadDerecha">ExcuseParadise</h4>
    <header class="header">
      <picture class="pictureExcuss">
        <!-- Desktop -->
        <source srcset="../assets/img/smartphone/excuss1.webp 1x,
            ../assets/img/smartphone/excuss1@2x.webp 2x,
            ../assets/img/smartphone/excuss1@3x.webp 3x,
             " />

        <!-- SEO -->
        <img src="" class="excussImagen2" alt="Descripción de la imagen" />
      </picture>
    </header>
    <main class="loginMain">
      <p class="frase">“No me acuerdo de la contraseña”</p>

      <p class="frase">“No tengo una cuenta”</p>

      <p class="frase">¡Suena a excusa de las malas!</p>

      <p class="frase">Tengo muchas excusas para ti, ¡Así que vamos allá!</p>

    </main>


  </section>

</body>

</html>