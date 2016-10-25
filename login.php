<?php
	require_once("soporte.php");

	if ($auth->estaLogueado())
	{
		header("location:index.php");exit;
	}

	if ($_POST)
	{
		//Sé que llegó acá tras haber enviado el form

		$errores = $validar->validarLogin();

		if (empty($errores))
		{

			// Loguearlo
			$usuario = $repositorio->getUserRepository()->getUsuarioByMail($_POST["mail"]);

			$auth->loguear($usuario);

			// Si me puso que lo recuerde, recordarlo
			if (isset($_POST["recordame"])) {
				//recordarlo
				setcookie("usuarioLogueado", $usuario->getId(), time() + 60 * 60 * 24 * 3);
			}

			// Redirigirlo
			header("location:index.php");exit;
		}
	}
?>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Farma-libre Login</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top col-md-12">
        <div class="container-fluid">

        </div>

    </nav>

    <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="fondogris modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="textoblanco text-center">Login</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block" name="loginForm" onsubmit="validateloginForm()" action="login.php">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" placeholder="Correo electrònico" name="mail">
                            <p id="loginError1"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control input-lg" placeholder="Contraseña" name="password">
                            <p id="loginError2"></p>
                        </div>
                        <div class="form-group">
                            <button class="fondobotonverde btn btn-primary btn-lg btn-block ">Login</button>
                            <span class="padding pull-right"><a href="./registro.php">Registro</a></span>
                            <span class="padding pull-left"><a href="./faq.php">Preguntas Frecuentes</a></span>
                        </div>
                        <div class="reset">
                          <a href="./reset.php">Olvide mi clave.</a>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="margenregistrologin col-md-12">
                        <button class="btn" data-dismiss="modal" aria-hidden="true"><a href="./index.php">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/entrega.js"></script>
</body>

</html>
