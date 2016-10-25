<?php
	require_once("soporte.php");

	if ($auth->estaLogueado())
	{
		header("location:index.php");exit;
	}

	$pNombre = "";
	$pApellido = "";
	$pMail = "";
  if ($_POST)
  {
    $pNombre = $_POST["nombre"];
    $pApellido = $_POST["apellido"];
    $pMail = $_POST["mail"];
    //Acá vengo si me enviaron el form

    //Validar
    $errores = $validar->validarUsuario($_POST);

    // Si no hay errores....
    if (empty($errores))
    {
      $miUsuarioArr = $_POST;
      $usuario = new Usuario($_POST);
      $usuario->setPassword($_POST["password"]);
      // Guardar al usuario en un JSON
      $repositorio->getUserRepository()->guardarUsuario($usuario);
      //$usuario->guardarImagen($usuario);
      // Reenviarlo a la felicidad
      header("location:register.php");exit;
    }
  }
  ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top col-md-12">
        <div class="container-fluid">

            <div class="navbar-left col-md-3">
                <img class="imagenLogo" src="imagenes/farma-libre logo pag.png" alt="" />
            </div>

            <div class="paddingarriba col-md-6">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Buscar...">
                    </div>
                    <button type="submit" class="fondobotonverde btn btn-default">Buscar</button>
                </form>
            </div>
            <div class="paddingarriba col-md-3">
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="fondobotonesinicio btn btn-default navbar-btn" onclick="location.href='login.html'">Login</button>
                </ul>
            </div>
        </div>

    </nav>
    <div class="container">
        <div id='ocultaRegistro' class="container">
            <h1 class="fondogris well">Registrese</h1>
            <div class="fondogris col-lg-12 well">
                <div class="row">
                    <form name="suForm" action="registro.php" method="POST" onsubmit=validateForm() enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Nombre</label>
                                    <input type="text" placeholder="Ingrese su nombre aqui.." class="form-control" name="nombre" value="<?php echo $pNombre ?>">
                                    <p id="signupError1"></p>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Apellido</label>
                                    <input type="text" placeholder="Ingrese su apellido aqui.." class="form-control" name="apellido" value="<?php echo $pApellido ?>">
                                    <p id="signupError2"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" placeholder="Ingrese su dirección aqui.." class="form-control" name="direccion" value = <?php echo "GGGGG" ?>></textarea>
                                <p id="signupError3"></p>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Ciudad</label>
                                    <input type="text" placeholder="Ingrese su ciudad aqui.." class="form-control" name="ciudad">
                                    <p id="signupError4"></p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Provincia</label>
                                    <input type="text" placeholder="Ingrese su provincia aqui.." class="form-control" name="provincia">
                                    <p id="signupError5"></p>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Código Postal</label>
                                    <input type="text" placeholder="Ingrese su código postal aqui.." class="form-control" name="codigoPostal">
                                    <p id="signupError6"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Número Telefonico</label>
                                <input type="text" placeholder="Ingrese Número Telefonico aqui.." class="form-control" name="numeroTelefono">
                                <p id="signupError7"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Email</label>
                                <input type="text" placeholder="Ingrese Email aqui.." class="form-control" name="mail" value="<?php echo $pMail ?>">
                                <p id="signupError8"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Password</label>
                                <input type="text" placeholder="Ingrese clave aqui.." class="form-control" name="password">
                                <p id="signupError9"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Confirmar Password</label>
                                <input type="text" placeholder="Confirme la clave aqui.." class="form-control" name="confirmPassword">
                                <p id="signupError10"></p>
                            </div>
                        </div>
                        <button type="submit" class="btn" onclick=" validateForm();">Enviar</button>
                        <br>
                        <div class="reset">
                          <a href="./reset.html">Olvide mi clave.</a>
                      </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="Modal" class="fondogris modal-content hidden">
        <div class="modal-header">
            <h1 class="textoblanco text-center">Felicitaciones, has sido registrado correctamente!</h1>
        </div>
        <div class="modal-body">
            <h3>La cantidad de usuarios registrados es </h3>
            <h3 id="cantUsuarios"></h3="">
        </div>
        <div class="modal-footer">
        </div>
    </div>
    </div>
    <script src="../js/entrega.js" type="text/javascript"></script>
</body>
<footer>
  <div class="col-lg-12">
      <p>Todos los derechos reservados &copy; 2016</p>
  </div>
  <div class="col-lg-12">
    <a href="./faq.html">Preguntas Frecuentes</a>
</div>
</footer>
</html>
