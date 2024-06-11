<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salamanca360</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="Imagenes/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.0.1/dist/cookieconsent.css">

</head>
<body>
    <div class="insta-color">
        <a href="https://www.instagram.com/salamanca_360/">
            <img class="insta" src="Imagenes/insta.png" alt="Logotipo de una cámara de fotos que hace referencia a la red social de Instagram">
        </a>
        
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand mx-auto">
                    <img class="logo" src="Imagenes/logo-letras.png" alt="Una S grande que y después unas letras que forman la palabra Salamanca360 es el logo de la página.">
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


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="Imagenes/carrusel-1.jpg" alt="Imagen con tonos morados donde se ve a Gene de fondo y a una chica con los brazos arriba moviendo el pelo mientras baila">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Descubre Salamanca</h5>
                    <p>Explora la magia de esta maravillosa ciudad.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Imagenes/actividades1.jpg" alt="Joven usando un visor de realidad virtual, participando en una experiencia de juego de realidad virtual con iluminación tenue y fondo desenfocado.">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sumérgete en la cultura</h5>
                    <p>Disfruta de festivales, teatro y música en vivo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Imagenes/gastronomia1.jpg" alt="Una mesa con varios platos de comida donde vemos varias manos, ir a coger la tortilla de un plato.">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Saborea la gastronomía</h5>
                    <p>Deléitate con la deliciosa comida local y los vinos de la región.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="Imagenes/lugares1.jpg" alt="Una ciudad de noche más concretamente la de salamanca en el que vemos su catedral toda iluminada">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Relájate y diviértete</h5>
                    <p>Descubre lugares únicos para relajarte y disfrutar del ocio.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <section class="seccion-actividades">
        <div class="container">
            <h2 class="titulo-seccion">Actividades</h2>
            <div class="row align-items-stretch">
                @foreach($actividades as $actividad)
                    <div class="col-md-4">
                        <div class="tarjeta-actividad">
                            <form action='{{url("mostrarActividad/$actividad->id")}}' method="get">
                                <img src="Imagenes/{{$actividad->imagen_ruta}}" alt="{{$actividad->nombre}}">
                                <div class="contenido-tarjeta">
                                    <h3 class="titulo-tarjeta">{{$actividad->nombre}}</h3>
                                    <p class="descripcion-tarjeta">{{$actividad->decripcionMin}}</p>
                                    <input type="submit" value="Ver más" class="ver-mas" />
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href='{{url("actividades")}}'  id="mi-boton" class="btn btn-primary">Más actividades</a>
            </div>
            

            <h2 class="titulo-seccion">Lugares de interés</h2>
            <div class="row align-items-stretch">
                    @foreach($lugaresInteres as $lugarInteres)
                        <div class="col-md-4">
                            <div class="tarjeta-actividad">
                                <form action='{{url("mostrarLugarInteres/$lugarInteres->id")}}' method="get">
                                    <img src="Imagenes/{{$lugarInteres->imagen_ruta}}" alt="{{$lugarInteres->nombre}}">
                                    <div class="contenido-tarjeta">
                                        <h3 class="titulo-tarjeta">{{$lugarInteres->nombre}}</h3>
                                        <p class="descripcion-tarjeta">{{$lugarInteres->decripcionMin}}</p>
                                        <input type="submit" value="Ver más" class="ver-mas" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
            </div>
            <div class="text-center mt-4">
                <a href='{{url("lugaresInteres")}} '  id="mi-boton" class="btn btn-primary">Más Lugares</a>
            </div>

        <h2 class="titulo-seccion">Gastronomía</h2>
        <div class="row align-items-stretch">
            @foreach($gastronomia as $gast)
                <div class="col-md-4">
                    <div class="tarjeta-actividad">
                        <form action='{{url("mostrarVistaGastronomia/$gast->id")}}' method="get">
                            <img src="Imagenes/{{$gast->imagen_ruta}}" alt="{{$gast->nombre}}">
                            <div class="contenido-tarjeta">
                                <h3 class="titulo-tarjeta">{{$gast->nombre}}</h3>
                                <p class="descripcion-tarjeta">{{$gast->decripcionMin}}</p>
                                <input type="submit" value="Ver más" class="ver-mas" />
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href=' {{url("gastronomia")}}'  id="mi-boton" class="btn btn-primary">Más Gastronomía</a>
        </div>

        <h2 class="titulo-seccion">Ocio Nocturno</h2>
        <div class="row align-items-stretch">
            @foreach($ocio as $oci)
                <div class="col-md-4">
                    <div class="tarjeta-actividad">
                        <form action='{{url("mostrarOcio/$oci->id")}}' method="get">
                            <img src="Imagenes/{{$oci->imagen_ruta}}" alt="{{$oci->nombre}}">
                            <div class="contenido-tarjeta">
                                <h3 class="titulo-tarjeta">{{$oci->nombre}}</h3>
                                <p class="descripcion-tarjeta">{{$oci->decripcionMin}}</p>
                                <input type="submit" value="Ver más" class="ver-mas" />
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href='{{url("ocio")}}'  id="mi-boton" class="btn btn-primary">Más Ocio Nocturno</a>
        </div>
    </div>
</div>
    </section>

    <footer class="mt-5 py-4 text-center">
        <div class="container">
            <img class="logo" src="Imagenes/logo.png"  alt="Logotipo de Salamanca360 con una rana verde y ojos grandes. La lengua forma la 's' del nombre. Colorido y llamativo">
            <p>&copy; 2024 Salamanca360. Todos los derechos reservados.</p>
            <a href="#" data-cc="show-preferencesModal" aria-haspopup="dialog">Gestionar Cookies</a>
        </div>
    </footer>
    <script type="module" src="js/cookieconsent-config.js"></script>
</body>
</html>