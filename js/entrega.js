function mostrarAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf(" " + "accordion-show") == -1) {
        x.className += " " + "accordion-show";
    } else {
        x.className = x.className.replace(" " + "accordion-show", "");
    }
}


function mostrarRegistro(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("modal-show") == -1) {
        x.className += "modal-show";
    } else {
        x.className = x.className.replace(" modal-show", "");
    }
}

function ocultarRegistro(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("hidden") == -1) {
      x.className += " hidden";
  } else {
      x.className = x.className.replace(" hidden" , "");
  }
}

function usuarioNuevo(){
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "https://sprint.digitalhouse.com/nuevoUsuario", true);
  xhttp.send();
}

function getUsuarios() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
    var usuarios = JSON.parse(xmlhttp.responseText);
    document.getElementById("cantUsuarios").innerText = usuarios.cantidad;
  }
};
  xmlhttp.open("GET", "https://sprint.digitalhouse.com/getUsuarios", true);
  xmlhttp.send();
}

function validateloginForm() {
    var x = document.forms["loginForm"]["user"].value;
    if (x == null || x == "") {
        document.getElementById("loginError1").innerHTML = "Debes ingresar un Usuario";
        return false;
    }
    var p = document.forms["loginForm"]["password"].value;
    if (p == null || p == "") {
        document.getElementById("loginError2").innerHTML = "Debes ingresar una Contraseña";
        return false;
    } else {
        if (p.length < 8) {
            document.getElementById("loginError2").innerHTML = "Debes ingresar una Contraseña de al menos 8 caracteres";
            return false;
        }
    }
}

function limpiarErrores() {

  document.getElementById("signupError1").innerHTML = "";
  document.getElementById("signupError2").innerHTML = "";
  document.getElementById("signupError3").innerHTML = "";
  document.getElementById("signupError4").innerHTML = "";
  document.getElementById("signupError5").innerHTML = "";
  document.getElementById("signupError6").innerHTML = "";
  document.getElementById("signupError7").innerHTML = "";
  document.getElementById("signupError8").innerHTML = "";

}

function validateForm() {
  limpiarErrores();
  var errValidacion = 0;
    var n = document.forms["suForm"]["nombre"].value
    if (n.length < 2) {
        document.getElementById("signupError1").innerHTML = "Debes ingresar una nombre.";
        errValidacion=1;
    }
    var a = document.forms["suForm"]["apellido"].value
    if (a.length < 2) {
        document.getElementById("signupError2").innerHTML = "Debes ingresar una apellido.";
        errValidacion=1;
    }
    var d = document.forms["suForm"]["direccion"].value
    if (d.length < 2) {
        document.getElementById("signupError3").innerHTML = "Debes ingresar una direccion.";
        errValidacion=1;
    }
    var c = document.forms["suForm"]["ciudad"].value
    if (c.length < 2) {
        document.getElementById("signupError4").innerHTML = "Debes ingresar una ciudad.";
        errValidacion=1;
    }
    var j = document.forms["suForm"]["provincia"].value
    if (j.length < 2) {
        document.getElementById("signupError5").innerHTML = "Debes ingresar una provincia.";
        errValidacion=1;
    }
    var k = document.forms["suForm"]["codigoPostal"].value
    if (k.length < 4) {
        document.getElementById("signupError6").innerHTML = "Debes ingresar una codigoPostal valido.";
        errValidacion=1;
    }
    var l = document.forms["suForm"]["numeroTelefono"].value
    if (l.length < 8) {
        document.getElementById("signupError7").innerHTML = "Debes ingresar una numeroTelefono valido.";
        errValidacion=1;
    }
    var m = document.forms["suForm"]["email"].value
    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    if (!expresion.test(m)) {
        document.getElementById("signupError8").innerHTML = "Debes ingresar una email valido.";
        errValidacion=1;
    }
    if (errValidacion==1){
      return false;
    }
usuarioNuevo();
getUsuarios();
ocultarRegistro('ocultaRegistro');
mostrarRegistro('Modal');

}
