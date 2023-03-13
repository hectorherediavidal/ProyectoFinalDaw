function validarFormularioLogin() {
  // CAMPO CORREO

  let correo = document.getElementById("loginCorreo").value;

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

  let contraseña = document.getElementById("loginContraseña").value;

  if (contraseña == null || contraseña == "") {
    alert("El campo contraseña está vacio");
    return false;
  }

  if (!/^[a-zA-Z0-9]+$/.test(contraseña)) {
    alert("La contraseña solo puede contener letras y números");
    return false;
  }

  if (!/^[a-zA-Z0-9]+$/.test(contraseña)) {
    alert("La contraseña solo puede contener letras y números");
    return false;
  }

  if (contraseña.length > 10) {
    alert(
      "La contraseña que has introducido es muy larga, solo puede contener 10 caracteres"
    );
    return false;
  }

  // alert("El formulario es correcto");
  // return true;
}
