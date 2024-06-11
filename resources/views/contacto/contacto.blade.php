<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360</title>
    <link href="css/estiloContacto.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="Imagenes/favicon.png">
    <script src="js/java.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand mx-auto" href='{{url("index")}}'>
                    <img class="logo" src="Imagenes/logo-letras.png" alt="Cuarta imagen">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("index")}}'>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("actividades")}}'>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("lugaresInteres")}} '>Lugares de Interés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=' {{url("gastronomia")}}'>Gastronomía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("ocio")}}'>Ocio Nocturno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("contacto")}}'>Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form onsubmit="return Validarformulario();" class="color-form">
                    <h2>FORMULARIO</h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                            <input class="form-control obligatorio texto" type="text" name="name" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                            <input class="form-control obligatorio texto" type="text" id="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                            <input class="form-control obligatorio correo" type="email" name="email" id="correo1" placeholder="Email" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-floating mb-3">
                            <input class="form-control obligatorio correo" name="confirmacion" type="email" id="correo2" placeholder="Confirmación del Correo Electrónico" required>
                        </div>
                        <div class="col-12 form-floating mb-3">
                            <textarea id="descripcionMax" name="descripcionMax" rows="4" cols="50" maxlength="2000" class="form-control" placeholder="Descripción" required></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn-custom" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mi-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mensaje de Confirmación</h5>
                </div>
                <div class="modal-body">
                    ¡Mensaje Enviado Correctamente!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-custom2" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-4 text-center">
        <div class="container">
            <img class="logo" src="Imagenes/logo.png" alt="Logotipo de Salamanca360 con una rana verde y ojos grandes. La lengua forma la 's' del nombre. Colorido y llamativo">
            <p>&copy; 2024 Salamanca360. Todos los derechos reservados.</p>
        </div>
    </footer>

 
</body>
</html>
