<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta name="apple-mobbile-web-app-capable" content="yes">
    <meta name="apple-mobbile-web-app-title" content="yes">
    <title>PLANTILLA HTML TARGETCODE</title>
    <link rel="icon" href="images/logo.png">

    <meta name="title" content="USERS">
    <meta name="description" content="Administracion de usuarios">
    <meta name="keyword" content="users, perfil, web">

    <!--===============================================
    Estilos CSS
    ================================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">

    <!--===============================================
    JS
    ================================================-->
    <script src="js/materialize.min.js"></script>

</head>
<body>
    
    <!--===============================================
    HEADER
    ================================================-->

    <header>
        <nav class="purple darken-1">
            <div class="container">
                <div class="nav-wrapper">
                <a href="#!" class="brand-logo left">
                    <img src="images/logo.png" width="40px">
                </a>
                <a href="#" data-target="nav-movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Articulos</a></li>
                    <li><a href="#" class="waves-effect waves-light btn-small purple accent-1">Registro</a></li>
                </ul>
                </div>
            </div>
        </nav>

        <ul class="sidenav" id="nav-movil">
            <li><a href="#">Articulos</a></li>
            <li><a href="#" class="waves-effect waves-light btn-small purple accent-1">Registro</a></li>
        </ul>
    </header>

    <!--===============================================
    HERO
    ================================================-->

    <section>
        <div>
            <div class="container">
                <h2 class="title-hero">
                    Lorem ipsum dolor sit amet consectetur adipisicing.
                </h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </section>

    <footer class="purple darken-1">
        <div class="container">
            <p class="copy">
                &copy; Todos los derechos reservados
            </p>
        </div>
    </footer>

    <div class="scrolltop scrolltop-dark"></div>
    <script src="js/app.js"></script>

</body>
</html>