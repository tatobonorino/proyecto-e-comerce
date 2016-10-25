
<?php
	require_once("soporte.php");

	$nombre = "";

	if ($auth->estaLogueado())
	{
		$user = $auth->getUsuarioLogueado();

		$nombre = $user->getNombre();
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

    <title>Home</title>
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
                <ul class="marginafuera  texto nav navbar-nav navbar-right">
                    <button type="button" class="fondobotonesinicio btn btn-default navbar-btn" onclick="location.href='registro.php'">Registro</button>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="fondobotonesinicio btn btn-default navbar-btn" onclick="location.href='login.php'">Login</button>
                </ul>
            </div>
        </div>

    </nav>

    <div class="container">


        <header class="fondogris jumbotron hero-spacer">
            <h1 class="textoblanco">Bienvenido!</h1>
        </header>

        <hr>


        <div class="row">
            <div class="col-lg-12">
                <h3 class="ultimosproductos">Ultimas Novedades</h3>
            </div>
        </div>

        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="fondogris thumbnail">
                    <img src="imagenes/image1.jpg" alt="">
                    <div class="caption">
                        <h3>Perfumes exclusivos</h3>
                        <p class="textoblanco">Descubra nuestra exclusiva linea de perfumeria.</p>
                        <p>
                            <a href="#" class="fondobotonverde btn btn-primary">Compra YA!</a> <a href="#" class="btn btn-default">Más Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="fondogris thumbnail">
                    <img src="imagenes/image2.jpg" alt="">
                    <div class="caption">
                        <h3>Perfumes importados</h3>
                        <p class="textoblanco">Las mejores marcas de nivel internacional.</p>
                        <p>
                            <a href="#" class="fondobotonverde btn btn-primary">Compra YA!</a> <a href="#" class="btn btn-default">Más Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="fondogris thumbnail">
                    <img src="imagenes/image1.jpg" alt="">
                    <div class="caption">
                        <h3>Kit de baño</h3>
                        <p class="textoblanco">Los mejores productos para la hora del baño.</p>
                        <p>
                            <a href="#" class="fondobotonverde btn btn-primary">Compra YA!</a> <a href="#" class="btn btn-default">Más Info</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="fondogris thumbnail">
                    <img src="imagenes/image4.jpg" alt="">
                    <div class="caption">
                        <h3>Maquillaje</h3>
                        <p class="textoblanco">Exclusivos productos de maquillaje para la mujer.</p>
                        <p>
                            <a href="#" class="fondobotonverde btn btn-primary">Compra YA!</a> <a href="#" class="btn btn-default">Más Info</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>


        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <a href="./faq.php">Preguntas Frecuentes</a>
                    <p>Todos los derechos reservados &copy; 2016</p>
                </div>
            </div>
        </footer>

    </div>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
