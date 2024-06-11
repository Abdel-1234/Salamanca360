
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360</title>
    <link href="{{ asset('css/estilo_actividades.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../Imagenes/favicon.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand mx-auto" href='{{url("index")}}'>
                    <img class="logo" src="{{ asset('Imagenes/logo-letras.png') }}" alt="Cuarta imagen">
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

    <section class="detalle-actividad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contenedor-imagen">
                    <img src='{{ asset("Imagenes/$VistaGastronomia->imagen_ruta") }}' class="card-img-top" alt="Máquina donde salen las bolas de los bolos, el fondo es una bolera.">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="contenedor-tarjeta">
                        <div class="tarjeta">
                            <h2 class="tarjeta-titulo">{{$VistaGastronomia->nombre}}</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Descripción:</strong> {{$VistaGastronomia->decripcionMax}}</li>
                                <li class="list-group-item"><strong>Ubicación:</strong> {{ $VistaGastronomia->ubicacion }}</li>
                                <li class="list-group-item"><strong>Enlace:</strong> {{ $VistaGastronomia->enlace }}</li>
                                <li class="list-group-item"><strong>Contacto:</strong> {{ $VistaGastronomia->telefono }}</li>
                                <li class="list-group-item"><strong>Precio:</strong> {{$VistaGastronomia->precio}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            
            </div>
            <diV class="mapa">
                {!! $VistaGastronomia->ubicacion_enlace !!}            
            </diV>
        </div>
        
    </section>

    <footer class="mt-5 py-4 text-center">
        <div class="container">
            <img class="logo" src="../Imagenes/logo.png" alt="Cuarta imagen">
            <p>&copy; 2024 Salamanca360. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
