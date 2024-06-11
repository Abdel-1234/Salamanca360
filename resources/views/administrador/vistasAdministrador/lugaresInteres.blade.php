<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360</title>
    <link href="css/estiloeditar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="Imagenes/favicon.png">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand mx-auto" href="index.html">
                    <img class="logo" src="Imagenes/logo-letras.png" alt="Una S grande que y después unas letras que forman la palabra Salamanca360 es el logo de la página.">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("adminActividades")}}'>Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=' {{url("adminLugaresInteres")}}'>Lugares de Interés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("adminGastronomia")}} '>Gastronomía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("adminOcio")}}'>Ocio Nocturno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='{{url("formulario")}}'>Añadir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagenes/lugares1.jpg" class="d-block w-100" alt="actividades">
          </div>
        </div>
    </div>
    <section class="seccion-actividades">
        <div class="container">
            <div class="row">
                @foreach($lugaresInteres as $lugarInteres)
                    <div class="col-md-4">
                        <div class="tarjeta-actividad">
                            <form action='{{url("lugaresInteres/$lugarInteres->id")}}' method="get">
                                <img src="Imagenes/{{$lugarInteres->imagen_ruta}}" alt="{{$lugarInteres->nombre}}">
                                <div class="contenido-tarjeta">
                                    <h3 class="titulo-tarjeta">{{$lugarInteres->nombre}}</h3>
                                    <p class="descripcion-tarjeta">{{$lugarInteres->decripcionMin}}</p>
                                </div>
                            </form>
                            <div class="botones-actividad">
                                <form action='{{url("destroyLugaresInteres/$lugarInteres->id")}}' method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-custom-eliminar btn-sm" type="submit">Eliminar</button>
                                </form>
                                <a class="btn btn-custom-editar btn-sm" href='{{url("editLugaresInteres/$lugarInteres->id")}}'>Editar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="mt-5 py-4 text-center">
        <div class="container">
            <img class="logo" src="Imagenes/logo.png" alt="Logotipo de Salamanca360 con una rana verde y ojos grandes. La lengua forma la 's' del nombre. Colorido y llamativo">
            <p>&copy; 2024 Salamanca360. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>