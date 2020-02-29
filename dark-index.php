<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/icons/icons-pag/SM.png">
    <title>Inicio</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <?php
    include_once 'plantillas/data.php';
    ?>

<!--cargar fondos-->

    <link href="https://fonts.googleapis.com/css?family=Akronim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700|Sacramento&display=swap" rel="stylesheet">

<!--dar reglas a fondo-->

<!--akronim-->  
<style>h1,h4{font-family:'Akronim';}.akronim{font-family:'Akronim'!important;}</style>
<!--frederecka the great-->            
<style>p,a{font-family:'Fredericka the Great';}.fredericka{font-family:'Fredericka the Great'!important;}</style>
<!--Cabin Sketch-->
<style>.cabin{font-family:'Cabin Sketch',bolt700!important;}</style>
<style>.firma {font-family:'Sacramento'!important;}</style>
<!--css internos-->
<style>.SM{font-size:40px}.sinFuente{font-family:false;}</style>
<!--demas codigo-->

</head>
<body style="background-color:#161414; color:white;">
	<header>
        <nav class="container">
            <nav class="navbar navbar-expand-lg navbar-dark rounded">
                <a class="navbar-brand title-primary cabin SM" href="dark-index.php">SM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link letra-blanca" href="dark-index.php" title="Inicio"><img src="img/icons/nav-icons/dark-home.png" class="icon-size"> - inicio</a></li>
                        <li class="nav-item"><a class="nav-link letra-blanca" href="dark-findex.php" title="Fotos"><img src="img/icons/nav-icons/dark-pictures.png" class="icon-size"> - fotos</a></li>
                        <li class="nav-item"><a class="nav-link letra-blanca" href="dark-vindex.php" title="Videos"><img src="img/icons/nav-icons/dark-videos.png" class="icon-size"> - videos</a></li>
                        <li class="nav-item"><a class="nav-link letra-blanca" href="dark-aindex.php" title="Actualizaciones"><img src="img/icons/nav-icons/dark-updates.png" class="icon-size"> - actualizaciones</a></li>
                        <li class="nav-item"><a class="nav-link letra-blanca" href="dark-cindex.php" title="Creditos"><img src="img/icons/nav-icons/dark-credits.png" class="icon-size"> - creditos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle letra-blanca" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Redes Sociales"><img src="img/icons/nav-icons/dark-socialRed.png" class="icon-size"></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                                <a class="dropdown-item" href="https://www.facebook.com/StewartMBOficial/" target="blank"><img src="img/icons/social-icons/facebook.png" class="icon-size"><b> - Facebook</b></a>
                                <a class="dropdown-item" href="https://www.instagram.com/stewart_yubary_mb/" target="blank"><img src="img/icons/social-icons/instagram.png" class="icon-size"><b> - Instagram</b></a>
                                <a class="dropdown-item" href="https://www.youtube.com/channel/UCxwbL63L76XLJ_DZQ569O9A" target="blank"><img src="img/icons/social-icons/youtube.png" class="icon-size"><b> - YouTube</b></a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle letra-blanca" href="#" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DARK</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="index.php"><b>LIGHT</b></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>
    </header>
    <nav class="container text-center">
        <div class="jumbotron" style="background-color:#2c2c2c;">
            <h1>Inicio</h1>
		    <p>
                si algo te parece incomo (Fuentes de texto,estilos o demas) puedes avisar o reportar problemas por mi facebook o instagram personal presentes en la barra de busqueda por el signo @
            </p>
        </div>
    </nav>
    <?php
    include_once 'plantillas/contenido-index.php';
    ?>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="jumbotron text-center" style="background-color:#2c2c2c;">
            	<p class="sinFuente">Creado por <a class="firma px20 disable">StewatMontenegroBadilla</a></p>
            	<p>Derechos reservados &copy;-2020</p>
            </div>
        </div>
    </footer>
</body>

	<script type="text/javascript" src="js/jQuery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>