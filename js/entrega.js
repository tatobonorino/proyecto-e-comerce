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

function validateForm() {
    var n = document.forms["suForm"]["nombre"].value
    if (n.length < 2) {
        document.getElementById("signupError1").innerHTML = "Debes ingresar una nombre.";
        return false;
    }
    var a = document.forms["suForm"]["apellido"].value
    if (a.length < 2) {
        document.getElementById("signupError2").innerHTML = "Debes ingresar una apellido.";
        return false;
    }
    var d = document.forms["suForm"]["direccion"].value
    if (d.length < 2) {
        document.getElementById("signupError3").innerHTML = "Debes ingresar una direccion.";
        return false;
    }
    var c = document.forms["suForm"]["ciudad"].value
    if (c.length < 2) {
        document.getElementById("signupError4").innerHTML = "Debes ingresar una ciudad.";
        return false;
    }
    var j = document.forms["suForm"]["provincia"].value
    if (j.length < 2) {
        document.getElementById("signupError5").innerHTML = "Debes ingresar una provincia.";
        return false;
    }
    var k = document.forms["suForm"]["codigoPostal"].value
    if (k.length < 4) {
        document.getElementById("signupError6").innerHTML = "Debes ingresar una codigoPostal valido.";
        return false;
    }
    var l = document.forms["suForm"]["numeroTelefono"].value
    if (l.length < 8) {
        document.getElementById("signupError7").innerHTML = "Debes ingresar una numeroTelefono valido.";
        return false;
    }
    var m = document.forms["suForm"]["email"].value
    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    if (!expresion.test(m)) {
        document.getElementById("signupError8").innerHTML = "Debes ingresar una email valido.";
        return false;
    }
}
