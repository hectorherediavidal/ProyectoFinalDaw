function validarFormulario() {
    // CAMPO NOMBRE
    let nombre = document.getElementById("registroNombre").value;
  
    if (nombre == null || nombre == "") {
      alert("El campo nombre esta vacio");
      return false;
    }
  

    let valido = true;
    for (let i = 0; i < nombre.length; i++) {
      let caracter = nombre.charAt(i);
      if (
        !(
          (caracter >= "a" && caracter <= "z") ||
          (caracter >= "A" && caracter <= "Z") ||
          caracter == " "
        )
      ) {
        valido = false;
      }
    }
    if (!valido) {
      alert("El nombre solo puede contener letras.");
      return false;
    }
  
    // CAMPO CORREO
  
    let correo = document.getElementById("registroCorreo").value;
  
    let patron = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (correo == null || correo == "") {
      alert("El campo correo está vacio");
      return false;
    }
  
    if (patron.test(correo)) {
    } else {
      alert(
        "El correo electrónico es inválido. Por favor, ingrese un correo electrónico válido."
      );
      return false;
    }
  
    // CAMPO CONTRASEÑA

    let contraseña = document.getElementById("registroContraseña").value;

    if (contraseña == null || contraseña == "") {
        alert("El campo contraseña está vacio");
        return false;
      }

     if (!/^[a-zA-Z0-9]+$/.test(contraseña)) {
        alert("La contraseña solo puede contener letras y números");
        return false;
      }
    

      if(!/^[a-zA-Z0-9]+$/.test(contraseña)) {
        alert("La contraseña solo puede contener letras y números");
        return false;
      }
      
      

      if (contraseña.length>10) {
        alert("La contraseña que has introducido es muy larga, solo puede contener 10 caracteres");
        return false;
      }
  

    //   CAMPO REPETIR CONTRASEÑA

    let repetirContraseña = document.getElementById("registroRepetirContraseña").value;

    if(repetirContraseña!=contraseña) {
        alert("Las contraseñas no coinciden")
        return false;
    }
    // alert("El formulario es correcto");
    // return true;
  }