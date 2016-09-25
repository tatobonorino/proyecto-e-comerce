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
    }
    else {
      if (p.length < 8) {
        document.getElementById("loginError2").innerHTML = "Debes ingresar una Contraseña de al menos 8 caracteres";
        return false;
      }
    }
}


/*
function validatesignupForm(){
  console.log('gg');
  var x = document.forms["signupForm"];
  for (var i = 0; i < x.length; i++) {
    var a = x[i].value;
    console.log(a);
    if (a == null || a == "") {
      document.getElementById("signupError8").innerHTML = "Te quedaron campos sin completar";
      return false;
    }
  }
}
*/
