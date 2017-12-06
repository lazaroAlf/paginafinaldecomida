<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo!</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            padding-top: 3.5rem;
        }
        
        .form-group {
            margin-bottom: 0;
            display: inline-block;
            vertical-align: top;
        }

        #loader {
            display: none;
            width: 53px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Mi priyecto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Link 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="http://google.com" class="nav-link dropdown-toggle" data-toggle="dropdown">Lista</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Liga 1</a>
                        <a href="#" class="dropdown-item">Liga 2</a>
                        <a href="#" class="dropdown-item">Liga 3</a>
                    </div>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="form" action="login.php" method="post">
            <img src="img/GD.gif" id="loader"/>
                <div class="form-group">
                    <input type="text" name="correo" placeholder="Correo" class="form-control" id="correo">
                </div>
                <div class="form-group">
                    <input type="password" name="pass" placeholder="Contraseña" class="form-control" id="pass">
                </div>
                <button type="submit" name="ingresar" class="btn btn-success" id="ingresar">Ingresar</button>
            </form>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Hola mundo!</h1>
                <p>Este template es para marketing simple o para un sitio web de información. Incluye una sección grande llamada jumbotron y tres piezas de contenido. Úsalo como un punto de partida para crear despúes algo único.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="registro.php">Registrarse</a>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born </p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born </p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Encabezado</h2>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born </p>
                    <p>
                        <a href="#" class="btn btn-secondary">Ver detalles</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Mi compañía</p>
    </footer>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min"></script>

    <script>
        $(document).ready(function(){
            $("#ingresar").on("click",function(evento){
                evento.preventDefault();

                var caja_correo = $("#correo").val();
                var caja_pass = $("#pass").val();

                $('#loader').show();

                $.ajax({
                    type: "POST",
                    url: "https://dabe-01.000webhostapp.com/bootstrap1.2/loginajaxprocesar.php",
                    data: {
                        correo: caja_correo,
                        pass: caja_pass
                    }
                }).done(function(datos){
                    setTimeout(function() {
                        $('#loader').hide();
                    },2000);
                    if(datos == 'Usuario correcto'){
                        window.location.href = "https://dabe-01.000webhostapp.com/bootstrap1.2/vip.php"
                    }
                    
                }).fail(function(error){
                    setTimeout(function() {
                        $('#loader').hide();
                    },2000);
                }); 
            });
        });
    </script>
</body>

</html>