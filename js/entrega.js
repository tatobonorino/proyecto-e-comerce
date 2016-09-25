function mostrarAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf(" " + "accordion-show") == -1) {
        x.className += " " + "accordion-show";
    } else {
        x.className = x.className.replace(" " + "accordion-show", "");
    }
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
