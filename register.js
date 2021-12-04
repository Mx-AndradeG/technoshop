$(document).ready(function () {
  $("#register").click(function () {
    if ($("#nombres").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tus nombres!",
      });
      return false;
    } else if ($("#apellidos").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tus apellidos!",
      });
      return false;
    } else if ($("#usuario").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa un usuario!",
      });
      return false;
    } else if ($("#correo").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tu correo!",
      });
      return false;
    } else if ($("#contraseña").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tus contraseña!",
      });
      return false;
    } else if ($("#telefono").val() == 0) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tu teléfono!",
      });
      return false;
    } else if ($("#direccion").val() == "") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tus dirección!",
      });
      return false;
    } else if ($("#sexo").val() == "Sexo") {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tu sexo!",
      });
      return false;
    } else if ($("#edad").val() == 0) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa tu edad!",
      });
      return false;
    }
    var action = "data";
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    var usuario = $("#usuario").val();
    var correo = $("#correo").val();
    var contraseña = $("#contraseña").val();
    var contraseña2 = $("#contraseña2").val();
    var telefono = $("#telefono").val();
    var direccion = $("#direccion").val();
    var sexo = $("#sexo").val();
    var edad = $("#edad").val();
    if (!validateEmail(correo)) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa un correo electrónico valido!",
      });
      return false;
    }
    if (!validatePass(contraseña)) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Ingresa una contraseña de al menos ocho caractéres!",
      });
      return false;
    }
    if (!validateSamePass(contraseña, contraseña2)) {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Las contraseñas no coinciden!",
      });
      $("#contraseña").val("");
      $("#contraseña2").val("");
      return false;
    }

    $.ajax({
      url: "RUser.php",
      method: "POST",
      data: {
        action: action,
        nombres: nombres,
        apellidos: apellidos,
        usuario: usuario,
        correo: correo,
        contraseña: contraseña,
        telefono: telefono,
        direccion: direccion,
        sexo: sexo,
        edad: edad,
      },
      success: function (response) {
        checkResult(response);
      },
    });

    function validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    function validatePass(pass) {
      if (pass.length > 7) {
        return true;
      }
    }

    function validateSamePass(pass, pass2) {
      if (pass === pass2) {
        return true;
      }
    }

    function checkResult(dato) {
      if (dato == 1) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Usuario existente. Ingresa otro nombre de usuario!",
        });
        return false;
      }
      if (dato == 2) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "El correo ya está en uso. Ingresa otro correo!",
        });
        return false;
      }
      if (dato == 3) {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Registro exitoso!",
          showConfirmButton: false,
          timer: 5500,
        });
        document.location.href = "login.html";
      }
      if (dato == 4) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Lo sentimos, algo salió mal!",
        });
        return false;
      }
    }
  });
});
