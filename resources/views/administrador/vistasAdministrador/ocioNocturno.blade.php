<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360</title>
    <link href="css/estiloeditar.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="Imagenes/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand mx-auto" href="#">
                    <img class="logo" src="Imagenes/logo-letras.png" alt="Cuarta imagen">
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
            <img src="imagenes/ocio1.jpg" class="d-block w-100" alt="actividades">
          </div>
        </div>
    </div>

    <section class="seccion-actividades">
        <div class="container">
            <div class="row">
                <!-- Actividad 1 -->

                @foreach($ocio as $oci)
                    <div class="col-md-4">
                        <div class="tarjeta-actividad">
                            <form action='{{url("ocio/$oci->id")}}' method="get">
                                <img src="Imagenes/{{$oci->imagen_ruta}}" alt="{{$oci->nombre}}">
                                <div class="contenido-tarjeta">
                                    <h3 class="titulo-tarjeta">{{$oci->nombre}}</h3>
                                    <p class="descripcion-tarjeta">{{$oci->decripcionMin}}</p>
                                </div>
                            </form>
                            <div class="botones-actividad">
                                <form action='{{url("destroyOcio/$oci->id")}}' method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-custom-eliminar btn-sm" type="submit">Eliminar</button>
                                </form>
                                <a class="btn btn-custom-editar btn-sm" href='{{url("editOcio/$oci->id")}}'>Editar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="mt-5 py-4 text-center" style="background-color: #333; color: white;">
        <div class="container">
            <img class="logo" src="Imagenes/logo.png" alt="Cuarta imagen">
            <p>&copy; 2024 Salamanca360. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
